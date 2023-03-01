       <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
         <h5 class="mb-2 text-gray-800"> Add Doctor </h5>

            </div>
            <div class="card-body">
 
        <?php if($this->session->flashdata('add_doctor')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('add_doctor') ."</div>" ?>
           <?php endif; ?>
          
              <?php 
 
                $this->load->view($adddoc);

               ?>

             
            </div>
          </div>
 

          <!-- DataTales Example -->
          <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">Doctors </h5>  

            </div>
            <div class="card-body">
       <div class="container">
     
              <?php if($this->session->flashdata('edit_user')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('edit_user') ."</div>" ?>
           <?php endif; ?>


              <?php if($this->session->flashdata('delete_doctor')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('delete_doctor') ."</div>" ?>
           <?php endif; ?>

             </div>
              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                  
                      <th class="text-center">FullName</th>
                      <th class="text-center">Position</th>
                      <th class="text-center">Date Added</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                
                  <tbody>
              
                <?php foreach($get_doctor as $doctor): ?>

                 <tr>
                   
                 <?php echo "<td class='text-center'>". $doctor->ph_name ."</td>" ?>
                 <?php echo "<td class='text-center'>". $doctor->ph_fieldofphysician ."</td>" ?>
                 <?php echo "<td class='text-center'>". $doctor->date_added ."</td>" ?>
           
                 <?php echo "<td class='text-center'>
                  <a style='margin-left:5px;' class='btn btn-danger' href='". base_url() ."addusercontrol/delete_doctor/". $doctor->ph_id ."' onClick='return doconfirm() '>Delete
                  </a></td>" ?>
                   

                 </tr>
                <?php endforeach; ?>

                </tbody>

                </table>
              </div>
            </div>
          </div>


<script>
function doconfirm()
{
    job = confirm("Are you sure you want to delete the doctor?");
    if (job != true)
    {
        return false;
    }
}
</script>