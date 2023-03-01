 
 <?php $attributes = array('id' => 'add_admission_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('multiplerecordcontrol/add_multiple_admission/#Admission', $attributes); ?>
<div class="container-fluid">

<div class="row">
 
         <div  class="col-sm-6 ">
  <div style="margin-bottom:17px; ">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Patient Case Number</div>   
                </div>
        <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">
        
   
                  <input class="form-control <?= (form_error('a_caseno') == "" ? '':'is-invalid') ?>" type="text" name="a_caseno" placeholder="Enter Case Number" value="<?php echo set_value('a_caseno') ?>">       
              
             <div class="text-danger text-center"><?php echo form_error('a_caseno'); ?> 
          </div> 
     </div>
      </div>
  </div>

 <div  class="col-sm-6 ">
       <div style="margin-bottom:17px; ">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admit Date</div>   
                </div>
        <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">
        
    
                  <input class="form-control <?= (form_error('a_date') == "" ? '':'is-invalid') ?>" type="date" name="a_date" value="<?php echo set_value('a_date') ?>">       
              
             <div class="text-danger text-center"><?php echo form_error('a_date'); ?> 
          </div> 
       
     </div>
      </div>
  </div>
</div>

<div class="row">
  
  <div  class="col-sm-6 ">
             <div style="margin-bottom:17px; ">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admitted By</div>   
                </div>
        <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">
        
                  <input class="form-control <?= (form_error('a_admitted') == "" ? '':'is-invalid') ?>" type="text" name="a_admitted" placeholder="Admitted by" value="<?php echo set_value('a_admitted') ?>">       
              
             <div class="text-danger text-center"><?php echo form_error('a_admitted'); ?> 
          </div> 

       </div>
      </div>
    </div>

    <div  class="col-sm-6 ">
             <div style="margin-bottom:17px; ">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Discharge Date</div>   
                </div>
        <div style="margin-right:20px;" class="h6 mb-1  text-gray-800">
        
                  <input class="form-control " type="date" name="a_dischargedate"  value="<?php echo set_value('a_dischargedate') ?>">       
              
             <div class="text-danger text-center"><?php echo form_error('a_dischargedate'); ?> 
          </div> 

       </div>
      </div>
    </div>

</div>
         

           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">For Minor: Name of Parents</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800">
          <div class="row no-gutters">
  
                </div>
            <div class="row">
              <div class="col-sm-6">
                  <input class="form-control " type="text" name="a_father" placeholder="Name of Father" value="<?php echo set_value('a_father') ?>">       
              </div> 
              <div class="col-sm-6">
                  <input class="form-control" type="text" name="a_mother" placeholder="Name of Mother" value="<?php echo set_value('a_mother') ?>">       
              </div>
            </div>
        
         </div>
      </div>
 

   <div class="row">            
   	 <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Ward</div>   
                </div>
        <div class="h6 mb-1  text-gray-800">
        
         <select name="a_wards" class="form-control">
              <option value="">Select Ward</option>
                <?php if(count($get_ward)): ?>
                   <?php foreach($get_ward as $ward): ?>
                   <option value=<?php echo $ward->w_name; ?><?php echo set_select('a_wards', $ward->w_name); ?>><?php echo $ward->w_name; ?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                </select> 
             <div class="text-danger text-center"><?php echo form_error('a_wards'); ?> 

        </div>
     </div>
      </div>
    </div>
    <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Attending Physician</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
        <select name="a_physician" class="form-control">
              <option value="">Select Physician</option>
                <?php if(count($get_physician)): ?>
                   <?php foreach($get_physician as $physicians): ?>
                   <option value=<?php echo $physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?><?php echo set_select('a_physician', $physicians->ph_name.' / '.$physicians->ph_fieldofphysician); ?>><?php echo "Dr. ".$physicians->ph_name.' / '.$physicians->ph_fieldofphysician; ?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                </select> 
             <div class="text-danger text-center"><?php echo form_error('a_physician'); ?> 

        </div>
     </div>
      </div>
    </div>
   

 
    </div><!-- End of Row -->  

       <div class="row">            
     <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Charge Account to</div>   
                </div>
        <div class="h6 mb-1  text-gray-800">
          <input class="form-control  <?= (form_error('a_chargeaccount') == "" ? '':'is-invalid') ?>" type="text" name="a_chargeaccount" placeholder="Charge account to" value="<?php echo set_value('a_chargeaccount') ?>">
         <div class="text-danger text-center"><?php echo form_error('a_chargeaccount'); ?> 
        </div>
     </div>
      </div>
    </div>
    <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Relation to Patient</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
       <input class="form-control <?= (form_error('a_relationtopatient') == "" ? '':'is-invalid') ?>" type="text" name="a_relationtopatient" placeholder="Relation to Patient" value="<?php echo set_value('a_relationtopatient') ?>">
             <div class="text-danger text-center"><?php echo form_error('a_relationtopatient'); ?> 

        </div>
     </div>
      </div>
    </div>
   

 
    </div><!-- End of Row -->  
    <div class="row">
       <div class="col-sm-12">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
       <input class="form-control <?= (form_error('a_address') == "" ? '':'is-invalid') ?>" type="text" name="a_address" placeholder="Enter Address" value="<?php echo set_value('a_address') ?>">
             <div class="text-danger text-center"><?php echo form_error('a_address'); ?> 

        </div>
     </div>
      </div>
    </div>
    </div>

    <div class="row">
       <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Mobile Number/Telephone No.</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
       <input class="form-control <?= (form_error('a_number') == "" ? '':'is-invalid') ?>" type="text" name="a_number" placeholder="Enter Number" value="<?php echo set_value('a_number') ?>">
             <div class="text-danger text-center"><?php echo form_error('a_number'); ?> 

        </div>
     </div>
      </div>
    </div>
       <div class="col-sm-6">
           <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total Payment Made For Admission</div>   
                </div>
        <div class="h6 mb-1 text-gray-800">
       <input class="form-control <?= (form_error('a_totalpayment') == "" ? '':'is-invalid') ?>" type="text" name="a_totalpayment" placeholder="Enter Total Payment Amount" value="<?php echo set_value('a_totalpayment') ?>">
             <div class="text-danger text-center"><?php echo form_error('a_totalpayment'); ?> 

        </div>
     </div>
      </div>
    </div>

    </div>

<!--Begin -->
 
 <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Complaint</div>
                </div>
             <div class="h6 mb-1  text-gray-800">
               <textarea class="form-control <?= (form_error('a_complain') == "" ? '':'is-invalid') ?>" type="text" name="a_complain" placeholder="Enter  Complaint"><?php echo set_value('a_complain') ?></textarea>         
               <div class="text-danger text-center"><?php echo form_error('a_complain'); ?></div>
             </div>
              </div>
            </div>


     <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Complete Diagnosis</div>
                </div>
             <div class="h6 mb-1  text-gray-800">
               <textarea class="form-control <?= (form_error('a_completediagnosis') == "" ? '':'is-invalid') ?>" type="text" name="a_completediagnosis" placeholder="Enter Diagnosis"><?php echo set_value('a_completediagnosis') ?></textarea>         
               <div class="text-danger text-center"><?php echo form_error('a_completediagnosis'); ?></div>
             </div>
              </div>
            </div>

      <div style="margin-left: 5px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Medication/Treatment</div>
                </div>
             <div class="h6 mb-1  text-gray-800">
               <textarea class="form-control <?= (form_error('a_medication') == "" ? '':'is-invalid') ?>" type="text" name="a_medication"  placeholder="Enter Medication/Treatment"><?php echo set_value('a_medication') ?></textarea>
         <div class="text-danger text-center"><?php echo form_error('a_medication'); ?></div>
             </div>
              </div>
            </div>

          
       
          <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Condition on Discharge</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
               <input class="form-control  <?= (form_error('a_conditiondischarge') == "" ? '':'is-invalid') ?>" type="text" name="a_conditiondischarge" value="<?php echo set_value('a_conditiondischarge') ?>" placeholder="Enter Condition to Discharge"></div>
              <div class="text-danger text-center"><?php echo form_error('a_conditiondischarge'); ?></div>
             </div>
              </div>
            

           <div style="margin-left: 10px;  margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Remarks</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
             <input class="form-control  <?= (form_error('a_remarks') == "" ? '':'is-invalid') ?>" type="text" name="a_remarks" value="<?php echo set_value('a_remarks') ?>" placeholder="Enter Remarks"></div>
              <div class="text-danger text-center"><?php echo form_error('a_remarks'); ?></div>
             </div>
              </div>
           
  
   <br><br>

  


           <?php echo "<button style='margin-left: 410px; margin-bottom: 20px; text-decoration:none' type='submit' class='btn btn-success btn-icon-split' name='submit' href='". base_url() ."admissioncontrol/admit_form'>" ?> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
                    Admit Patient
                  </span>
                </button>	


 
  
  <?php echo form_close(); ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>