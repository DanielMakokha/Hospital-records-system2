 
 <?php $attributes = array('id' => 'edit_vitalsigns_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('standardusercontrol/update_vital_process/'.$this->uri->segment(3).'#findings', $attributes); ?>
       
 


     <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Blood Pressure</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('u_bp') == "" ? '':'is-invalid') ?>" type="text" name="u_bp"  placeholder="Blood Pressure" value="<?php echo $get_patient_data->a_bp; ?>">     
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('u_bp'); ?></div>
               </div>


           </div>          
            <div class="col-sm-4">
             

           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Respiratory Rate</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('u_rr') == "" ? '':'is-invalid') ?>" type="text" name="u_rr"  placeholder="Respiratory Rate" value="<?php echo $get_patient_data->a_rr; ?>">     
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('u_rr'); ?></div>
               </div>

            </div>
           <div class="col-sm-4">
             
<div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Capillary Refill</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('u_cr') == "" ? '':'is-invalid') ?>" type="text" name="u_cr"  placeholder="Capillary Refill" value="<?php echo $get_patient_data->a_cr; ?>">     
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('u_cr'); ?></div>
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
          <input class="form-control  <?= (form_error('u_temp') == "" ? '':'is-invalid') ?>" type="text" name="u_temp"  placeholder="Temperature " value="<?php echo $get_patient_data->a_temp; ?>">     
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('u_temp'); ?></div>
              </div> 


           </div>          
            <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Pulse Rate</div>
                </div>
              <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('u_pr') == "" ? '':'is-invalid') ?>" type="text" name="u_pr"  placeholder="Pulse Rate " value="<?php echo $get_patient_data->a_pr; ?>">     
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('u_pr'); ?></div>
              </div> 

            </div>
           <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Weight</div>
                </div>
            <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('u_wt') == "" ? '':'is-invalid') ?>" type="text" name="u_wt"  placeholder="Weight " value="<?php echo $get_patient_data->a_wt; ?>">     
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('u_wt'); ?></div>
              </div> 

           </div>

          </div><!-- End Row -->
 
             <hr>
            <h5 class="text-secondary">Complaint</h5>
           
               
            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
                </div>

            <textarea class="form-control  <?= (form_error('u_complaint') == "" ? '':'is-invalid') ?>" type="text" name="u_complaint"  placeholder="Enter Complaint" ><?php echo $get_patient_data->a_complaint; ?></textarea> 
             <div class="text-danger text-center"><?php echo form_error('u_complaint'); ?></div>   
           </div>

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

      

              <?php echo "<button style='margin-left: 100px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-success ' name='submit' " ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Update Vital Signs
                  </span>
                </button> 

  
  <?php echo form_close(); ?>
