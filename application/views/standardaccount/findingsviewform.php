 
 <?php $attributes = array('id' => 'edit_findings_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('standardusercontrol/update_process/'.$this->uri->segment(3).'#findings', $attributes); ?>
       
 
   
       <div class="col-sm-12">
             
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Present Illness</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <input class="form-control  <?= (form_error('u_history') == "" ? '':'is-invalid') ?>" type="text" name="u_history"  placeholder="Enter Present Illness" value="<?php echo $get_patient_data->a_historypresentillness; ?>">     
       
        </div>
        <div class="text-danger text-center"><?php echo form_error('u_history'); ?></div>
               </div>
             </div>

                  <div class="col-sm-12">
             
            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Physical Examination</div>
                </div>
            <textarea class="form-control  <?= (form_error('u_physical') == "" ? '':'is-invalid') ?>" type="text" name="u_physical"  placeholder="Enter Physical Examination" ><?php echo $get_patient_data->a_physicalexam; ?></textarea> 
             <div class="text-danger text-center"><?php echo form_error('u_physical'); ?></div>   
           </div>
             </div>

            <div class="col-sm-12">
           <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complete Diagnosis </div>
                </div>
            <textarea class="form-control  <?= (form_error('u_diagnosis') == "" ? '':'is-invalid') ?>" type="text" name="u_diagnosis"  placeholder="Enter Complete Diagnosis"><?php echo $get_patient_data->a_diagnosis; ?></textarea> 
             <div class="text-danger text-center"><?php echo form_error('u_diagnosis'); ?></div>   
           </div>
             </div>

              <div class="col-sm-12">
             
            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication / Treatment</div>
                </div>
              <textarea class="form-control  <?= (form_error('u_medication') == "" ? '':'is-invalid') ?>" type="text" name="u_medication"  placeholder="Enter Medication"><?php echo $get_patient_data->a_medication; ?></textarea>
             <div class="text-danger text-center"><?php echo form_error('u_medication'); ?></div>   
              </div> 

             </div>
 
                <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
           <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Send to</div>
                </div>
             <select class="form-control" name="u_admin">
              <?php if(count($get_user)): ?>
                <?php foreach($get_user as $useraccount): ?>
                  <option value=<?php echo $useraccount->u_id; ?>><?php echo $useraccount->u_user; ?></option>
                        <?php endforeach; ?>
                <?php endif; ?>
             </select>  
           </div>


           <?php echo "<button style='margin-left: 174px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-success ' name='submit' " ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Update Findings
                  </span>
                </button>	


 
  
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