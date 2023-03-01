          

           <div style="margin-left: 280px;" class="col-sm-6">
           
                         
   <?php if($this->session->flashdata('sec_password')): ?>
          
          <?php echo "<div class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('sec_password') ."</div>" ?>
          
           <?php endif; ?>

              <h2 class="h3 mb-2 text-gray-800">Account Recovery</h2>     
     
               <?php
                 
                 $attributes = array('id' => 'recovery_form', 'class' => 'form-horizontal user'); 
             
                ?>
               <?php echo form_open('indexcontrol/secretquestion', $attributes); ?>

                <div class="form-group row">
                </div>
                <div class="form-group">
                  <?php echo form_label('Current Password') ?>
                  <span style="margin-left: 2%;" id="eyeo" class="fa fa-eye"></span>
                  <input id="currpassword" type="password" class="form-control  <?= (form_error('currpassword') == "" ? '':'is-invalid') ?>"  name="currpassword" placeholder="Enter Current Password" >
                  <div class="text-danger text-center"><?php echo form_error('currpassword'); ?></div>
                </div>
                <div class="form-group">
                  <?php echo form_label('Secret Question') ?>
                  <select class="form-control  " name="secquestion">
                    <option value="">Select Question</option>
                    <option value="What was your childhood nickname?"<?php echo set_select('secquestion','What was your childhood nickname?', (!empty($data) && $data == "What was your childhood nickname?" ? TRUE : FALSE )); ?>>What was your childhood nickname?</option>
                    <option value="In what city or town was your first job?"<?php echo set_select('secquestion','In what city or town was your first job?', (!empty($data) && $data == "In what city or town was your first job?" ? TRUE : FALSE )); ?>>In what city or town was your first job? </option>
                     <option value="What was your dream job as a child? "<?php echo set_select('secquestion','What was your dream job as a child? ', (!empty($data) && $data == "What was your dream job as a child? " ? TRUE : FALSE )); ?>>What was your What was your dream job as a child?  job as a child? </option>
                  </select>
                  <div class="text-danger text-center"><?php echo form_error('secquestion'); ?></div>
                </div>
                <div class="form-group">
                  <?php echo form_label('Secret Answer') ?>
                  <span style="margin-left: 2%;" id="eyen" class="fa fa-eye"></span>
                    <input id="secanswer" type="password" class="form-control  <?= (form_error('secanswer') == "" ? '':'is-invalid') ?>"  name="secanswer" placeholder="Enter Answer" >
                  <div class="text-danger text-center"><?php echo form_error('secanswer'); ?></div>
                </div>
                <div class="form-group">
                  <?php echo form_label('Confirm Secret Answer') ?>
                    <input type="password" class="form-control <?= (form_error('csecanswer') == "" ? '':'is-invalid') ?>"  name="csecanswer" placeholder="Confirm Answer" >
                  <div class="text-danger text-center"><?php echo form_error('csecanswer'); ?></div>
                </div>
                <button style="margin-left: 189px;" type="submit" class="btn btn-success btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Submit
                  </span>
                </button>
               <?php echo form_close(); ?>
              
              </div> 
  

<!-- Vanilla JS -->
  <script>
    var currpassword = document.getElementById('currpassword');
    var eyeo = document.getElementById('eyeo');
    var secanswer = document.getElementById('secanswer');
    var eyen = document.getElementById('eyen');



    eyeo.addEventListener('click',OldPass);

    function OldPass(){

      eyeo.classList.toggle('active');

      (currpassword.type == 'password') ? currpassword.type = 'text' : currpassword.type = 'password';

    }


    eyen.addEventListener('click',NewPass);

    function NewPass(){

      eyen.classList.toggle('active');

      (secanswer.type == 'password') ? secanswer.type = 'text' : secanswer.type = 'password';

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
