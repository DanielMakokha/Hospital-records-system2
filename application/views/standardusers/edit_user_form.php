 
 <?php $attributes = array('id' => 'edit_user_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('addusercontrol/edit_user/'.$this->uri->segment(3).'#addusertable', $attributes); ?>
<div class="container-fluid">
 
<div class="row">




  
<div class="col-sm-2">
     <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Username
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control <?= (form_error('e_user') == "" ? '':'is-invalid') ?>" type="text" name="e_user" placeholder="Enter Username" value="<?php echo $get_user_id->su_user; ?>" ></div>
         <div class="text-danger text-center"><?php echo form_error('e_user'); ?></div>
               </div>

</div>
<div class="col-sm-3">
                <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Password
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_pass') == "" ? '':'is-invalid') ?>" type="password" name="e_pass" placeholder="Enter Password" value="<?php echo set_value('e_pass'); ?>" ></div>
         <div class="text-danger text-center"><?php echo form_error('e_pass'); ?></div>
               </div>

</div>

<div class="col-sm-3  ">
   <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Firstname
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('e_fname') == "" ? '':'is-invalid') ?>" type="text" name="e_fname" placeholder="Enter Firstname" value="<?php echo $get_user_id->su_fname; ?>" ></div>
         <div class="text-danger text-center"><?php echo form_error('e_fname'); ?></div>
               </div>
 </div>
   <div class="col-sm-2">
                <div class="row no-gutters">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Position
                 </div>      
                </div>
           <select class="form-control" name="e_position">
                
             <option value="Standard User"<?php echo set_select('e_position','Standard User', (!empty($data) && $data == "Standard User" ? TRUE : FALSE )); ?>>Standard User</option>
                <option value="Doctor"<?php echo set_select('e_position','Doctor', (!empty($data) && $data == "Doctor" ? TRUE : FALSE )); ?>>Doctor</option>
         </select>
        <div class="text-danger text-center"><?php echo form_error('e_position'); ?></div>  
     </div>
   
      <div class="col-sm-2">
        <div class="text-gray-800">
         <?php echo "<button  style='margin-top:19px;' type='submit' class='btn btn-success btn-icon-split' name='submit' href='". base_url() ."addusercontrol/edit_user/#editusertable'>" ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Update User
                  </span>
                </button> 
          </div>
        </div>


   </div>


  </div>

          

  <?php echo form_close(); ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>