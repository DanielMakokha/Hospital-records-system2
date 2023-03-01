 
 <?php $attributes = array('id' => 'add_user_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('addusercontrol/add_user/#demo', $attributes); ?>
<div class="container-fluid">
 
<div class="row">
  
<div class="col-sm-2">
     <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Username
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control <?= (form_error('a_user') == "" ? '':'is-invalid') ?>" type="text" name="a_user" placeholder="Enter Username" value="<?php echo set_value('a_user'); ?>" ></div>
         <div class="text-danger text-center"><?php echo form_error('a_user'); ?></div>
               </div>

</div>
<div class="col-sm-3">
                <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Password
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('a_pass') == "" ? '':'is-invalid') ?>" type="password" name="a_pass" placeholder="Enter Password" value="<?php echo set_value('a_pass'); ?>" ></div>
         <div class="text-danger text-center"><?php echo form_error('a_pass'); ?></div><!-- dito sya yung a_pass galing -->
               </div>

</div>

<div class="col-sm-3  ">
   <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Firstname
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('a_fname') == "" ? '':'is-invalid') ?>" type="text" name="a_fname" placeholder="Enter Firstname" value="<?php echo set_value('a_fname'); ?>" ></div>
         <div class="text-danger text-center"><?php echo form_error('a_fname'); ?></div>
               </div>
 </div>
   <div class="col-sm-2">
                <div class="row no-gutters">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Position
                 </div>      
                </div>
           <select name="a_position" class="form-control">
                <option value="Doctor"<?php echo set_select('a_position','Doctor', (!empty($data) && $data == "Doctor" ? TRUE : FALSE )); ?>>Doctor</option>
                </select> 
        <div class="text-danger text-center"><?php echo form_error('a_position'); ?></div>  
     </div>
   
      <div class="col-sm-2">
        <div class="text-gray-800">
         <?php echo "<button  style='margin-top:19px;' type='submit' class='btn btn-success btn-icon-split' name='submit' href='". base_url() ."admissioncontrol/add_user/#demo'>" ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Add User
                  </span>
                </button> 
          </div>
        </div>


   </div>


  </div>

          

  <?php echo form_close(); ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>