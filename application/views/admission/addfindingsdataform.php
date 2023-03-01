 <?php $attributes = array('id' => 'add_to_doctor', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('standardusercontrol/add_to_doctor/'.$this->uri->segment(3).'#findings', $attributes); ?>
<div class="container-fluid">
 <div class="col-sm-12">
       
 </div>
   <div class="row">             
     <div class="col-sm-6">
          
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Firstname</div>   
                </div>

        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input id="fname" class="form-control" type="text" name="e_patientfname" value="<?php echo $get_findings_view->pr_fname; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_patientfname'); ?></div>
           
            <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Middlename</div>   
                </div>

         <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input id="mname" class="form-control" type="text" name="e_patientmname" value="<?php echo $get_findings_view->pr_mname; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_patientmname'); ?></div>
    
          <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Lastname</div>   
                </div>

         <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input id="lname" class="form-control" type="text" name="e_patientlname" value="<?php echo $get_findings_view->pr_lname; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_patientlname'); ?></div>
               </div>

     
               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complaint</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control" type="text" name="e_chief_complaint" value="<?php echo $get_findings_view->f_chiefcomplaint; ?>">   
         </div>
        <div class="text-danger text-center"><?php echo form_error('e_chief_complaint'); ?></div>
               </div>

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">History of Present Illness</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('e_historyillness') == "" ? '':'is-invalid') ?>" type="text" name="e_historyillness" value="<?php echo $get_findings_view->f_historypresentillness; ?>">
            
          </div>
        <div class="text-danger text-center"><?php echo form_error('e_historyillness'); ?></div>
         </div>

          <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Diagnosis </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('e_diagnosis') == "" ? '':'is-invalid') ?>" type="text" name="e_diagnosis" value="<?php echo $get_findings_view->f_diagnosis; ?>">
            
          </div>
        <div class="text-danger text-center"><?php echo form_error('e_diagnosis'); ?></div>
         </div>
    
          <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication / Treatment </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('e_medication') == "" ? '':'is-invalid') ?>" type="text" name="e_medication" value="<?php echo $get_findings_view->f_medication; ?>">
            
          </div>
        <div class="text-danger text-center"><?php echo form_error('e_medication'); ?></div>
         </div>
       
     </div><!-- End of Column 1 -->

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
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_gender') == "" ? '':'is-invalid') ?>" type="text" name="e_gender" value="<?php echo $get_findings_view->pr_gen; ?>">
          
      </div>
        <div class="text-danger text-center"><?php echo form_error('e_gender'); ?></div>
                </div>

                 <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_age') == "" ? '':'is-invalid') ?>" type="text" name="e_age" value="<?php echo $get_findings_view->pr_age; ?>">
          
      </div>
        <div class="text-danger text-center"><?php echo form_error('e_age'); ?></div>
                </div>
 
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Vital Signs</div>
                </div>
        <div class="row"><!--Begin First Column -->
           <div class="col-sm-4">
           <?php echo form_label('Blood Pressure'); ?>
          <input class="form-control" type="text" name="e_bp" value="<?php echo $get_findings_view->f_bp; ?>" placeholder="BP">            
           </div>
           <div class="col-sm-4">
          <?php echo form_label('Respiratory Rate'); ?>
          <input class="form-control" type="text" name="e_rr" value="<?php echo $get_findings_view->f_rr; ?>" placeholder="RR">  
           </div>
           <div class="col-sm-4">
             <?php echo form_label('Capillary Refill'); ?>
          <input class="form-control" type="text" name="e_cr" value="<?php echo $get_findings_view->f_cr;?>" placeholder=" CR">   
           </div>
          </div><!--End First Column -->
           <div class="row"><!--Begin Second Column -->
          <div class="col-sm-4">
          <?php echo form_label('Temperature'); ?>
          <input class="form-control" type="text" name="e_temp" value="<?php echo $get_findings_view->f_temp; ?>" placeholder="TEMP">
           </div>
          <div class="col-sm-4">
              <?php echo form_label('Weight'); ?>
          <input class="form-control" type="text" name="e_wt" value="<?php echo $get_findings_view->f_wt; ?>" placeholder="WT">     
           </div>
          <div class="col-sm-4">
              <?php echo form_label('Pulse Rate'); ?>
          <input class="form-control" type="text" name="e_pr" value="<?php echo $get_findings_view->f_pr; ?>" placeholder="PR">  
           </div>

          </div><!--End Second Column -->
         </div>


         </div><!-- End of Column 2 -->
         
         

    </div><!-- End of Row -->

           <?php echo "<button style='margin-left: 235px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-success btn-icon-split' name='submit' href='". base_url() ."admissioncontrol/edit_findings/". $get_findings_view->pr_id ."#findings'>" ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Add to Doctor
                  </span>
                </button> 


</div>
 
  
  <?php echo form_close(); ?>


