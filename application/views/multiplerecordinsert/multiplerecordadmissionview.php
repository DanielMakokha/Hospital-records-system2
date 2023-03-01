

          <!-- DataTales Example -->
          <div id="Admission" class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800"> Admission Record
                  </h5>  

            </div>
            <div class="card-body">

       <div class="container">
            
             </div>

              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
           
                 <?php if($this->session->flashdata('add_multiple_admission')): ?>
          
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('add_multiple_admission') ."</div>" ?>
          
           <?php endif; ?>

                  <tbody>
                   <?php 

                    $this->load->view($admission_form);
                
                    ?>

                  </tbody>

                </table>
              </div>
            </div>
          </div>

