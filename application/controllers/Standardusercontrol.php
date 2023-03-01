<?php 

class Standardusercontrol extends CI_Controller {
 

 public function standarduserview(){

 $data['form'] = 'standardaccount/standardaccount_form';
 $data['title'] = "Login Account";

$this->load->view('standardaccount/standarduser_view', $data);

}


 
   public function login() {
    

    $this->form_validation->set_rules('user1', 'Username', 'trim|required');
    $this->form_validation->set_rules('pass1', 'Password', 'trim|required');

   if($this->form_validation->run() == FALSE){
  
   $data['form'] = 'standardaccount/standardaccount_form';
    $data['title'] = "Login Account";
    
    $this->load->view('standardaccount/standarduser_view', $data);


   } else {
   	   $user = $this->input->post('user1');
   	   $pass = $this->input->post('pass1');
      
        $login_id = $this->Standarduser_model->login_user($user, $pass);

       if($login_id){

       	  $data = array(
            'su_id' => $login_id,
            'su_user' => $user,
            'logged_in' => TRUE
       	  );

         $data['title'] = "Patient Record Management";
         $this->session->set_userdata($data);
         $this->session->set_flashdata('login_success', '<div class="text-center">Your are now logged in as Dr. <b>'.$this->session->userdata('su_user'). '</b></div>');
          redirect('standardusercontrol/outpatientview', $data);  


       } else {

          $data['title'] = "Login Account";
         $this->session->set_flashdata('login_failed', 'Username or Password is incorrect!');
         redirect('standardusercontrol/login/#standard', $data);


       }
       
      
     }


   }



public function logout(){
 
 $this->session->sess_destroy();

redirect('standardusercontrol/standarduserview');

}





public function outpatientview(){

$user_id = $this->session->userdata('su_id');

$data['get_doctor_patient'] = $this->Standarduser_model->get_patient($user_id);
$data['title'] = 'Outpatient Datatable';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['main_view'] = "standardaccount/datatable";

$this->load->view('standardaccount/doctorpage', $data);
}



public function admissionview(){

$user_id = $this->session->userdata('su_id');

$data['get_doctor_patient'] = $this->Standarduser_model->get_patient_admitted($user_id);
$data['title'] = 'Admission Datatable';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['main_view'] = "standardaccount/admissiontable";

$this->load->view('standardaccount/doctorpage', $data);

}





public function findings_view($finding_id){
 
$data['get_patient_data'] = $this->Standarduser_model->get_patient_data($finding_id);
$data['title'] = 'Findings Overview';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['main_view'] = "standardaccount/findingsview";

$this->load->view('standardaccount/doctorpage', $data);



}


public function update_findings($finding_id){

$data['get_user'] = $this->Standarduser_model->get_users();
$data['get_patient_data'] = $this->Standarduser_model->get_patient_data($finding_id);
$data['title'] = 'Edit Findings';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['form'] = 'standardaccount/findingsviewform';
$data['main_view'] = "standardaccount/editfindingsview";

$this->load->view('standardaccount/doctorpage', $data);

}



public function update_admission($admission_id){

$data['get_user'] = $this->Standarduser_model->get_users();
$data['get_ward'] = $this->Standarduser_model->get_ward();
$data['get_patient_data'] = $this->Standarduser_model->get_patient_admission($admission_id);
$data['title'] = 'Edit Admission';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['form'] = 'standardaccount/admissionviewform';
$data['main_view'] = "standardaccount/editadmissionview";

$this->load->view('standardaccount/doctorpage', $data);

}


public function update_admission_process($admission_id){

$this->form_validation->set_rules('u_completediagnosis', 'Diagnosis', 'trim|required');
$this->form_validation->set_rules('u_medication', 'Medication', 'trim|required');

if($this->form_validation->run() == FALSE){

$data['get_user'] = $this->Standarduser_model->get_users();
$data['get_patient_data'] = $this->Standarduser_model->get_patient_admission($admission_id);
$data['title'] = 'Edit Admission';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['form'] = 'standardaccount/admissionviewform';
$data['main_view'] = "standardaccount/editadmissionview";

$this->load->view('standardaccount/doctorpage', $data);

} else {
   
     $userid = $this->session->userdata('su_id');

     $fname = $this->Standarduser_model->get_fname($admission_id);
      $mname = $this->Standarduser_model->get_mname($admission_id);
       $lname = $this->Standarduser_model->get_lname($admission_id);

  $data = array(

    'a_wardname' => $this->input->post('u_wards'),
  'a_physician_id' =>  $userid,
  'a_admittedby' => $this->input->post('u_admitted'),
  'a_dischargedate' =>  $this->input->post('u_discharge'),
  'a_completediagnosis' =>  $this->input->post('u_completediagnosis'),
  'a_medication' =>  $this->input->post('u_medication'),
  'a_conditiontodischarge' =>  $this->input->post('u_conditiontodischarge'),
  'a_remarks' =>  $this->input->post('u_remarks'),
  'a_complaint' => $this->input->post('u_complaint')

  );
  

  if($this->Standarduser_model->update_admission($data, $admission_id, $userid, $fname, $mname, $lname)){
  
  $id = $this->Standarduser_model->get_id_admission($admission_id);
 $data['get_patient_data'] = $this->Standarduser_model->get_patient_admission($admission_id);
$data['title'] = 'Edit Admission';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['form'] = 'standardaccount/admissionviewform';
$data['main_view'] = "standardaccount/editadmissionview";

 
  $this->session->set_flashdata('admission_success', 'Admission Updated Successfully');
 redirect('standardusercontrol/admission_view/'.$id->a_id.'/#admission', $data);

 

 }


  }

}




public function update_vital($finding_id){


$data['get_user'] = $this->Standarduser_model->get_users();
$data['get_patient_data'] = $this->Standarduser_model->get_patient_data($finding_id);
$data['title'] = 'Edit Vital Signs';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['form'] = 'standardaccount/editfindingsvitalsignform';
$data['main_view'] = "standardaccount/editfindingsvitalsign_view";

$this->load->view('standardaccount/doctorpage', $data);

}




public function update_vital_process($finding_id){

$this->form_validation->set_rules('u_bp', 'Blood Pressure', 'trim');
$this->form_validation->set_rules('u_rr', 'Respiratory Rate', 'trim');
$this->form_validation->set_rules('u_cr', 'Capillary Refill', 'trim');
$this->form_validation->set_rules('u_temp', 'Temperature', 'trim');
$this->form_validation->set_rules('u_pr', 'Diagnosis', 'trim');
$this->form_validation->set_rules('u_wt', 'Weight', 'trim');

if($this->form_validation->run() == FALSE){

 $data['get_patient_data'] = $this->Standarduser_model->get_patient_data($finding_id);
$data['title'] = 'Edit Vital Signs';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['form'] = 'standardaccount/editfindingsvitalsignform';
$data['main_view'] = "standardaccount/editfindingsvitalsign_view";
  
  $this->load->view('standardaccount/doctorpage', $data);


} else {
   

   $userid = $this->session->userdata('su_id');


     $fname = $this->Standarduser_model->get_fname_findings($finding_id);
      $mname = $this->Standarduser_model->get_mname_findings($finding_id);
       $lname = $this->Standarduser_model->get_lname_findings($finding_id);


  $data = array(

  'a_physician_id' =>  $userid,
  'a_bp' => $this->input->post('u_bp'),
  'a_rr' =>  $this->input->post('u_rr'),
  'a_cr' =>  $this->input->post('u_cr'),
  'a_temp' =>  $this->input->post('u_temp'),
  'a_pr' =>  $this->input->post('u_pr'),
  'a_wt' =>  $this->input->post('u_wt'),
  'a_complaint' => $this->input->post('u_complaint')

  );
  
   if($this->Standarduser_model->update_vital_sign($data, $finding_id, $userid, $fname,  $mname, $lname)){
   
$id = $this->Standarduser_model->get_id($finding_id);

$data['get_patient_data'] = $this->Standarduser_model->get_patient_data($finding_id);
$data['title'] = 'Edit Vital Signs';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['form'] = 'standardaccount/editfindingsvitalsignform';
$data['main_view'] = "standardaccount/editfindingsvitalsign_view";

$this->session->set_flashdata('vitalsign_success', 'Vital Signs Updated');
redirect('standardusercontrol/findings_view/'.$id->a_id.'/#findings', $data);


   }

}



}






public function update_process($finding_id){


$this->form_validation->set_rules('u_history', 'Present illness', 'required|trim');
$this->form_validation->set_rules('u_physical', 'Physical Exam');
$this->form_validation->set_rules('u_diagnosis', 'Diagnosis', 'required');
$this->form_validation->set_rules('u_medication', 'Medication', 'required');

if($this->form_validation->run() == FALSE){

$data['get_user'] = $this->Standarduser_model->get_users();
$data['get_patient_data'] = $this->Standarduser_model->get_patient_data($finding_id);
$data['title'] = 'Edit Findings';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['form'] = 'standardaccount/findingsviewform';
$data['main_view'] = "standardaccount/editfindingsview";

$this->load->view('standardaccount/doctorpage', $data);


} else {
  
  $userid = $this->session->userdata('su_id');


     $fname = $this->Standarduser_model->get_fname_f($finding_id);
      $mname = $this->Standarduser_model->get_mname_f($finding_id);
       $lname = $this->Standarduser_model->get_lname_f($finding_id);


  $data = array(
    'a_physician_id' => $userid,
   'a_historypresentillness' => $this->input->post('u_history'),
   'a_physicalexam' => $this->input->post('u_physical'),
   'a_diagnosis' => $this->input->post('u_diagnosis'),
   'a_medication' => $this->input->post('u_medication')
  );
 
  if($this->Standarduser_model->updatefindings($data, $finding_id,  $userid, $fname, $mname, $lname)){

$id = $this->Standarduser_model->get_id($finding_id);
$data['get_patient_data'] = $this->Standarduser_model->get_patient_data($finding_id);
$data['title'] = 'Edit Findings';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['main_view'] = "standardaccount/findingsview";
 
 $this->session->set_flashdata('findings_success', 'Findings Updated Successfully');
 redirect('standardusercontrol/findings_view/'.$id->a_id.'/#findings', $data);
 
  }

}


}



public function admission_view($admission_id){


$data['get_patient_data'] = $this->Standarduser_model->get_patient_admission($admission_id);
$data['title'] = 'Admission Overview';
$data['topbar'] = 'standardaccount/doctorpagenavbar';
$data['main_view'] = "standardaccount/admissionview";

$this->load->view('standardaccount/doctorpage', $data);




}









//==================================================================================

public function add_to_doctor($findings_id) { 


$this->form_validation->set_rules('e_patientfname','Firstname','required|trim|alpha');
$this->form_validation->set_rules('e_patientmname','Middlename', 'required|trim');
$this->form_validation->set_rules('e_patientlname','Lastname', 'required|trim|alpha');
$this->form_validation->set_rules('e_gender','Gender', 'required|trim');
$this->form_validation->set_rules('e_age','Age', 'required|trim');
$this->form_validation->set_rules('e_chief_complaint','Chief Complaint','alpha');
$this->form_validation->set_rules('e_historyillness','History of Illness', 'required|trim');
$this->form_validation->set_rules('e_bp','Blood Pressure');
$this->form_validation->set_rules('e_rr','Respiratory Rate');
$this->form_validation->set_rules('e_cr','Capillary Refill');
$this->form_validation->set_rules('e_temp','Temperature');
$this->form_validation->set_rules('e_wt','Weight');
$this->form_validation->set_rules('e_pr','Pulse Rate');
$this->form_validation->set_rules('e_diagnosis','Diagnosis');
$this->form_validation->set_rules('e_medication','Medication / Treatment');
$this->form_validation->set_rules('e_physician','Username','required', array('required' => 'Please select the username of the doctor!'));

if($this->form_validation->run() == FALSE){

$doctor = 'Doctor';

$data['get_user'] = $this->Record_model->get_users_account($doctor);
$data['get_findings_view'] = $this->Record_model->get_data_findings($findings_id);
$data['title'] = 'Add to Doctor';
$data['topbar'] = 'navbar-default';
$data['form'] = 'admission/addfindingsdataform';
$data['main_view'] = "admission/addfindingsdata";

$this->load->view('layouts/central_template', $data);


 } else {
 
  
   if($this->input->post('e_historyillness') == "*Under Observation"){


  $date = date("Y-m-d");

     $user_id = $this->session->userdata('u_id');
     
      $data = array(
   'a_user_id' => $user_id,
   'a_fname' => $this->input->post('e_patientfname'),
   'a_mname' => $this->input->post('e_patientmname'),
   'a_lname' => $this->input->post('e_patientlname'),
   'a_gender' => $this->input->post('e_gender'),
   'a_age' => $this->input->post('e_age'),
   'a_complaint' => $this->input->post('e_chief_complaint'),
   'a_historypresentillness' => $this->input->post('e_historyillness'),
   'a_bp' => $this->input->post('e_bp'),
   'a_rr' => $this->input->post('e_rr'),
   'a_cr' => $this->input->post('e_cr'),
   'a_temp' => $this->input->post('e_temp'),
   'a_wt' => $this->input->post('e_wt'),
   'a_diagnosis' => $this->input->post('e_diagnosis'),
   'a_medication' => $this->input->post('e_medication'),
   'a_pr' => $this->input->post('e_pr'),
   'a_physician_id' => $this->input->post('e_physician'),
   'a_date' => $date 
 
   );

   if($this->Standarduser_model->add_findings_to_doctor($data)){

$doctor = 'Doctor';

$data['get_user'] = $this->Record_model->get_users_account($doctor);
     $data['get_findings_view'] = $this->Record_model->get_data_findings($findings_id);
      $data['title'] = "Add to Doctor";
      $data['topbar'] = 'navbar-default';
      $data['form'] = 'admission/addfindingsdataform';
      $data['main_view'] = 'admission/addfindingsdata';
  
      $this->session->set_flashdata('add_to_doctor_success', "Patient Findings is Added to Doctor's Account");
      redirect('admissioncontrol/findingsview/'.$findings_id.'#findings', $data);



    } 
 





   } else {
     


  $date = date("Y-m-d");

     $user_id = $this->session->userdata('u_id');
     
      $data = array(
   'of_user_id' => $user_id,
   'of_fname' => $this->input->post('e_patientfname'),
   'of_mname' => $this->input->post('e_patientmname'),
   'of_lname' => $this->input->post('e_patientlname'),
   'of_gender' => $this->input->post('e_gender'),
   'of_age' => $this->input->post('e_age'),
   'of_complaint' => $this->input->post('e_chief_complaint'),
   'of_historypresentillness' => $this->input->post('e_historyillness'),
   'of_bp' => $this->input->post('e_bp'),
   'of_rr' => $this->input->post('e_rr'),
   'of_cr' => $this->input->post('e_cr'),
   'of_temp' => $this->input->post('e_temp'),
   'of_wt' => $this->input->post('e_wt'),
   'of_diagnosis' => $this->input->post('e_diagnosis'),
   'of_medication' => $this->input->post('e_medication'),
   'of_pr' => $this->input->post('e_pr'),
   'of_physician_id' => $this->input->post('e_physician'),
   'of_date' => $date 
 
   );
 
      if($this->Standarduser_model->add_oldfindings($data)){
 
          
$doctor = 'Doctor';

$data['get_user'] = $this->Record_model->get_users_account($doctor);
     $data['get_findings_view'] = $this->Record_model->get_data_findings($findings_id);
      $data['title'] = "Add to Doctor";
      $data['topbar'] = 'navbar-default';
      $data['form'] = 'admission/addfindingsdataform';
      $data['main_view'] = 'admission/addfindingsdata';
  
      $this->session->set_flashdata('add_to_doctor_success', "Patient Findings is Added to Doctor's Account");
      redirect('admissioncontrol/findingsview/'.$findings_id.'#findings', $data);


      }

      



   }


 }


} 




public function add_admission_doctor($admission_id) {


$this->form_validation->set_rules('e_patientfname','Firstname','required|trim|alpha');
$this->form_validation->set_rules('e_patientmname','Middlename', 'required|trim');
$this->form_validation->set_rules('e_patientlname','Lastname', 'required|trim|alpha');
$this->form_validation->set_rules('e_gender','Gender', 'required|trim');
$this->form_validation->set_rules('e_age','Age', 'required|trim');
$this->form_validation->set_rules('e_chief_complaint','Chief Complaint','alpha');
$this->form_validation->set_rules('e_ward','Ward', 'required|trim');
$this->form_validation->set_rules('e_physician','Username','required', array('required' => 'Please select the username of the doctor!'));

if($this->form_validation->run() == FALSE){

$doctor = 'Doctor';

$data['get_user'] = $this->Record_model->get_users_account($doctor);
$data['get_admission_view'] = $this->Record_model->get_data_admission($admission_id);
$data['title'] = 'Add to Doctor';
$data['topbar'] = 'navbar-default';
$data['form'] = 'admission/addadmissiondataform';
$data['main_view'] = "admission/addadmissiondata";

$this->load->view('layouts/central_template', $data);


 } else {
 

if($this->input->post('e_ward') == "*Under.Observation"){
  

    $date = date("Y-m-d");

     $user_id = $this->session->userdata('u_id');
     
      $data = array(
   'a_user_id' => $user_id,
   'a_fname' => $this->input->post('e_patientfname'),
   'a_mname' => $this->input->post('e_patientmname'),
   'a_lname' => $this->input->post('e_patientlname'),
   'a_gender' => $this->input->post('e_gender'),
   'a_age' => $this->input->post('e_age'),
   'a_admittedby' => $this->input->post('e_admitted'),
   'a_complaint' => $this->input->post('e_chief_complaint'),
   'a_wardname' => $this->input->post('e_ward'),
   'a_completediagnosis' => $this->input->post('e_diagnosis'),
   'a_medication' => $this->input->post('e_medication'),
   'a_dischargedate' => $this->input->post('e_discharge'),
   'a_conditiontodischarge' => $this->input->post('e_condition'),
   'a_physician_id' => $this->input->post('e_physician'),
   'a_date' => $date 
 
   );

   if($this->Standarduser_model->add_admission_to_doctor($data)){

$doctor = 'Doctor';

$data['get_user'] = $this->Record_model->get_users_account($doctor);
$data['get_admission_view'] = $this->Record_model->get_data_admission($admission_id);
$data['title'] = 'Add to Doctor';
$data['topbar'] = 'navbar-default';
$data['form'] = 'admission/addadmissiondataform';
$data['main_view'] = "admission/addadmissiondata";
  
      $this->session->set_flashdata('add_to_doctor_success', "Patient Admission is Added to Doctor's Account");
      redirect('admissioncontrol/admissionview/'.$admission_id.'#admission', $data);



   }



} else {

  
     $date = date("Y-m-d");

     $user_id = $this->session->userdata('u_id');
     
      $data = array(
   'oad_user_id' => $user_id,
   'oad_fname' => $this->input->post('e_patientfname'),
   'oad_mname' => $this->input->post('e_patientmname'),
   'oad_lname' => $this->input->post('e_patientlname'),
   'oad_gender' => $this->input->post('e_gender'),
   'oad_age' => $this->input->post('e_age'),
   'oad_admittedby' => $this->input->post('e_admitted'),
   'oad_complaint' => $this->input->post('e_chief_complaint'),
   'oad_wardname' => $this->input->post('e_ward'),
   'oad_completediagnosis' => $this->input->post('e_diagnosis'),
   'oad_medication' => $this->input->post('e_medication'),
   'oad_dischargedate' => $this->input->post('e_discharge'),
   'oad_conditiontodischarge' => $this->input->post('e_condition'),
   'oad_physician_id' => $this->input->post('e_physician'),
   'oad_date' => $date 
 
   );

   if($this->Standarduser_model->add_old_admission($data)){

$doctor = 'Doctor';

$data['get_user'] = $this->Record_model->get_users_account($doctor);
$data['get_admission_view'] = $this->Record_model->get_data_admission($admission_id);
$data['title'] = 'Add to Doctor';
$data['topbar'] = 'navbar-default';
$data['form'] = 'admission/addadmissiondataform';
$data['main_view'] = "admission/addadmissiondata";
  
      $this->session->set_flashdata('add_to_doctor_success', "Patient Admission is Added to Doctor's Account");
      redirect('admissioncontrol/admissionview/'.$admission_id.'#admission', $data);



   }





}


 

 }


}





public function oldrecords(){

 $userid = $this->session->userdata('su_id');


$data['oldrecords'] = $this->Standarduser_model->get_old_findings($userid);

$data['title'] = 'Old Findings';
$data['topbar'] = 'standardaccount/oldrecordsnavbar';
$data['main_view'] = "standardaccount/oldrecordsview";

$this->load->view('standardaccount/doctorpage', $data);


}




public function oldfindingsview($oldfindings_id){

$data['get_patient_data'] = $this->Standarduser_model->get_old_findings_data($oldfindings_id);
$data['title'] = 'Old Findings';
$data['topbar'] = 'standardaccount/oldrecordsnavbar';
$data['main_view'] = "standardaccount/oldrecordfindingsview";

$this->load->view('standardaccount/doctorpage', $data);


}












public function oldadmissionview(){

   $userid = $this->session->userdata('su_id');

$data['get_doctor_patient'] = $this->Standarduser_model->get_old_admission($userid);

$data['title'] = 'Old Admission Records';
$data['topbar'] = 'standardaccount/oldrecordsnavbar';
$data['main_view'] = "standardaccount/oldadmissiondata";

$this->load->view('standardaccount/doctorpage', $data);


}



public function oldadmission_data($oldadmissiondata){

$data['get_patient_data'] = $this->Standarduser_model->get_old_admission_data($oldadmissiondata);
$data['title'] = 'Old Admission Records';
$data['topbar'] = 'standardaccount/oldrecordsnavbar';
$data['main_view'] = "standardaccount/oldadmission_view";

$this->load->view('standardaccount/doctorpage', $data);



}


















}




 ?>