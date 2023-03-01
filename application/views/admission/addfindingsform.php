 
 <?php $attributes = array('id' => 'add_findings_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('admissioncontrol/add_findings/'.$this->uri->segment(3).'#findings', $attributes); ?>
<div class="container-fluid">

   <div class="row">             
   	 <div class="col-sm-6">
     
       <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">History of Present Illness</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('a_history') == "" ? '':'is-invalid') ?>" type="text" name="a_history"  value="*Under Observation">           
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('a_history'); ?></div>
               </div><br>
    
      <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Attending Physician</div>   
                </div>
           <select name="a_physician" class="form-control">
              <option value="">Select Physician</option>
                <?php if(count($add_physician)): ?>
                   <?php foreach($add_physician as $physicians): ?>
                   <option value=<?php echo $physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?><?php echo set_select('a_physician', $physicians->ph_name.' / '.$physicians->ph_fieldofphysician); ?>><?php echo "Dr.".$physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                </select> 
                <div class="text-danger text-center"><?php echo form_error('a_physician'); ?></div>  
              </div><br>

   	 </div><!-- End of Column 1 -->

    <div class="col-sm-6">
    	      
         <div style="margin-bottom:17px;">
        <div class="row no-gutters">
       <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Vital Signs</div>
        </div>
          <div class="row"><!--Begin First Column -->
           <div class="col-sm-4">
           <?php echo form_label('Blood Pressure'); ?>
          <input class="form-control" type="text" name="a_bp" value="<?php echo set_value('a_bp'); ?>" placeholder="BP">            
           </div>
           <div class="col-sm-4">
          <?php echo form_label('Respiratory Rate'); ?>
          <input class="form-control" type="text" name="a_rr" value="<?php echo set_value('a_rr'); ?>"  placeholder="RR">  
           </div>
           <div class="col-sm-4">
             <?php echo form_label('Capillary Refill'); ?>
          <input class="form-control" type="text" name="a_cr" value="<?php echo set_value('a_cr'); ?>"  placeholder="CR">   
           </div>
          </div><!--End First Column --><br>
           <div class="row"><!--Begin Second Column -->
          <div class="col-sm-4">
          <?php echo form_label('Temperature'); ?>
          <input class="form-control" type="text" name="a_temp" value="<?php echo set_value('a_temp'); ?>" placeholder="TEMP">
           </div>
          <div class="col-sm-4">
              <?php echo form_label('Weight'); ?>
          <input class="form-control" type="text" name="a_wt" value="<?php echo set_value('a_wt'); ?>" placeholder="WT">     
           </div>
          <div class="col-sm-4">
              <?php echo form_label('Pulse Rate'); ?>
          <input class="form-control" type="text" name="a_pr" value="<?php echo set_value('a_pr'); ?>" placeholder="PR">  
           </div>

          </div><!--End Second Column -->
         </div>

             

 			   </div><!-- End of Column 2 -->

    </div><!-- End of Row -->
    <div class="row">
      <div class="col-sm-6">
         
         </div>
      <div class="col-sm-6">
        
           </div>
            </div>

           <?php echo "<button style='margin-left: 234px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-success btn-icon-split' name='submit' href='". base_url() ."admissioncontrol/add_findings/". $get_data->pr_id ."#findings'>" ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Add Findings
                  </span>
                </button>	

</div>
 
  
  <?php echo form_close(); ?>


<script>
  $(document).ready(function(){

   $('#medicalfield').change(function(){
  var fp_id = $('#medicalfield').val();
  if (fp_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admissioncontrol/get_physician",
    method:"POST",
    data:{fp_id:fp_id},
    success:function(data)
    {
     $('#physician').html(data);
    }
   });
  }
  else
  {
   $('#physician').html('<option value="">Select Physician</option>');
  }
 });

});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>