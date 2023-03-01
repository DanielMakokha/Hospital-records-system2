

  

  <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Patient Records</h1>
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
                     
                        <?php echo $get_findings_view->pr_lname; ?>&nbsp&nbsp
                        <?php echo $get_findings_view->pr_fname; ?>&nbsp&nbsp
                        <?php echo $get_findings_view->pr_mname; ?>
                  
                          
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
                        <?php echo "P-0".$get_findings_view->pr_id; ?>
                          
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
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Details <?php echo "<a data-toggle='tooltip' title='Edit' style='margin-left: 225px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patient_edit_option/". $get_findings_view->pr_id ."'>" ?> 
                    <i class="fa fa-edit"></i></a> </h6>        
                </div>
               <div class="card-body"> <!--Card Body begin tag  -->

           <?php if($this->session->flashdata('patientrecordoption_updated')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('patientrecordoption_updated') ."</div>" ?>
           <?php endif; ?>
               
               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_addrs; ?></div>
               </div>

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_age; ?></div>
         </div>
    
              <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthday</div> 
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_bdate; ?></div>
        </div>
               
               <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">BirthPlace</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_bplace; ?></div>
         </div>

         <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Civil Status</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_civilstat; ?></div>
         </div>

         <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_gen; ?></div>
         </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Tel/Mobile No.</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_number; ?></div>
         </div>

          <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Religion</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_religion; ?></div>
         </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Occupation</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_occup; ?></div>
         </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date Consulted</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_findings_view->pr_date; ?></div>
         </div>

          
                </div><!--Card body end tag -->
              </div>
      
       </div>


              <!-- Findings Box -->
            <div  id="findings" class="col-xl-8 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success">OPD Findings <?php echo "<a style='margin-left: 350px; 
data-toggle='tooltip' title='Back To Patient Record' text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patientdataview/". $get_findings_view->pr_id ."#findings'>" ?> <i class="fa 
                   fa-arrow-left"></i></a> <?php echo "<a 
data-toggle='tooltip' title='Edit' style='margin-left: 30px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/edit_findings/". $get_findings_view->findings_id ."#findings'>" ?> <i class="fa 
                   fa-edit"></i></a>
                   <?php echo "<a data-toggle='tooltip' title='Add Record to Doctor Account' style='margin-left: 30px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/addfindingsdataview/". $get_findings_view->findings_id ."#findings'>" ?> <i class="fa 
                   fa-user-md"></i></a>   
                  <a data-toggle='tooltip' title='Print' style='margin-left: 20px; margin-right: 21px;' class="btn_print text-secondary"><i class="fa 
                   fa-print"></i></a>
                </div>
                <!-- Card Body -->
                <div class="card-body">

              <div id="printablearea"><!-- Printable Area -->
                
              
                      <?php if($this->session->flashdata('edit_finding_success')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('edit_finding_success') ."</div>" ?>
           <?php endif; ?>

                    <?php if($this->session->flashdata('add_to_doctor_success')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('add_to_doctor_success') ."</div>" ?>
           <?php endif; ?>
          


                  <div class="row "><!-- ROW 1 -->
                   <div class="col-sm-2"></div>
                   <div class="col-sm-8">
                     <h5 class="text-center"><b>OUT PATIENT FINDINGS</b></h5>
                     <hr>
                   </div>
                   <div class="col-sm-2"></div>
                 </div>
           
                <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Case No.</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_findings_view->pr_id): ?>
                <?php echo "P-0".$get_findings_view->pr_id; ?>
                <?php else: ?>
                  <p>N/A</p> ?>
              <?php endif; ?>            
             </div>
            </div>
            
               <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Patient Name</div>
                </div>
             <div class="h3 mb-1 font-weight-bold text-gray-800">
              <?php if($get_findings_view->pr_fname): ?>
                <?php echo $get_findings_view->pr_fname; ?>
                <?php else: ?>
                  <p>N/A</p> ?>
              <?php endif; ?>
               <?php if($get_findings_view->pr_mname): ?>
                <?php echo $get_findings_view->pr_mname;  ?>
                <?php else: ?>
                  <p>N/A</p> ?>
              <?php endif; ?>
              <?php if($get_findings_view->pr_lname): ?>
                <?php echo $get_findings_view->pr_lname; ?>
                <?php else: ?>
                  <p>N/A</p> ?>
              <?php endif; ?>
             
             </div>
            </div>

          <div style="margin-left: 5px;" class="row">
            

                <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">History of Present Illness</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_findings_view->f_historypresentillness): ?>
                <?php echo $get_findings_view->f_historypresentillness; ?>
                <?php else: ?>
                  <p>N/A</p> ?>
              <?php endif; ?>
             </div>
              </div>

          <div class="ml-auto" style="margin-bottom:17px; margin-right: 20px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date Consulted</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
              <?php echo $get_findings_view->f_date; ?></div>
              </div>

          </div>
          
          <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Blood Pressure</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_findings_view->f_bp): ?>
              <?php echo $get_findings_view->f_bp; ?>
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
             <?php if($get_findings_view->f_rr): ?>
              <?php echo $get_findings_view->f_rr; ?>
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
             <?php if($get_findings_view->f_cr): ?>
              <?php echo $get_findings_view->f_cr; ?>
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
             <?php if($get_findings_view->f_temp): ?>
              <?php echo $get_findings_view->f_temp; ?>
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
             <?php if($get_findings_view->f_pr): ?>
              <?php echo $get_findings_view->f_pr; ?>
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
            <?php if($get_findings_view->f_wt): ?>
              <?php echo $get_findings_view->f_wt; ?>
            <?php else: ?>
             <p>N/A</p>
             <?php endif; ?> 
               </div>
              </div> 

           </div>

          </div><!-- End Row -->
          
         
            <div class="col-sm-12" style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Physican Examination</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
            <?php if($get_findings_view->f_physicalexam): ?>
              <?php echo $get_findings_view->f_physicalexam; ?>
             <?php else: ?>
             <p>N/A</p>
             <?php endif; ?>   
               </div>
              </div> 

             <div class="col-sm-12" style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Diagnosis</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_findings_view->f_diagnosis): ?>
              <?php echo $get_findings_view->f_diagnosis; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>
             </div>
              </div>     

                 <div class="col-sm-12" style="margin-bottom:17px; margin-right:70px ">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication/Treatment</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
            <?php if($get_findings_view->f_medication): ?>
             <?php echo $get_findings_view->f_medication; ?>
             <?php else: ?>
             <p>N/A</p>
           <?php endif; ?>
            </div>
              </div>         
       
           <div class="col-sm-12"  style="margin-bottom:17px; margin-right:70px">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Chief Complaint</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
               <?php if($get_findings_view->f_chiefcomplaint): ?>
              <?php echo $get_findings_view->f_chiefcomplaint; ?>
            <?php else: ?>
             <p>N/A</p>
           <?php endif; ?> 
            </div>
              </div>     

              <div class="col-sm-12"  style="margin-bottom:17px; margin-right:70px">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Attending Physician</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800 ">
            <?php if($get_findings_view->f_nameofphysician): ?>
             <?php echo "Dr. ".$get_findings_view->f_nameofphysician; ?>
             <?php else: ?>
             <p>N/A</p>
           <?php endif; ?>
            </div>
              </div>             
       
           </div>
               
              
                </div><!-- Card Body End tag -->
              </div>
            </div>


  

     


</div><!-- End of Row -->



 
<!-- Print Area -->
<script>
  $(document).ready(function() {
  $('.btn_print').on('click', function(e) {
    $('#printablearea').printThis();
  })
});
</script>


 
