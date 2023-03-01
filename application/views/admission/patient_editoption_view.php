
  <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Patient Record</h1>
          </div>
          
	<div class="row"> <!-- Begin of Row -->

	    <div class="col-xl-8 col-md-8 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  	<div class="col-auto">
    			 	 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">PATIENT NAME</div>
    			 	 </div>
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	&nbsp&nbsp&nbsp&nbsp&nbsp
                      	<?php echo $get_data->pr_lname ?>&nbsp&nbsp
                      	<?php echo $get_data->pr_fname ?>&nbsp&nbsp
                      	<?php echo $get_data->pr_mname ?>
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-4 col-md-6 mb-4 ml-auto">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  	<div class="col-auto">
        			 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Hospital Case No.</div>
    			 	 </div>
                       <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      	<?php echo "P-0".$get_data->pr_id ?>
                        
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>


    </div><!-- End of Row -->


<div class="row"><!-- Begin Row -->
 
  <!-- First Column -->
            <div class="col-lg-4">

              <!-- Details -->
              <div id="edit_option" class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Details <?php echo "<a style='margin-left: 225px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patientdataview/". $get_data->pr_id ."#edit_option'>" ?>
                    <i class='fas fa-arrow-left'></i></a> </h6>        
                </div>
               <div class="card-body"> <!--Card Body begin tag  -->

               
               <?php $this->load->view($edit_option_view); ?>

                 
                </div><!--Card body end tag -->
              </div>
              
			
		   </div>



		          <!-- Findings Box -->
            <div id="findings" class="col-xl-8 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success">OPD Findings <?php echo "<a style='margin-left: 450px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/add_findings/". $get_data->pr_id ."#findings'>" ?> <i class="fa 
                   fa-plus"></i></a></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="table">

                <table class="table table-bordered" id="dataTable" cellspacing="0">

                  <thead>
                    <tr>
                      <th class="text-center">History of Present Illness</th>
                      <th class="text-center">Date Concluded</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php foreach($get_findings_data as $findings): ?>

                    <tr>


                <?php echo "<td class='text-center'><b><a style='color:green;' href='". base_url() ."admissioncontrol/findingsview/". $findings->findings_id ."'>". $findings->f_historypresentillness ."</b></td>" ?>
                <?php echo "<td class='text-center'>". $findings->f_date ."</td>" ?>     
                 
                    </tr>      

                 <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
             
                </div>
                    </div>
                     <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-success">Admission <?php echo "<a style='margin-left: 550px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/admit_form/". $get_data->pr_id ."#admission'>" ?> <i class="fa 
                   fa-plus"></i></a></a></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   

                  <div class="table">

                <table class="table table-bordered" id="dataTable" cellspacing="0">

                  <thead>
                    <tr>
                      <th class="text-center">Ward Admitted</th>
                      <th class="text-center">Admission Date</th>
                    </tr>
                  </thead>
                  <tbody>
           
               <?php foreach($get_admission_data as $admission): ?>
                
                    <tr>

                <?php echo "<td class='text-center'><b><a style='color: green;' href='". base_url() ."admissioncontrol/admissionview/". $admission->admission_id ."'>". $admission->ad_wardname ."</b></td>" ?>
                <?php echo "<td class='text-center'>". $admission->ad_date ."</td>" ?>     
                
                 
                    </tr>      

                 <?php endforeach; ?>

                  </tbody>
                </table>
              </div>

                  </div>
           
         



 
  


            


</div><!-- End of Row -->
    

