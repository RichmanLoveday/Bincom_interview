<?php

use app\core\Controller;

class Polling_unit extends Controller
{

    public function index()
    {
        $polling_unit = $this->load_model('pollingUnit');
        $local_govt = $this->load_model('localGovt');

        $polling_units = $polling_unit->get_all_polling_unit();

        if (isset($_GET['unit']) && $_GET['unit'] != 0) {
            $polling_unit_data = $polling_unit->polling_unit_result_by_id($_GET['unit']);
        } else {
            $polling_unit_data = $polling_unit->polling_unit_results();
        }

        // some local govt has 0 ids
        if (is_array($polling_unit_data)) {
            foreach ($polling_unit_data as $key => $value) {
                $polling_unit_name = $polling_unit->get_polling_unit_by_id($value->polling_unit_uniqueid);

                if (is_object($polling_unit_name)) {
                    $polling_unit_data[$key]->polling_unit = $polling_unit->get_polling_unit_by_id($value->polling_unit_uniqueid);
                    $polling_unit_data[$key]->lga = is_array($local_govt->get_local_qovt_by_id($polling_unit_name->lga_id)) ? $local_govt->get_local_qovt_by_id($polling_unit_name->lga_id)[0]->lga_name : 'N/A';
                }
            }
        }


        // get polling units
        $updated_units = [];
        foreach ($polling_units as $unit => $unitVal) {
            //  echo $polling_units[$unit];
            if ($polling_units[$unit]->polling_unit_name != '') {
                array_push($updated_units, $polling_units[$unit]);
            }
        }



        $this->view('polling_unit_result', ['polling_unit_data' =>  $polling_unit_data, 'poling_units' => $updated_units]);
    }

    public function total_result()
    {
        $polling_unit = $this->load_model('pollingUnit');
        $local_govt = $this->load_model('localGovt');
        $lgas = $local_govt->get_all_local_govt();

        $polling_results = $polling_unit->get_polling_units_and_results();

        if (isset($_GET['unit']) && $_GET['unit'] != 0) {
            $id = $_GET['unit'];

            $local_govts = $local_govt->get_local_qovt_by_id($id);
            foreach ($local_govts as $localGov => $localGovVal) {
                $total = 0;
                $local_govts[$localGov]->local_gov_result = 0;
                foreach ($polling_results as $pollingUnit => $pollingVal) {
                    if ($polling_results[$pollingUnit]->lga_id == $local_govts[$localGov]->uniqueid) {
                        $total += $polling_results[$pollingUnit]->results;
                        $local_govts[$localGov]->local_gov_result = $total;
                    }
                }
            }
        } else {
            $local_govts = $local_govt->get_all_local_govt();
            foreach ($local_govts as $localGov => $localGovVal) {
                $total = 0;
                $local_govts[$localGov]->local_gov_result = 0;
                foreach ($polling_results as $pollingUnit => $pollingVal) {
                    if ($polling_results[$pollingUnit]->lga_id == $local_govts[$localGov]->uniqueid) {
                        $total += $polling_results[$pollingUnit]->results;
                        $local_govts[$localGov]->local_gov_result = $total;
                    }
                }
            }
        }

        $this->view('total_result_of_polling_units', ['lga_results' => $local_govts, 'local_govts' => $lgas]);
    }

    public function store_result()
    {
        $polling_unit = $this->load_model('pollingUnit');
        $party = $this->load_model('parties');

        $data['parties'] = $party->get_all_party();
        $data['polling_units'] = $polling_unit->get_all_polling_unit();

        $this->view('store_result', $data);
    }
}