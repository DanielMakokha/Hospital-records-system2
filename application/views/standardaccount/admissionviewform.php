       
      
 
 <?php $attributes = array('id' => 'edit_admission_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('standardusercontrol/update_admission_process/'.$this->uri->segment(3).'#admission', $attributes); ?>
       



                <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admitted by</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('u_admitted') == "" ? '':'is-invalid') ?>" type="text" name="u_admitted"  placeholder="Enter Admitted by" value="<?php echo $get_patient_data->a_admittedby; ?><?php echo set_value('u_admitted') ?>">     
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('u_admitted'); ?></div>
              </div> 



           </div>          
            <div class="col-sm-4">
             
              <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Ward</div>   
                </div>
        <div class="h6 mb-1  text-gray-800">
        
         <select name="u_wards" class="form-control">
              <option value=<?php echo $get_patient_data->a_wardname; ?><?php echo set_select('u_wards', $get_patient_data->a_wardname); ?>><?php echo $get_patient_data->a_wardname; ?></option>
                <?php if(count($get_ward)): ?>
                   <?php foreach($get_ward as $ward): ?>
                   <option value=<?php echo $ward->w_name; ?><?php echo set_select('u_wards', $ward->w_name); ?>><?php echo $ward->w_name; ?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                </select> 
             <div class="text-danger text-center"><?php echo form_error('u_wards'); ?> 

        </div>
     </div>
      </div>


            </div>
           <div class="col-sm-4">
             

            <div type="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Discharge Date</div>
                </div>
              <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('u_discharge') == "" ? '':'is-invalid') ?>" type="date" name="u_discharge"  placeholder="Enter Admitted by" value="<?php echo $get_patient_data->a_dischargedate; ?><?php echo set_value('u_discharge') ?>">     
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('u_discharge'); ?></div>
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
            <input class="form-control  <?= (form_error('u_completediagnosis') == "" ? '':'is-invalid') ?>" type="text" name="u_completediagnosis"  placeholder="Enter Complete Diagnosis" value="<?php echo $get_patient_data->a_completediagnosis; ?><?php echo set_value('u_completediagnosis') ?>">       
               </div>
        
            <div class="text-danger text-center"><?php echo form_error('u_completediagnosis'); ?></div>
              </div> 
           </div>          
            <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication / Treatment</div>
                </div>
            <div class="h5 mb-1 font-weight-bold text-gray-800">
            <input class="form-control  <?= (form_error('u_medication') == "" ? '':'is-invalid') ?>" type="text" name="u_medication"  placeholder="Enter Medication / Treatment" value="<?php echo $get_patient_data->a_medication; ?><?php echo set_value('u_medication') ?>">       
               </div>
        
            <div class="text-danger text-center"><?php echo form_error('u_medication'); ?></div>
              </div> 

            </div>
           <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Condition to Discharge</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
            <input class="form-control  <?= (form_error('u_conditiontodischarge') == "" ? '':'is-invalid') ?>" type="text" name="u_conditiontodischarge"  placeholder="Enter Condition to Discharge" value="<?php echo $get_patient_data->a_conditiontodischarge; ?><?php echo set_value('u_conditiontodischarge') ?>">       
               </div>
        
            <div class="text-danger text-center"><?php echo form_error('u_conditiontodischarge'); ?></div>
              </div> 

           </div>

           <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Remarks</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <input class="form-control  <?= (form_error('u_remarks') == "" ? '':'is-invalid') ?>" type="text" name="u_remarks"  placeholder="Enter Remarks" value="<?php echo $get_patient_data->a_remarks; ?><?php echo set_value('u_remarks') ?>">       
               </div>
        
            <div class="text-danger text-center"><?php echo form_error('u_remarks'); ?></div>
              </div> 

           </div>
 
            
            <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complaint</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <input class="form-control  <?= (form_error('u_complaint') == "" ? '':'is-invalid') ?>" type="text" name="u_complaint"  placeholder="Enter Complaint" value="<?php echo $get_patient_data->a_complaint; ?><?php echo set_value('u_complaint') ?>">       
               </div>
        
            <div class="text-danger text-center"><?php echo form_error('u_complaint'); ?></div>
              </div> 

           </div>

         <div class="col-sm-4">
               <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
           <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Send to</div>
                </div>
             <select class="form-control" name="u_admin">
              <?php if(count($get_user)): ?>
                <?php foreach($get_user as $useraccount): ?>
                  <option value=<?php echo $useraccount->u_id; ?>><?php echo $useraccount->u_user; ?></option>
                        <?php endforeach; ?>
                <?php endif; ?>
             </select>  
           </div>
         </div>
          </div><!-- End Row -->
 
         


 <?php echo "<button style='margin-left: 414px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-success ' name='submit' " ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Update Admission
                  </span>
                </button> 


        </div> 
           
          

      </div>
                
 </div>

 

       <?php echo form_close(); ?>