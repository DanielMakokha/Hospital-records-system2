         
            <?php if($this->session->userdata('logged_in')): ?>

           <div class="col-sm-10">
 
            <?php if($this->session->flashdata('secretans_success')): ?>
          
          <?php echo "<div style='margin-left: 72px;' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('secretans_success') ."<h6><i class='con fa fa-check'></i></h6></div>" ?>
          
           <?php endif; ?>


          <div class="alert-danger text-center">
           
           <?php if($this->session->flashdata('secretans_failed')): ?>
          
          <?php echo $this->session->flashdata('secretans_failed'); ?>
          
           <?php endif; ?>
          </div>
        
          <h1 style="margin-left: 72px;" class="h4 text-gray-900 mb-2 text-center">Secure Account</h1> 
       
               <?php
                 
                 $attributes = array('id' => 'newpass_form', 'class' => 'form-horizontal user'); 
             
                ?>
               <?php echo form_open('indexcontrol/create_newpass/'.$id->u_id.'', $attributes); ?>

                <div style="margin-left: 45px;" class="form-group row">
                  <?php echo form_label('New Password') ?>
                  <span style="margin-left: 3%;" id="eyeo" class="fa fa-eye"></span>
                   <input id="newpass" type="password" class="form-control <?= (form_error('newpass') == "" ? '':'is-invalid') ?>"  name="newpass" placeholder="Enter New Password" >
                  <div class="text-danger text-center"><?php echo form_error('newpass'); ?></div>
                  <?php echo form_label('Confirm Password') ?>
                   <input type="password" class="form-control <?= (form_error('cpass') == "" ? '':'is-invalid') ?>"  name="cpass" placeholder="Confirm Password" >
                  <div class="text-danger text-center"><?php echo form_error('cpass'); ?></div>
                </div>
                <button style="margin-left: 149px;" type="submit" class="btn btn-success btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Submit
                  </span>
                </button>
               <?php echo form_close(); ?>

              </div> 

           <?php endif; ?>
  
<!-- Vanilla JS -->
  <script>
    var newpass = document.getElementById('newpass');
    var eyeo = document.getElementById('eyeo');

    eyeo.addEventListener('click',Newpass);

    function Newpass(){

      eyeo.classList.toggle('active');

      (newpass.type == 'password') ? newpass.type = 'text' : newpass.type = 'password';

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
