
<?php 



class Multiplerecordcontrol extends CI_Controller {




  public function importuser() {
   
   

    // Check form submit or not 
    if($this->input->post('upload') != NULL ){ 
        $data = array(); 
        if(!empty($_FILES['file']['name'])){ 
          // Set preference 
          $config['upload_path'] = 'assets/files/'; 
          $config['allowed_types'] = 'csv'; 
          $config['max_size'] = '1000'; // max_size in kb 
          $config['file_name'] = $_FILES['file']['name']; 

          // Load upload library 
          $this->load->library('upload',$config); 
   
          // File upload
          if($this->upload->do_upload('file')){ 
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name']; 

            // Reading file
                    $file = fopen("assets/files/".$filename,"r");
                    $i = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                        $num = count($filedata);

                        for ($c=0; $c < $num; $c++) {
                            $importData_arr[$i][] = $filedata[$c];
                        }
                        $i++;
                    }
                    fclose($file);

                    $skip = 0;

                    // insert import data
                    foreach($importData_arr as $userdata){
                        if($skip != 0){
                          
                          
                            $this->Multiplerecord_model->insertUser($userdata);
                            
                        }
                        $skip ++;
                    }

            $data['response'] = 'successfully uploaded '.$filename;
      
            redirect('usercontrol/newlogin', $data); 

          } else{ 
  
            
       
            $this->session->set_flashdata('import_record_failed', 'Patient Already Exist');
             redirect('admissioncontrol/admitdatatable', $data); 
         

          } 
        } else{ 
  
            
             $data['response'] = "failed";
             $this->session->set_flashdata('import_record_failed', 'Patient Already Exist');
            $data['topbar'] = 'navbar-default';
           $data['main_view'] = 'admission/admitdatatable';
           $this->load->view('layouts/central_template',$data); 
           
        } 
      
      } else{
       
            
             $data['response'] = "failed";
             $this->session->set_flashdata('import_record_failed', 'Patient Already Exist');
            $data['topbar'] = 'navbar-default';
           $data['main_view'] = 'admission/admitdatatable';
           $this->load->view('layouts/central_template',$data); 
           
      } 

  }





public function multiplerecordview(){
 

   $data['add_physician'] = $this->Multiplerecord_model->get_physician();
    $data['title'] = 'Out Patient Findings'; 
     $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
    $data['opd_form'] = 'multiplerecordinsert/opdfindingsforminsertion';
    $data['main_view'] = 'multiplerecordinsert/multiplerecordview';
 
    $this->load->view('layouts/central_template', $data);


}
 



public function add_multiple_findings(){


$this->form_validation->set_rules('a_casenumber', 'Patient Case Number', 'required');
$this->form_validation->set_rules('a_chief_complaint', 'Chief Complaint');
$this->form_validation->set_rules('a_historyillness', 'History of Present Illness', 'required');
$this->form_validation->set_rules('a_bp', 'Blood Pressure');
$this->form_validation->set_rules('a_rr', 'Respiratory Rate');
$this->form_validation->set_rules('a_cr', 'Capillary Refill');
$this->form_validation->set_rules('a_temp', 'Temperature');
$this->form_validation->set_rules('a_wt', 'Weight');
$this->form_validation->set_rules('a_pr', 'Pulse Rate');
$this->form_validation->set_rules('a_physicalexam', 'Physical Examination');
$this->form_validation->set_rules('a_diagnosis', 'Diagnosis', 'required');
$this->form_validation->set_rules('a_medical_treatment', 'Medication/Treatment', 'required');
$this->form_validation->set_rules('a_physician', 'Attending Physician', 'trim|required',array('required'=>'Please select physician'));
$this->form_validation->set_rules('a_date', 'Date', 'required');




if($this->form_validation->run() == FALSE){
 
 $data['add_physician'] = $this->Multiplerecord_model->get_physician();
 $data['title'] = "Out Patient Findings";
 $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
  $data['opd_form'] = 'multiplerecordinsert/opdfindingsforminsertion';
 $data['main_view'] = 'multiplerecordinsert/multiplerecordview';
  

 $this->load->view('layouts/central_template', $data);


} else {
   
   
  $date = date("Y-m-d");


   $data = array(
   'pr_findings_id' => $this->input->post('a_casenumber'),
   'f_chiefcomplaint' => $this->input->post('a_chief_complaint'),
   'f_historypresentillness' => $this->input->post('a_historyillness'),
   'f_bp' => $this->input->post('a_bp'),
   'f_rr' => $this->input->post('a_rr'),
   'f_cr' => $this->input->post('a_cr'),
   'f_temp' => $this->input->post('a_temp'),
   'f_wt' => $this->input->post('a_wt'),
   'f_pr' => $this->input->post('a_pr'),
   'f_physicalexam' => $this->input->post('a_physicalexam'),
   'f_diagnosis' => $this->input->post('a_diagnosis'),
   'f_medication' => $this->input->post('a_medical_treatment'),
   'f_nameofphysician' => $this->input->post('a_physician'),
   'f_date' => $this->input->post('a_date')
   );

   
    if($this->Multiplerecord_model->patientFinding($data)){
      
      $data['add_physician'] = $this->Multiplerecord_model->get_physician();
      $data['title'] = "Out Patient Findings";
      $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
       $data['opd_form'] = 'multiplerecordinsert/opdfindingsforminsertion';
       $data['main_view'] = 'multiplerecordinsert/multiplerecordview';
  
      $this->session->set_flashdata('add_multiple_findings', 'OPD Findings Added');
      redirect('Multiplerecordcontrol/multiplerecordview/#Findings', $data);


    }

}




}



public function admissionviewform(){



   $data['get_physician'] = $this->Multiplerecord_model->get_physician();
    $data['title'] = 'Admission Record'; 
     $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
     $data['get_ward'] = $this->Multiplerecord_model->get_ward();
   $data['admission_form'] = 'multiplerecordinsert/admissionrecordforminsertion';
    $data['main_view'] = 'multiplerecordinsert/multiplerecordadmissionview';
 
    $this->load->view('layouts/central_template', $data);





}


public function add_multiple_admission(){

$this->form_validation->set_rules('a_caseno','Patient Case Number', 'required');
$this->form_validation->set_rules('a_date','Date', 'required');
$this->form_validation->set_rules('a_wards', 'Wards', 'trim|required',array('required'=>'Please select ward'));
$this->form_validation->set_rules('a_physician', 'Attending Physician', 'trim|required',array('required'=>'Please select physician'));
$this->form_validation->set_rules('a_admitted', 'Admitted by','trim|required');
$this->form_validation->set_rules('a_dischargedate', 'Discharge Date');
$this->form_validation->set_rules('a_father', 'For Minor: Name of Parents');
$this->form_validation->set_rules('a_mother', 'For Minor: Name of Parents');
$this->form_validation->set_rules('a_chargeaccount', 'Charge Account to');
$this->form_validation->set_rules('a_relationtopatient', 'Relation to Patient');
$this->form_validation->set_rules('a_address', 'Address');
$this->form_validation->set_rules('a_number', 'Number','min_length[11]|max_length[11]');
$this->form_validation->set_rules('a_totalpayment', 'Total Payment Made');
$this->form_validation->set_rules('a_complain', 'Chief Complaint');
$this->form_validation->set_rules('a_completediagnosis', 'Complete Diagnosis');
$this->form_validation->set_rules('a_medication', 'Medication/Treatment');
$this->form_validation->set_rules('a_conditiondischarge', 'Condition on Discharge');
$this->form_validation->set_rules('a_remarks', 'Remarks');


if($this->form_validation->run() == FALSE){
 

 $data['get_physician'] = $this->Multiplerecord_model->get_physician();
 $data['get_ward'] = $this->Multiplerecord_model->get_ward();
 $data['title'] = "Admission Record";
 $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
   $data['admission_form'] = 'multiplerecordinsert/admissionrecordforminsertion';
    $data['main_view'] = 'multiplerecordinsert/multiplerecordadmissionview';

 $this->load->view('layouts/central_template', $data);


} else {
   

   $data = array(
   'pr_admission_id' => $this->input->post('a_caseno'),
   'ad_date' => $this->input->post('a_date'),
   'ad_admittedby' => $this->input->post('a_admitted'),
   'ad_wardname' => $this->input->post('a_wards'),
   'ad_dischargedate' => $this->input->post('a_dischargedate'),
   'ad_physician' => $this->input->post('a_physician'),
   'ad_father' => $this->input->post('a_father'),
   'ad_mother' => $this->input->post('a_mother'),
   'ad_chargetoaccount' => $this->input->post('a_chargeaccount'),
   'ad_relationtopatient' => $this->input->post('a_relationtopatient'),
   'ad_totalpayment' => $this->input->post('a_totalpayment'),
   'ad_address' => $this->input->post('a_address'),
   'ad_number' => $this->input->post('a_number'),
   'ad_complaint' => $this->input->post('a_complain'),
   'ad_completediagnosis' => $this->input->post('a_completediagnosis'),
   'ad_medication' => $this->input->post('a_medication'),
   'ad_conditiontodischarge' => $this->input->post('a_conditiondischarge'),
   'ad_remarks' => $this->input->post('a_remarks')
   );

   
    if($this->Multiplerecord_model->patientAdmission($data)){

  
      
       $data['get_physician'] = $this->Multiplerecord_model->get_physician();
      $data['title'] = "Admission Record";
       $data['get_ward'] = $this->Multiplerecord_model->get_ward();
 $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
   $data['admission_form'] = 'multiplerecordinsert/admissionrecordforminsertion';
    $data['main_view'] = 'multiplerecordinsert/multiplerecordadmissionview';
  
      $this->session->set_flashdata('add_multiple_admission', 'Admission Added');
      redirect('Multiplerecordcontrol/admissionviewform/#Admission', $data);


    }

}





}
















































}





 ?>