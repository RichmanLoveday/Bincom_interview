 <?php $this->view('includes/header'); ?>
 <h1 class="text-3xl font-bold text-center">
     Result for any individual polling unit
 </h1>


 <div class="flex justify-between p-10 items-center">
     <div>
         <h3 class="">Polling Unit: 4</h3>
     </div>
     <form action="" method="get" class="flex justify-content-end justify-end p-10">
         <div class="flex space-x-2">
             <select name="unit" data-te-select-init>
                 <option value="0">---select polling unit---</option>
                 <?php foreach ($poling_units as $unit => $unitVal) : ?>
                 <option value="<?= $poling_units[$unit]->polling_unit_id ?>">
                     <?= $poling_units[$unit]->polling_unit_name ?></option>
                 <?php endforeach; ?>
             </select>

             <button type="summit" name="Serach" value="submit"
                 class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none">
                 Search
             </button>
         </div>
     </form>
 </div>

 <div class="flex flex-col overflow-hidden p-5 mb-10">
     <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
         <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
             <div class="overflow-hidden">
                 <table class="min-w-full text-left text-sm font-light">
                     <thead class="border-b font-medium dark:border-neutral-500">
                         <tr>
                             <th scope="col" class="px-6 py-4">#</th>
                             <th scope="col" class="px-6 py-4">Polling Unit</th>
                             <th scope="col" class="px-6 py-4">LGA</th>
                             <th scope="col" class="px-6 py-4">Party</th>
                             <th scope="col" class="px-6 py-4">Result</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php if (is_array($polling_unit_data)) : ?>
                         <?php $num = 0; ?>
                         <?php foreach ($polling_unit_data as $key => $value) : $num++; ?>
                         <tr class="border-b dark:border-neutral-500">
                             <td class="whitespace-nowrap px-6 py-4 font-medium"><?= $num ?></td>
                             <td class="whitespace-nowrap px-6 py-4">
                                 <?= $polling_unit_data[$key]->polling_unit->polling_unit_name; ?></td>
                             <td class="whitespace-nowrap px-6 py-4"><?= $polling_unit_data[$key]->lga ?></td>
                             <td class="whitespace-nowrap px-6 py-4"><?= $polling_unit_data[$key]->party_abbreviation ?>
                             </td>
                             <td class="whitespace-nowrap px-6 py-4"><?= $polling_unit_data[$key]->party_score ?></td>
                         </tr>
                         <?php endforeach; ?>
                         <?php endif; ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
 <?php $this->view('includes/footer'); ?>