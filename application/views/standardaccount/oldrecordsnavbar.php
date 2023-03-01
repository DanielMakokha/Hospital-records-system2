
    <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 
  
         <!-- Nav Item - Tables -->
        <a  class="nav-link collapsed text-secondary" href="<?php echo base_url(); ?>standardusercontrol/oldrecords">
          <i class="fas fa-fw fa-folder-open "></i>
          <span>Old Findings</span></a>


 <div class="topbar-divider d-none d-sm-block"></div>

         <!-- Nav Item - Tables -->
        <a  class="nav-link collapsed text-secondary" href="<?php echo base_url(); ?>standardusercontrol/oldadmissionview">
          <i class="fas fa-fw fa-folder-open"></i>
          <span>Old Admission Records</span></a>


    
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

   
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
    <?php if($this->session->userdata('su_user')): ?> <!-- u_user coming from database -->

       <?php echo  '<b>Dr. '.$this->session->userdata('su_user').'</b>' ?>

           <?php endif; ?>
                </span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">   
            


                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
 



