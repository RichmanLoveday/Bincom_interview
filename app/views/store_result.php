 <?php $this->view('includes/header'); ?>
 <h1 class="text-3xl font-bold text-center">
     Store results for all parties for a new polling unit.
 </h1>

 <div class="flex justify-between p-10 items-center">
     <div>
         <h3 class="">New result</h3>
     </div>
     <div class="flex space-x-2">
         <button type="button"
             class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
             data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init
             data-te-ripple-color="light">
             Add new result
         </button>
     </div>
 </div>

 <?php $this->view('includes/modals', $data); ?>
 <?php $this->view('includes/footer'); ?>