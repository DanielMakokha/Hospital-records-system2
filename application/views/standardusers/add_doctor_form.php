 
 <?php $attributes = array('id' => 'add_doctor_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('addusercontrol/add_doctor/#demo', $attributes); ?>
<div class="container-fluid">
 
<div class="row">
  
<div class="col-sm-3">
     <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Firstname
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control <?= (form_error('a_fname') == "" ? '':'is-invalid') ?>" type="text" name="a_fname" placeholder="Enter Firstname" value="<?php echo set_value('a_fname'); ?>" ></div>
         <div class="text-danger text-center"><?php echo form_error('a_fname'); ?></div>
               </div>

</div>
<div class="col-sm-3">
                <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Lastname
                 </div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><input class="form-control  <?= (form_error('a_lname') == "" ? '':'is-invalid') ?>" type="text" name="a_lname" placeholder="Enter Lastname" value="<?php echo set_value('a_lname'); ?>" ></div>
         <div class="text-danger text-center"><?php echo form_error('a_lname'); ?></div>
               </div>

</div>


   <div class="col-sm-3">
                <div class="row no-gutters">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                   Position
                 </div>      
                </div>
           <select name="a_position" class="form-control">
              <option value="">Select</option>
                <?php if(count($get_field)): ?>
                   <?php foreach($get_field as $field): ?>
                   <option value=<?php echo $field->fp_name; ?><?php echo set_select('a_physician', $field->fp_name); ?>><?php echo $field->fp_name; ?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                </select> 
        <div class="text-danger text-center"><?php echo form_error('a_position'); ?></div>  
     </div>
   
      <div class="col-sm-2">
        <div class="text-gray-800">
         <?php echo "<button  style='margin-top:19px;' type='submit' class='btn btn-success btn-icon-split' name='submit' href='". base_url() ."admissioncontrol/add_user/#demo'>" ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Add Doctor
                  </span>
                </button> 
          </div>
        </div>


   </div>


  </div>

          

  <?php echo form_close(); ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>