
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>img/rizal.png" />

  <title><?php echo $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">
  
  <div id="standard" class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-3 d-none d-lg-block"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <img width="70" height="70" src="<?php echo base_url(); ?>img/rizal.png"><br><br>
                 <h6><b>Margarito A. Duavit Memorial Hospital</b></h6>
                 <h1 class="h4 text-gray-900 mb-4">Patient Record Management System </h1>
              </div>     
              <hr>
              <div class="text-center">
                 <h5 class="h5 text-gray-900 mb-4">Standard User </h1>
              </div> 
                
            <?php $this->load->view($form); ?>

              <hr>
           
              <div class="text-center">
                <a style="color: black; text-decoration: none" class="small" href="<?php echo base_url(); ?>usercontrol/login">Login to Administrator account</a>
              </div>
            
            </div>
          </div>
           <div class="col-lg-3 d-none d-lg-block"></div>
        </div>
      </div>
    </div>

  </div>



</body>

</html>
