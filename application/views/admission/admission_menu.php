
   

    <!-- Topbar -->
        <nav class="navbar navbar-expand  navbar-light bg-white topbar mb-4 shadow">
          
    <!-- Topbar Navbar -->
          <ul class="navbar-nav ">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
      

         <div class="topbar-divider d-none d-sm-block"></div>
         <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>admissioncontrol/admitdatatable"  role="button" >
             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
             <div class="h6 mb-0  text-gray-800"><b><i class='fas fa-arrow-left'></i></b></div>
              </a>
            </li>
          </ul>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

      
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
    <?php if($this->session->userdata('u_user')): ?> <!-- u_user coming from database -->

       <?php echo  '<b>'.$this->session->userdata('u_user').'</b>' ?>

           <?php endif; ?>
                </span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">   
             <a class="dropdown-item" href="<?php echo base_url(); ?>indexcontrol/changepassupdate">
             <i class="fas fa-fw fa-key mr-2 text-gray-400"></i>
               Change Password
             </a>
             <a class="dropdown-item" href="<?php echo base_url(); ?>indexcontrol/secretquestion">
             <i class="fas fa-fw fa-user mr-2 text-gray-400"></i>
                Account Recovery
             </a>



                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
     <!-- End of Topbar -->
         <div class="loader-wrapper">
           <span class="loader"><span class="loader-inner"></span></span>
         </div>

        </nav>


 <script>
    $(window).on('load',function(){
     $(".loader-wrapper").fadeOut("slow");
    });
 </script>

