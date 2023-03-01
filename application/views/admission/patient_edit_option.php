 



 <?php $attributes = array('id' => 'edit_option_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('admissioncontrol/edit_option_process/'.$this->uri->segment(3).'#edit_option', $attributes); ?>
              
               <div style="margin-bottom:17px;">
               	<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>   
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_address') == "" ? '':'is-invalid') ?>" type="text" name="e_address" value="<?php echo $get_data->pr_addrs; ?>"></div>
        <div class="text-danger text-center"><?php echo form_error('e_address'); ?></div>
               </div>

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>   
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_age') == "" ? '':'is-invalid') ?>" type="text" name="e_age" value="<?php echo $get_data->pr_age; ?>"></div>
        <div class="text-danger text-center"><?php echo form_error('e_age'); ?></div>
 			   </div>
    
              <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthday</div> 
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_bdate') == "" ? '':'is-invalid') ?>" type="date" name="e_bdate" value="<?php echo $get_data->pr_bdate; ?>"></div>
        <div class="text-danger text-center"><?php echo form_error('e_bdate'); ?></div>
 			  </div>
               
               <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">BirthPlace</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_bplace') == "" ? '':'is-invalid') ?>" type="text" name="e_bplace" value="<?php echo $get_data->pr_bplace; ?>"></div>
        <div class="text-danger text-center"><?php echo form_error('e_bplace'); ?></div>
 			   </div>

 			   <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Civil Status</div>
                </div>
 				 <select  class="form-control" name="e_civilstat" >
             <option value=<?php echo $get_data->pr_civilstat; ?><?php echo set_select('e_civilstat', $get_data->pr_civilstat); ?>><?php echo $get_data->pr_civilstat; ?></option>
             <?php if(count($get_civilstat)): ?>
                        <?php foreach($get_civilstat as $civilstat): ?>
                        <option value=<?php echo $civilstat->c_name; ?><?php echo set_select('e_civilstat', $civilstat->c_name); ?>><?php echo $civilstat->c_name; ?></option>
               <?php endforeach; ?>
             <?php endif; ?> 
            </select> 
         <div class="text-danger text-center"><?php echo form_error('e_civilstat'); ?></div>   
 			   </div>

 			   <div style="margin-bottom:17px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</div>
                </div>
 				<select  class="form-control" name="e_gen" >
             <option value=<?php echo $get_data->pr_gen; ?><?php echo set_select('e_gen', $get_data->pr_gen); ?>><?php echo $get_data->pr_gen; ?></option>
               <?php if(count($get_gender)): ?>
                        <?php foreach($get_gender as $gender): ?>
                        <option value=<?php echo $gender->g_name; ?><?php echo set_select('e_gen', $gender->g_name); ?>><?php echo $gender->g_name; ?></option>
                <?php endforeach; ?>
             <?php endif; ?>   
            </select> 
         <div class="text-danger text-center"><?php echo form_error('e_gen'); ?></div>  
 			   </div>

 			   <div style="margin-bottom:18px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary class="form-control" text-uppercase mb-1">Tel/Mobile No.</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_number') == "" ? '':'is-invalid') ?>" type="text" name="e_number" value="<?php echo $get_data->pr_number; ?>"></div>
        <div class="text-danger text-center"><?php echo form_error('e_number'); ?></div>
 			   </div>

 			    <div style="margin-bottom:18px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Religion</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_religion') == "" ? '':'is-invalid') ?>" type="text" name="e_religion" value="<?php echo $get_data->pr_religion; ?>"></div>
        <div class="text-danger text-center"><?php echo form_error('e_religion'); ?></div>
 			   </div>

 			   <div style="margin-bottom:18px;">
 				<div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Occupation</div>
                </div>
 				<div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_occup') == "" ? '':'is-invalid') ?>" type="text" name="e_occup" value="<?php echo $get_data->pr_occup; ?>"></div>
        <div class="text-danger text-center"><?php echo form_error('e_occup'); ?></div>
 			   </div>


              <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date Added</div> 
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control <?= (form_error('e_date') == "" ? '':'is-invalid') ?>" type="date" name="e_date" value="<?php echo $get_data->pr_date; ?>"></div>
        <div class="text-danger text-center"><?php echo form_error('e_date'); ?></div>
        </div>
               
           
           <button style="margin-left: 100px;" type="submit" class="btn btn-success btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Save
                  </span>
                </button>
  
  <?php echo form_close(); ?>