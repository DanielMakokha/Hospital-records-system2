
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">Admission Table
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
                      <th class="text-center">Ward</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Date Admitted</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                      <?php foreach($get_doctor_patient as $patient): ?>
                   <tr>

                       
                <?php echo "<td class='text-center'>". $patient->a_lname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_fname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_mname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_wardname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_gender ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_age ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->a_date ."</td>" ?>

                      
                 <?php echo "<td class='text-center'><a style='margin-left:5px;' class='btn btn-info' href='". base_url() ."standardusercontrol/admission_view/". $patient->a_id ."'>View
                  </a></td>" ?>

            
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



