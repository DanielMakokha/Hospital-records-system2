 <?php $attributes = array('id' => 'add_admission_doctor', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('standardusercontrol/add_admission_doctor/'.$this->uri->segment(3).'#admission', $attributes); ?>
<div class="container-fluid">

   <div class="row">             
     <div class="col-sm-6">
          
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Firstname</div>   
                </div>

        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input id="fname" class="form-control" type="text" name="e_patientfname" value="<?php echo $get_admission_view->pr_fname; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_patientfname'); ?></div>
           
            <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Middlename</div>   
                </div>

         <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input id="mname" class="form-control" type="text" name="e_patientmname" value="<?php echo $get_admission_view->pr_mname; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_patientmname'); ?></div>
    
          <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Lastname</div>   
                </div>

         <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input id="lname" class="form-control" type="text" name="e_patientlname" value="<?php echo $get_admission_view->pr_lname; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_patientlname'); ?></div>
               </div>

     
               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complaint</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control" type="text" name="e_chief_complaint" value="<?php echo $get_admission_view->ad_complaint; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_chief_complaint'); ?></div>
               </div>

          
          <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complete Diagnosis</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control" type="text" name="e_diagnosis" value="<?php echo $get_admission_view->ad_completediagnosis; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_diagnosis'); ?></div>
               </div>


                <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication / Treatment </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control" type="text" name="e_medication" value="<?php echo $get_admission_view->ad_medication; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_medication'); ?></div>
               </div>
         

               
         

   </div>
             
       
    

    <div class="col-sm-6">
           

                  <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Send to Physician's Account</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
         <select class="form-control" name="e_physician">
          <option value="">Select</option>
              <?php if(count($get_user)): ?>
                <?php foreach($get_user as $useraccount): ?>
                  <option value=<?php echo $useraccount->su_id; ?><?php echo set_select('e_physician', $useraccount->su_user); ?>><?php echo  "Dr. ".$useraccount->su_user; ?></option>
                        <?php endforeach; ?>
                <?php endif; ?>
         </select>
        </div>
        <div class="text-danger text-center"><?php echo form_error('e_physician'); ?></div>
                </div>

                    <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admitted by</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_admitted') == "" ? '':'is-invalid') ?>" type="text" name="e_admitted" value="<?php echo $get_admission_view->ad_admittedby; ?>">
          
      </div>
        <div class="text-danger text-center"><?php echo form_error('e_admitted'); ?></div>
                </div>


                 <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_gender') == "" ? '':'is-invalid') ?>" type="text" name="e_gender" value="<?php echo $get_admission_view->pr_gen; ?>">
          
      </div>
        <div class="text-danger text-center"><?php echo form_error('e_gender'); ?></div>
                </div>

                 <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_age') == "" ? '':'is-invalid') ?>" type="text" name="e_age" value="<?php echo $get_admission_view->pr_age; ?>">
          
      </div>
        <div class="text-danger text-center"><?php echo form_error('e_age'); ?></div>
                </div>

                <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Ward</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_ward') == "" ? '':'is-invalid') ?>" type="text" name="e_ward" value="<?php echo $get_admission_view->ad_wardname; ?>">
          
      </div>
        <div class="text-danger text-center"><?php echo form_error('e_ward'); ?></div>
                </div>
         
          <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Discharge Date</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control" type="date" name="e_discharge" value="<?php echo $get_admission_view->ad_dischargedate; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_discharge'); ?></div>
               </div>

      
       <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Condition to Discharge</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control" type="text" name="e_condition" value="<?php echo $get_admission_view->ad_conditiontodischarge; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_condition'); ?></div>
               </div>
   
      </div>

       </div><!-- End of Row-->


           <?php echo "<button style='margin-left: 235px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-success btn-icon-split' name='submit' href='". base_url() ."admissioncontrol/edit_findings/". $get_admission_view->pr_id ."#findings'>" ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Add to Doctor
                  </span>
                </button> 

    </div><!-- End of Row -->

          
         

 </div>
</div>
 
  
  <?php echo form_close(); ?>


