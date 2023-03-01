

  

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
                     
                        <?php echo $get_admission_view->pr_lname; ?>&nbsp&nbsp
                        <?php echo $get_admission_view->pr_fname; ?>&nbsp&nbsp
                        <?php echo $get_admission_view->pr_mname; ?>
                  
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
                        <?php echo "P-0".$get_admission_view->pr_id; ?>
                       
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
                  <h6 class="m-0 font-weight-bold text-success">Details <?php echo "<a style='margin-left: 225px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patient_edit_option/". $get_admission_view->pr_id ."'>" ?> 
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
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_addrs; ?></div>
               </div>

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_age; ?></div>
         </div>
    
              <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthday</div> 
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_bdate; ?></div>
        </div>
               
               <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">BirthPlace</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_bplace; ?></div>
         </div>

         <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Civil Status</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_civilstat; ?></div>
         </div>

         <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_gen; ?></div>
         </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Tel/Mobile No.</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_number; ?></div>
         </div>

          <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Religion</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_religion; ?></div>
         </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Occupation</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_occup; ?></div>
         </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date Added</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_date; ?></div>
         </div>

          
                </div><!--Card body end tag -->
              </div>
      
       </div>



              <!-- Admission Box -->
            <div  id="admission" class="col-xl-8 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success">Admission <?php echo "<a style='margin-left: 400px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patientdataview/". $get_admission_view->pr_id ."#findings'>" ?> <i class="fa 
                   fa-arrow-left"></i></a> <?php echo "<a style='margin-left: 31px; margin-right:1px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/edit_admission/". $get_admission_view->admission_id ."#admission'>" ?> <i class="fa 
                   fa-edit"></i></a>  

                    <?php echo "<a data-toggle='tooltip' title='Add Record to Doctor Account' style='margin-left: 30px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/addadmissiondataview/". $get_admission_view->admission_id ."#admission'>" ?> <i class="fa 
                   fa-user-md"></i></a>   
 <a style='margin-left: 15px; margin-right: 10px;' class="btn_print text-secondary"><i class="fa 
                   fa-print"></i></a>
                </div>
                <!-- Card Body -->
                <div class="card-body">
              
   <div id="printablearea"><!-- Printable Area -->
                

            <div class="col-sm-12">
       <?php if($this->session->flashdata('edit_admit_success')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('edit_admit_success') ."</div>" ?>
           <?php endif; ?>

           
        <?php if($this->session->flashdata('add_to_doctor_success')): ?>
          
          <?php echo "<div class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('add_to_doctor_success') ."<h6><i></i></h6></div>" ?>
          
           <?php endif; ?>
             </div>
                  <div class="row "><!-- ROW 1 -->
                   <div class="col-sm-4"></div>
                   
                     <h5 class="text-center"><b>CLINICAL CASE RECORD</b></h5>
                     
                   <div class="col-sm-4"></div>
                 </div>
          
              <div style="margin-bottom:17px; margin-left:510px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Case No.</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->pr_id): ?>
                <?php echo "P-0".$get_admission_view->pr_id; ?>
                <?php else: ?>
                  <p>N/A</p> ?>
              <?php endif; ?>            
             </div>
            </div>


          <div class="" style="margin-bottom:17px; margin-left:510px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admission Date</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
               <?php if($get_admission_view->ad_date): ?>
                <?php echo $get_admission_view->ad_date; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
              </div>

           <div class="col-sm-6">
                 <div style="margin-bottom:17px;">
        <div class=" no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Patient Name</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->pr_fname): ?>
                <?php echo $get_admission_view->pr_fname; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
              <?php if($get_admission_view->pr_mname): ?>
                <?php echo $get_admission_view->pr_mname ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
              <?php if($get_admission_view->pr_lname): ?>
                <?php echo $get_admission_view->pr_lname; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
              </div>
          </div>


    <div style="margin-left: 5px;" class="row">
          

          <div class="col-sm-6">
                 <div style="margin-bottom:17px;">
        <div class=" no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admitted by</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_admittedby): ?>
                <?php echo $get_admission_view->ad_admittedby; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
              </div>
          </div>
       
             <div class="ml-auto" style="  margin-bottom:17px; margin-right: 50px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Ward</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_wardname): ?>
                <?php echo $get_admission_view->ad_wardname; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
              </div>
         </div>        
         <div style="margin-left: 15px;" class="row">
           
             <div  style="margin-bottom:17px; margin-right: 20px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">For Minor: Name of Parents</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Father</div>
                </div>
              <?php if($get_admission_view->ad_father): ?>
                <?php echo $get_admission_view->ad_father; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Mother</div>
                </div>
              <?php if($get_admission_view->ad_mother): ?>
                <?php echo $get_admission_view->ad_mother; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
            </div> 

            <div class="ml-auto" style="margin-bottom:17px; margin-right: 50px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Discharge Date</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_dischargedate): ?>
                <?php echo $get_admission_view->ad_dischargedate; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
              </div>
                    
         </div>

         <div style="margin-left: 5px;" class="row">
            <div class="col-sm-6">
                 <div style="margin-bottom:17px;">
        <div class=" no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Charge Account to</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_chargetoaccount): ?>
                <?php echo $get_admission_view->ad_chargetoaccount; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
              </div>
          </div>


            <div class="ml-auto" style="margin-bottom:17px; margin-right: 50px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Relation to Patient</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_relationtopatient): ?>
                <?php echo $get_admission_view->ad_relationtopatient; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
              </div>
       
         </div>

            <div style="margin-left: 5px;" class="row">
               <div class="col-sm-12">
                 <div style="margin-bottom:17px;">
        <div class=" no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_address): ?>
                <?php echo $get_admission_view->ad_address; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
              </div>
          </div>  
         </div>
           <div style="margin-left: 5px;" class="row">
              <div class="col-sm-6">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Tel/Mobile Number</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_number): ?>
                <?php echo $get_admission_view->ad_number; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
              </div>

              <div class="ml-auto" style="margin-bottom:17px; margin-right: 50px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total Payment Made For Admission</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_totalpayment): ?>
                <?php echo "Php ".$get_admission_view->ad_totalpayment; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
              </div>
       

            </div>
            
            <div style="margin-left: 5px;" class="row">
               <div class="col-sm-6">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Chief Complaint</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_complaint): ?>
                <?php echo $get_admission_view->ad_complaint; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
              </div>
            </div>
            
            <div style="margin-left: 5px;" class="row">
               <div class="col-sm-6">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complete Diagnosis</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_completediagnosis): ?>
                <?php echo $get_admission_view->ad_completediagnosis; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
              </div>
            </div>

              <div style="margin-left: 5px;" class="row">
               <div class="col-sm-6">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication/Treatment</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_medication): ?>
                <?php echo $get_admission_view->ad_medication; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
              </div>
            </div>
            

            <div style="margin-left: 5px;" class="row">
               <div class="col-sm-6">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Condition on Discharge</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_conditiontodischarge): ?>
                <?php echo $get_admission_view->ad_conditiontodischarge; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
              </div>
            </div>

           

            <div style="margin-left: 5px;" class="row">
               <div class="col-sm-6">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Remarks</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_remarks): ?>
                <?php echo $get_admission_view->ad_remarks; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
              </div>
            </div>

        

            <div style="margin-left: 5px;" class="row">
               <div class="col-sm-6">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Attending Physician</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <?php if($get_admission_view->ad_physician): ?>
                <?php echo "Dr. ".$get_admission_view->ad_physician; ?>
                <?php else: ?>
                  <p>N/A</p>
              <?php endif; ?>
             </div>
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


