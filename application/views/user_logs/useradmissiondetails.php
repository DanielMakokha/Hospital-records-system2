

 
  <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Logs Admission</h1>
          </div>

  <div class="row"> <!-- Begin of Row -->

      <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
             <div class="text-xs font-weight-bold text-success text-uppercase mb-1">PATIENT NAME</div>
             </div>
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo $get_log_details->lo_lname ?>&nbsp&nbsp
                        <?php echo $get_log_details->lo_fname ?>&nbsp&nbsp
                        <?php echo $get_log_details->lo_mname ?>
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-6 col-md-6 mb-4 ml-auto">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Logs Date/Time</div>
             </div>
                       <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo $get_log_details->log_time ?>
                        
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>


    </div><!-- End of Row -->




<div class="row"><!-- Begin Row -->
 


              <!-- Findings Box -->
            <div  id="admission" class="col-sm-12 ">


              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success">Admission Details </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
 
  
            
                <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admitted by </div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_admittedby): ?>
              <?php echo $get_log_details->lo_admittedby; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>   
             </div>
              </div> 


           </div>          
            <div class="col-sm-4">
             

            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Ward</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_wardname): ?>
              <?php echo $get_log_details->lo_wardname; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>
               </div>
              </div> 


            </div>
           <div class="col-sm-4">
             

            <div type="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Discharge Date</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_dischargedate): ?>
              <?php echo $get_log_details->lo_dischargedate; ?>
              <?php else: ?>
               <p>N/A</p>
              <?php endif; ?> 
               </div>
              </div> 

           </div>

          </div><!-- End Row -->

          <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complete Diagnosis</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_completediagnosis): ?>
              <?php echo $get_log_details->lo_completediagnosis; ?>
              <?php else: ?>
                <p>N/A</p>
             <?php endif; ?>                
               </div>
              </div> 


           </div>          
            <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication / Treatment</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_medication): ?>
              <?php echo $get_log_details->lo_medication; ?>
              <?php else: ?>
               <p>N/A</p>
              <?php endif; ?> 
               </div>
              </div> 

            </div>
           <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Condition to Discharge</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
            <?php if($get_log_details->lo_conditiontodischarge): ?>
              <?php echo $get_log_details->lo_conditiontodischarge; ?>
            <?php else: ?>
             <p>N/A</p>
             <?php endif; ?> 
               </div>
              </div> 

           </div>

           <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Remarks</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
            <?php if($get_log_details->lo_remarks): ?>
              <?php echo $get_log_details->lo_remarks; ?>
            <?php else: ?>
             <p>N/A</p>
             <?php endif; ?> 
               </div>
              </div> 

           </div>

          </div><!-- End Row -->
 
             <hr>
            <h5 class="text-secondary">Complaint</h5>
           
            <?php if($get_log_details->lo_complaint): ?>
              <?php echo $get_log_details->lo_complaint; ?>
            <?php else: ?>
             <h5 style="color: black;">N/A</h5>
             <?php endif; ?> 

        </div> 
      </div>
                
 </div>


       

  

</div><!-- End of Row -->
 
