
               <?php 
                 
                 $attributes = array('id' => 'register_form', 'class' => 'form-horizontal user'); 
             
                ?>
               <?php echo form_open('usercontrol/register', $attributes); ?>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control  <?= (form_error('fname') == "" ? '':'is-invalid') ?>" name="fname"  placeholder="First Name" value="<?php echo set_value('fname') ?>">
                    <div class="text-danger text-center"><?php echo form_error('fname'); ?></div>
                  </div>
                  <div class="col-sm-6">
                  <input type="text" class="form-control  <?= (form_error('user') == "" ? '':'is-invalid') ?>"  name="user" placeholder="Username" value="<?php echo set_value('user') ?>">
                  <div class="text-danger text-center"><?php echo form_error('user'); ?></div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control  <?= (form_error('pass') == "" ? '':'is-invalid') ?>" name="pass" placeholder="Password" value="<?php echo set_value('pass') ?>">
                    <div class="text-danger text-center"><?php echo form_error('pass'); ?></div>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control  <?= (form_error('cpass') == "" ? '':'is-invalid') ?>" name="cpass"  placeholder="Confirm Password" value="<?php echo set_value('cpass') ?>">
                    <div class="text-danger text-center"><?php echo form_error('cpass'); ?></div>
                  </div>
                </div>
                <button style="margin-left: 128px;" type="submit" class="btn btn-primary btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Create Account
                  </span>
                </button>
               <?php echo form_close(); ?>
          

 <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>
