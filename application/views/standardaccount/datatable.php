
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">Out Patient Table
                  </h5>  

            </div>
            <div class="card-body">

      
            
               <hr>
              <div class="container">
            
             </div>

              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th class="text-center">History of Present Illness</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Date Consulted</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                      <?php foreach($get_doctor_patient as $patient): ?>
                   <tr>

                <?php echo "<td class='text-center'>". $patient->a_lname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_fname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_mname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_historypresentillness ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_gender ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_age ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_date ."</td>" ?>
                
                 <?php echo "<td class='text-center'><a  class='btn btn-info' href='". base_url() ."standardusercontrol/findings_view/". $patient->a_id ."'>View
                  </a> </td>" ?>


            
                    </tr>           
                 <?php endforeach; ?>
               
                   
                  </tbody>

                </table>
              </div>
            </div>
          </div>


 

 <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




 <script>

  $(document).ready(function(){
  
  $('#import_form').on('submit', function(event) {
    event.preventDefault();
   
   $.ajax({
     beforeSend:function(){
      $('#btn-upload').html('Importing...');
     },
      success:function(){
       $('#import_form')[0].reset();
       $('#btn-upload').attr('disabled', false);
       $('#btn-upload').html('Import Done');
      }
   });

  });

</script>



