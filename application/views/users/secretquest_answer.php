         
            <?php if($this->session->userdata('logged_in')): ?>

           <div class="col-sm-10">
       
    <?php if($this->session->flashdata('forgotpass_success')): ?>
          
          <?php echo "<div style='margin-left: 72px;' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('forgotpass_success') ."<h6><i class='con fa fa-check'></i></h6></div>" ?>
          
           <?php endif; ?>

      
        <?php if($this->session->flashdata('secretans_failed')): ?>
          
          <?php echo "<div style='margin-left: 72px;' class='alert alert-danger alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('secretans_failed') ."<h6><i class='con'></i></h6></div>" ?>
          
           <?php endif; ?>


        
          <h1 style="margin-left: 72px;" class="h4 text-gray-900 mb-2 text-center">Secret Answer</h1> 
       
               <?php
                 
                 $attributes = array('id' => 'forgotsec_form', 'class' => 'form-horizontal user'); 
             
                ?>
               <?php echo form_open('indexcontrol/forgot_secretquestion/'.$id->u_id.'', $attributes); ?>

                <div style="margin-left: 45px;" class="form-group row">
                <?php 

                  echo $id->u_secretquestion;    


                    ?> 
                    <input type="password" class="form-control  <?= (form_error('secans') == "" ? '':'is-invalid') ?>"  name="secans" placeholder="Enter The Answer" >
                  <div class="text-danger text-center"><?php echo form_error('secans'); ?></div>
                </div>
                <button style="margin-left: 149px;" type="submit" class="btn btn-success btn-icon-split" name="submit">
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Submit
                  </span>
                </button>
               <?php echo form_close(); ?>
            <div class="loader-wrapper">
              <span class="loader"><span class="loader-inner"></span></span>
             </div>
         
              </div> 
           <?php endif; ?>

 <script>
    $(window).on('load',function(){
     $(".loader-wrapper").fadeOut("slow");
    });
 </script>

  
 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
