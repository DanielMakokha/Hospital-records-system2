

 
  <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Log Findings</h1>
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
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Log Time/Date</div>
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
            <div  id="findings" class="col-sm-5 ">


              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success">Vital Signs </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

            
                <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Blood Pressure</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_bp): ?>
              <?php echo $get_log_details->lo_bp; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>   
             </div>
              </div> 


           </div>          
            <div class="col-sm-4">
             

            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Respiratory Rate</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_rr): ?>
              <?php echo $get_log_details->lo_rr; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>
               </div>
              </div> 


            </div>
           <div class="col-sm-4">
             

            <div type="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Capillary Refill</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_cr): ?>
              <?php echo $get_log_details->lo_cr; ?>
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
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Temperature</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_temp): ?>
              <?php echo $get_log_details->lo_temp; ?>
              <?php else: ?>
                <p>N/A</p>
             <?php endif; ?>                
               </div>
              </div> 


           </div>          
            <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Pulse Rate</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_pr): ?>
              <?php echo $get_log_details->lo_pr; ?>
              <?php else: ?>
               <p>N/A</p>
              <?php endif; ?> 
               </div>
              </div> 

            </div>
           <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Weight</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
            <?php if($get_log_details->lo_wt): ?>
              <?php echo $get_log_details->lo_wt; ?>
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


<!-- ///// -->
            <div  id="findings" class="col-sm-7 ">
              
                    <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success"> Findings </h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
    
         


                  <div class="col-sm-6">
             
            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Present Illness </div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_log_details->lo_historypresentillness): ?>
              <?php echo $get_log_details->lo_historypresentillness; ?>
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
             <?php if($get_log_details->lo_physicalexam): ?>
              <?php echo $get_log_details->lo_physicalexam; ?>
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
             <?php if($get_log_details->lo_diagnosis): ?>
              <?php echo $get_log_details->lo_diagnosis; ?>
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
             <?php if($get_log_details->lo_medication): ?>
              <?php echo $get_log_details->lo_medication; ?>
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
 
