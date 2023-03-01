

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
 <script src="<?php echo base_url(); ?>assets/jquery-3.3.1.min.js"></script>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/loader.css">
 

 <style>
   .sidenav {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #111;


}


.main {
  margin-left: 225px; /* Same as the width of the sidenav */

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



</style>



</head> 


<body id="page-top">


 <?php if($this->session->userdata('logged_in')): ?>
 
 
  <?php if($this->session->flashdata('login_success')): ?>        
 <?php echo "<div class='alert-success text-center'>".$this->session->flashdata('login_success')."</div>"  ?>
   <?php endif; ?>
</div>
          
  <?php if($this->session->flashdata('sec_pass')): ?>        
 <?php echo "<div class='alert-success text-center'>".$this->session->flashdata('sec_pass')."</div>"  ?>
   <?php endif; ?>
</div>
          


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-gradient-success sidenav sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="#">
        <div class="sidebar-brand-icon rotate-n-0">
           <i class="fas fa-folder-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Patient Records</div>
      </a>
   

 <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="<?php echo base_url(); ?>standardusercontrol/outpatientview">
          <i class="fas fa-fw fa-table "></i>
          <span>Out Patient Table</span></a>
      </li>

       <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="<?php echo base_url(); ?>standardusercontrol/admissionview">
          <i class="fas fa-fw fa-table "></i>
          <span>Admission Table</span></a>
      </li>

       <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="<?php echo base_url(); ?>standardusercontrol/oldrecords">
          <i class="fas fa-folder-open "></i>
          <span>Old Records</span></a>
      </li>



    
 

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="main d-flex flex-column">

      <!-- Main Content -->
      <div id="content"> 
 
      <?php $this->load->view($topbar); ?>
      

        <!-- Begin Page Content -->
        <div class="container-fluid">
       

       <?php $this->load->view($main_view); ?>
            
        </div>
       
       </div>
      <!-- End of Main Content -->
  <br><br><br><br><br><br><br><br><br><br>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Patient Record Management System 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="<?php echo base_url(); ?>standardusercontrol/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

 <?php endif; ?>



 <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

  
<!-- jQuery library -->
<script src="<?php echo base_url(); ?>assets/printarea/jquery-print-plugin-master/lib/jquery.printThis.js"></script>
 


</body>

</html>


