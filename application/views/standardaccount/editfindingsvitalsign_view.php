

 
  <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Findings</h1>
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
                        <?php echo $get_patient_data->a_lname ?>&nbsp&nbsp
                        <?php echo $get_patient_data->a_fname ?>&nbsp&nbsp
                        <?php echo $get_patient_data->a_mname ?>
                         
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
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Date Consulted</div>
             </div>
                       <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo $get_patient_data->a_date ?>
                        
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>


    </div><!-- End of Row -->




<div class="row"><!-- Begin Row -->
 


              <!-- Findings Box -->
            <div  id="findings" class="col-sm-5 ">


              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success">Vital Signs <?php echo "<a style='margin-left: 255px; text-decoration:none;' class='text-secondary' href='". base_url() ."standardusercontrol/findings_view/". $get_patient_data->a_id ."'>" ?> 
                    <i class="fa fa-arrow-left"></i></a></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
            
            <?php $this->load->view($form); ?>

        </div> 
      </div>
                
 </div>


<!-- ///// -->
            <div  id="findings" class="col-sm-7 ">
              
                    <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success"> Findings <?php echo "<a style='margin-left: 375px; text-decoration:none;' class='text-secondary' href='". base_url() ."standardusercontrol/update_findings/". $get_patient_data->a_id ."'>" ?> 
                    <i class="fa fa-edit"></i></a></h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
    
                <?php if($this->session->flashdata('findings_success')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('findings_success') ."</div>" ?>
           <?php endif; ?>


                  <div class="col-sm-6">
             
            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Present Illness </div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_patient_data->a_historypresentillness): ?>
              <?php echo $get_patient_data->a_historypresentillness; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>
               </div>
              </div> 

             </div>


                  <div class="col-sm-12">
             
            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Physical Examination</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_patient_data->a_physicalexam): ?>
              <?php echo $get_patient_data->a_physicalexam; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>
               </div>
              </div> 

             </div>

            <div class="col-sm-12">
             
            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complete Diagnosis</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_patient_data->a_diagnosis): ?>
              <?php echo $get_patient_data->a_diagnosis; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>
               </div>
              </div> 

             </div>

              <div class="col-sm-12">
             
            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication / Treatment</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_patient_data->a_medication): ?>
              <?php echo $get_patient_data->a_medication; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>
               </div>
              </div> 

             </div>




                 </div>

             </div>

        </div>

       

  

</div><!-- End of Row -->
 
