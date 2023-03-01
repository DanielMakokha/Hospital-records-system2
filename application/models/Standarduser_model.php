<?php 

class Standarduser_model extends CI_Model{






 //login user script 
  public function login_user($user, $pass){
    
    $this->db->where('su_user', $user);
    $query = $this->db->get('standardusers');
    $decrypt = $query->row(3)->su_pass;

    if(password_verify($pass,  $decrypt)){
  
     return $query->row(0)->su_id;


    } else {

      return false;

    }


  }








public function add_findings_to_doctor($data){

$insertdata = $this->db->insert('add_patientfindings', $data);
 
   return $insertdata;

}



public function add_oldfindings($data){

$datainsert = $this->db->insert('oldfindings', $data);

return $datainsert;

}



public function get_patient($user_id) { // Join tables
 
 $this->db->select('
     add_patientfindings.a_id,
     add_patientfindings.a_fname,
     add_patientfindings.a_mname, 
     add_patientfindings.a_lname,
     add_patientfindings.a_gender, 
     add_patientfindings.a_age,
     add_patientfindings.a_complaint, 
     add_patientfindings.a_historypresentillness, 
     add_patientfindings.a_bp,
     add_patientfindings.a_rr,
     add_patientfindings.a_cr,
     add_patientfindings.a_temp,
     add_patientfindings.a_wt, 
     add_patientfindings.a_pr,
     add_patientfindings.a_physicalexam,
     add_patientfindings.a_diagnosis,
     add_patientfindings.a_medication,
     add_patientfindings.a_date,
     standardusers.su_user,
     standardusers.su_fname,
     standardusers.su_position
  ');

    $this->db->from('add_patientfindings');
    $this->db->join('standardusers', 'standardusers.su_id = add_patientfindings.a_physician_id');
    $this->db->where('add_patientfindings.a_physician_id', $user_id);

 $query = $this->db->get();

 return $query->result();
  
}



public function get_old_findings($user_id) { // Join tables
 
 $this->db->select('
     oldfindings.of_id,
     oldfindings.of_fname,
     oldfindings.of_mname, 
     oldfindings.of_lname,
     oldfindings.of_gender, 
     oldfindings.of_age,
     oldfindings.of_complaint, 
     oldfindings.of_historypresentillness, 
     oldfindings.of_bp,
     oldfindings.of_rr,
     oldfindings.of_cr,
     oldfindings.of_temp,
     oldfindings.of_wt, 
     oldfindings.of_pr,
     oldfindings.of_physicalexam,
     oldfindings.of_diagnosis,
     oldfindings.of_medication,
     oldfindings.of_date,
     standardusers.su_user,
     standardusers.su_fname,
     standardusers.su_position
  ');

    $this->db->from('oldfindings');
    $this->db->join('standardusers', 'standardusers.su_id = oldfindings.of_physician_id');
    $this->db->where('oldfindings.of_physician_id', $user_id);

 $query = $this->db->get();

 return $query->result();
  
}



public function get_old_admission($user_id){

 $this->db->select('
     oldadmission.oad_id,
     oldadmission.oad_fname,
     oldadmission.oad_mname, 
     oldadmission.oad_lname,
     oldadmission.oad_gender, 
     oldadmission.oad_age,
     oldadmission.oad_complaint, 
     oldadmission.oad_completediagnosis, 
     oldadmission.oad_medication,
     oldadmission.oad_conditiontodischarge,
     oldadmission.oad_remarks, 
     oldadmission.oad_dischargedate,
     oldadmission.oad_date,
     oldadmission.oad_admittedby,
     oldadmission.oad_wardname,
     standardusers.su_user,
     standardusers.su_fname,
     standardusers.su_position
  ');

    $this->db->from('oldadmission');
    $this->db->join('standardusers', 'standardusers.su_id = oldadmission.oad_physician_id');
    $this->db->where('oldadmission.oad_physician_id', $user_id);

 $query = $this->db->get();

 return $query->result();



}



public function add_admission_to_doctor($data){

$insertdata = $this->db->insert('add_patientadmission', $data);
 
   return $insertdata;


}



public function get_patient_admitted($user_id) { // Join tables
 
 $this->db->select('
     add_patientadmission.a_id,
     add_patientadmission.a_fname,
     add_patientadmission.a_mname, 
     add_patientadmission.a_lname,
     add_patientadmission.a_gender, 
     add_patientadmission.a_age,
     add_patientadmission.a_complaint, 
     add_patientadmission.a_completediagnosis, 
     add_patientadmission.a_medication,
     add_patientadmission.a_conditiontodischarge,
     add_patientadmission.a_remarks, 
     add_patientadmission.a_dischargedate,
     add_patientadmission.a_date,
     add_patientadmission.a_admittedby,
     add_patientadmission.a_wardname,
     standardusers.su_user,
     standardusers.su_fname,
     standardusers.su_position
  ');

    $this->db->from('add_patientadmission');
    $this->db->join('standardusers', 'standardusers.su_id = add_patientadmission.a_physician_id');
    $this->db->where('add_patientadmission.a_physician_id', $user_id);

 $query = $this->db->get();

 return $query->result();
  
}



public function get_id($finding_id){

$this->db->where('a_id', $finding_id);

$data = $this->db->get('add_patientfindings');

return $data->row();

}

public function get_id_admission($admission_id){

$this->db->where('a_id', $admission_id);

$data = $this->db->get('add_patientadmission');

return $data->row();

}



public function get_patient_data($finding_id) { // Join tables
 

  $this->db->where('a_id', $finding_id);

 $query = $this->db->get('add_patientfindings');

 return $query->row();
  
}


public function get_old_findings_data($oldfindings_id){

  $this->db->where('of_id', $oldfindings_id);

 $query = $this->db->get('oldfindings');

 return $query->row();


}


public function get_old_admission_data($oldadmissiondata){

$this->db->where('oad_id', $oldadmissiondata);

 $query = $this->db->get('oldadmission');

 return $query->row();



}


public function get_patient_admission($admission_id) { // Join tables
 

  $this->db->where('a_id', $admission_id);

 $query = $this->db->get('add_patientadmission');

 return $query->row();
  
}





public function add_old_admission($data){

$datainsert = $this->db->insert('oldadmission', $data);

return $datainsert;


}





public function updatefindings($data, $finding_id, $userid,  $fname, $mname, $lname){

 $datalog = array(
   'lo_user_id' => $userid,
   'lo_fname' =>  $fname,
   'lo_mname' => $mname,
   'lo_lname' => $lname,
   'lo_physician_id' => $this->input->post('u_admin'),
   'lo_historypresentillness' => $this->input->post('u_history'),
   'lo_physicalexam' => $this->input->post('u_physical'),
   'lo_diagnosis' => $this->input->post('u_diagnosis'),
   'lo_medication' => $this->input->post('u_medication')
  );


 $insert = $this->db->insert('log_findings', $datalog);
 

$this->db->where('a_id', $finding_id);

$update = $this->db->update('add_patientfindings', $data);
 
 return $update;

}


public function update_admission($data, $admission_id,  $userid, $fname, $mname, $lname){

 
 $datalog = array(
   
  'lo_user_id' =>  $userid,
  'lo_fname' => $fname,
  'lo_mname' => $mname,
  'lo_lname' => $lname,
  'lo_physician_id' => $this->input->post('u_admin'),
  'lo_admittedby' => $this->input->post('u_admitted'),
  'lo_wardname' => $this->input->post('u_wards'),
  'lo_dischargedate' =>  $this->input->post('u_discharge'),
  'lo_completediagnosis' =>  $this->input->post('u_completediagnosis'),
  'lo_medication' =>  $this->input->post('u_medication'),
  'lo_conditiontodischarge' =>  $this->input->post('u_conditiontodischarge'),
  'lo_remarks' =>  $this->input->post('u_remarks'),
  'lo_complaint' => $this->input->post('u_complaint')

  );

 $insert = $this->db->insert('log_admission', $datalog);

$this->db->where('a_id', $admission_id);

$update = $this->db->update('add_patientadmission', $data);
 
 return $update;



}



public function get_ward() {

$query = $this->db->get('wards');

if($query->num_rows() > 0){
 
 return $query->result();

}



}




public function update_vital_sign($data, $finding_id, $userid, $fname,  $mname, $lname){

$datalog = array(
   
  'lo_user_id' =>  $userid,
  'lo_fname' => $fname,
  'lo_mname' => $mname,
  'lo_lname' => $lname,
  'lo_physician_id' => $this->input->post('u_admin'),
  'lo_bp' => $this->input->post('u_bp'),
  'lo_rr' =>  $this->input->post('u_rr'),
  'lo_cr' =>  $this->input->post('u_cr'),
  'lo_temp' =>  $this->input->post('u_temp'),
  'lo_pr' =>  $this->input->post('u_pr'),
  'lo_wt' =>  $this->input->post('u_wt'),
  'lo_complaint' => $this->input->post('u_complaint')

  );

 $insert = $this->db->insert('log_findings', $datalog);


$this->db->where('a_id', $finding_id);

$vitalupdate = $this->db->update('add_patientfindings', $data);

return $vitalupdate;


}



public function get_users(){

$qu = $this->db->get('users');
 
 return $qu->result();

}





public function get_fname($admission_id){

$this->db->where('a_id', $admission_id);

$q =  $this->db->get('add_patientadmission');
 
 return $q->row()->a_fname;

}



public function get_mname($admission_id){

$this->db->where('a_id', $admission_id);

$q =  $this->db->get('add_patientadmission');
 
 return $q->row()->a_mname;

}



public function get_lname($admission_id){

$this->db->where('a_id', $admission_id);

$q =  $this->db->get('add_patientadmission');
 
 return $q->row()->a_lname;

}





public function get_fname_findings($finding_id){

$this->db->where('a_id', $finding_id);

$q =  $this->db->get('add_patientfindings');
 
 return $q->row()->a_fname;

}



public function get_mname_findings($finding_id){

$this->db->where('a_id', $finding_id);

$q =  $this->db->get('add_patientfindings');
 
 return $q->row()->a_mname;

}



public function get_lname_findings($finding_id){

$this->db->where('a_id', $finding_id);

$q =  $this->db->get('add_patientfindings');
 
 return $q->row()->a_lname;

}



public function get_fname_f($finding_id){

$this->db->where('a_id', $finding_id);

$q =  $this->db->get('add_patientfindings');
 
 return $q->row()->a_fname;

}



public function get_mname_f($finding_id){

$this->db->where('a_id', $finding_id);

$q =  $this->db->get('add_patientfindings');
 
 return $q->row()->a_mname;

}



public function get_lname_f($finding_id){

$this->db->where('a_id', $finding_id);

$q =  $this->db->get('add_patientfindings');
 
 return $q->row()->a_lname;

}

































}




 ?>