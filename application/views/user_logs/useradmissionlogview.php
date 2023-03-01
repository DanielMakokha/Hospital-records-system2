
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">Log Admission
                  </h5>  

            </div>
            <div class="card-body">

      
            
               <hr>
              <div class="container">
            
             </div>

              <div class="table">
                <table class="table " id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      
                      <th class="text-center">Username</th>
                      <th class="text-center">First Name</th>
                      <th class="text-center">Patient</th>
                         <th class="text-center">Log Time/Date</th>
                      <th class="text-center">Details</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                      <?php foreach($get_log_admission as $log_ad): ?>
                   <tr>

                <?php echo "<td class='text-center'>". $log_ad->su_user ."</td>" ?>
                <?php echo "<td class='text-center'>". $log_ad->su_fname ."</td>" ?>
                <?php echo "<td class='text-center'>".  $log_ad->lo_fname."  ".$log_ad->lo_lname ."</td>" ?>
                <?php echo "<td class='text-center'>". $log_ad->log_time ."</td>" ?>

                
                 <?php echo "<td class='text-center'><a  class='btn btn-info' href='". base_url() ."logscontrol/log_admissiondetails/". $log_ad->lo_id ."'>View
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






