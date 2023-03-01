

           <div style="margin-left: 280px;" class="col-sm-6">

        
              <h2 class="h3 mb-2 text-gray-800">Account Recovery</h2>            
              <h5>Please create your account recovery before proceeding</h5>
               <?php
                 
                 $attributes = array('id' => 'recovery_form', 'class' => 'form-horizontal user'); 
             
                ?>
               <?php echo form_open('indexcontrol/newaccountquestion', $attributes); ?>

                <div class="form-group row">
                </div>
                <div class="form-group">
                  <?php echo form_label('Current Password') ?>
                   <span style="margin-left: 3%;" id="eyeo" class="fa fa-eye"></span>
                  <input id="currentpassword" type="password" class="form-control form-control-user <?= (form_error('currentpassword') == "" ? '':'is-invalid') ?>"  name="currentpassword" placeholder="Enter Current Password" >
                  <div class="text-danger text-center"><?php echo form_error('currentpassword'); ?></div>
                </div>
                <div class="form-group">
                  <?php echo form_label('Secret Question') ?>
                  <select class="form-control  " name="secquestion">
                    <option value="">Select Question</option>
                    <option value="What was your childhood nickname?"<?php echo set_select('secquestion','What was your childhood nickname?', (!empty($data) && $data == "What was your childhood nickname?" ? TRUE : FALSE )); ?>>What was your childhood nickname?</option>
                    <option value="In what city or town was your first job?"<?php echo set_select('secquestion','In what city or town was your first job?', (!empty($data) && $data == "In what city or town was your first job?" ? TRUE : FALSE )); ?>>In what city or town was your first job? </option>
                     <option value="What was your dream job as a child? "<?php echo set_select('secquestion','What was your dream job as a child? ', (!empty($data) && $data == "What was your dream job as a child? " ? TRUE : FALSE )); ?>>What was your dream job as a child? </option>
                  </select>
                  <div class="text-danger text-center"><?php echo form_error('secquestion'); ?></div>
                </div>
                <div class="form-group">
                  <?php echo form_label('Secret Answer') ?>
                  <span style="margin-left: 3%;" id="eyen" class="fa fa-eye"></span>
                    <input id="newsecretans" type="password" class="form-control form-control-user <?= (form_error('secanswer') == "" ? '':'is-invalid') ?>"  name="secanswer" placeholder="Enter Answer" >
                  <div class="text-danger text-center"><?php echo form_error('secanswer'); ?></div>
                </div>
                <div class="form-group">
                  <?php echo form_label('Confirm Secret Answer') ?>
                    <input type="password" class="form-control form-control-user <?= (form_error('cosecanswer') == "" ? '':'is-invalid') ?>"  name="cosecanswer" placeholder="Confirm Answer" >
                  <div class="text-danger text-center"><?php echo form_error('cosecanswer'); ?></div>
                </div>
                <button style="margin-left: 180px;" type="submit" class="btn btn-success btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Proceed
                  </span>
                </button>
               <?php echo form_close(); ?>
              </div> 
  

<!-- Vanilla JS -->
  <script>
    var oldpwd = document.getElementById('currentpassword');
    var eyeo = document.getElementById('eyeo');
    var newpwd = document.getElementById('newsecretans');
    var eyen = document.getElementById('eyen');

    eyeo.addEventListener('click',OldPass);

    function OldPass(){

      eyeo.classList.toggle('active');

      (oldpwd.type == 'password') ? oldpwd.type = 'text' : oldpwd.type = 'password';

    }


    eyen.addEventListener('click',NewPass);

    function NewPass(){

      eyen.classList.toggle('active');

      (newpwd.type == 'password') ? newpwd.type = 'text' : newpwd.type = 'password';

    }

  </script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/input.css">


 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
