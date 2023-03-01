

<?php 

class Record_model extends CI_Model {



public function patient_record($data){
 

 $insert = $this->db->insert('patient_record', $data);

  return $insert;


}

 



public function get_patient_records(){


$query = $this->db->get('patient_record');

 return $query->result();

}


public function get_patient_data($pr_id){

$this->db->where('pr_id', $pr_id);
$query = $this->db->get('patient_record');

return $query->row();

}

public function get_findings_info($findings_id){

$this->db->where('f_id', $findings_id);
$query = $this->db->get('findings');

return $query->row();


}



public function update_patient_info($pr_id, $data){

$this->db->where('pr_id', $pr_id);
$query = $this->db->update('patient_record', $data);

return $query;

}





public function get_civilstat(){

$query = $this->db->get('civilstat');

if($query->num_rows() > 0){
 
 return $query->result();

}


}


public function get_gender(){

$query = $this->db->get('gender');

if($query->num_rows() > 0){
 
 return $query->result();

 }
}

public function get_ward() {

$query = $this->db->get('wards');

if($query->num_rows() > 0){
 
 return $query->result();

}



}



public function get_physician(){

$query = $this->db->get('physicians');

if($query->num_rows() > 0) {

 return $query->result();

 }

}





public function get_patient_findings($findings_id){

$this->db->where('f_id', $findings_id);
$query = $this->db->get('findings');

return $query->row();

}


public function get_findings_id_update($findings_id){

$this->db->where('f_id', $findings_id);
$query = $this->db->get('findings');

return $query->row()->pr_findings_id;

}

public function get_admission_id_update($admission_id){

$this->db->where('ad_id', $admission_id);

$query = $this->db->get('admission_record');

return $query->row()->pr_admission_id;

}





public function fetch_medical_field(){

$this->db->order_by('fp_name', 'ASC');
$query = $this->db->get('fieldsphysician');
return $query->result();

}


public function fetch_physician($fp_id){

$this->db->where('fp_id', $fp_id);
$this->db->order_by('ph_name', 'ASC');
$query = $this->db->get('physicians');
$output = '<option value="">Select Physician</option>';
foreach($query->result() as $physicians){

 $output .= '<option value="">'.$physicians->ph_name.'</option>';

}
 
  return $output;

}


public function add_findings_data($pr_id, $data){

$this->db->where('pr_id', $pr_id);

$query = $this->db->insert('findings', $data);

return $query;


}


public function edit_findings_data($findings_id, $data){

$this->db->where('f_id', $findings_id);
$query = $this->db->update('findings', $data);
 
return $query;


}


public function add_admission_data($pr_id, $data){

$this->db->where('pr_id', $pr_id);

$query = $this->db->insert('admission_record', $data);

return $query;



}


public function update_admission_data($admission_id, $data){
  
$this->db->where('ad_id', $admission_id);
$query = $this->db->update('admission_record', $data);
 
 return $query;

}



public function get_patient_findings_id($pr_id) { // Join tables
 
 $this->db->select('
     findings.f_chiefcomplaint,
     findings.f_historypresentillness,
     findings.f_bp,
     findings.f_rr,
     findings.f_cr,
     findings.f_temp,
     findings.f_wt,
     findings.f_pr,
     findings.f_physicalexam,
     findings.f_diagnosis,
     findings.f_medication,
     findings.f_nameofphysician,
     findings.f_date,
     findings.f_id as findings_id,
     patient_record.pr_date,
     patient_record.pr_lname,
     patient_record.pr_fname,
     patient_record.pr_mname,
     patient_record.pr_addrs,
     patient_record.pr_age,
     patient_record.pr_bdate,
     patient_record.pr_bplace,
     patient_record.pr_civilstat,
     patient_record.pr_gen,
     patient_record.pr_number,
     patient_record.pr_religion,
     patient_record.pr_occup
 	');

    $this->db->from('findings');
    $this->db->join('patient_record', 'patient_record.pr_id = findings.pr_findings_id');
    $this->db->where('findings.pr_findings_id', $pr_id);

 $query = $this->db->get();

 return $query->result();
  
}




public function get_data_findings($findings_id) { // Join tables
 
 $this->db->select('
     findings.f_chiefcomplaint,
     findings.f_historypresentillness,
     findings.f_bp,
     findings.f_rr,
     findings.f_cr,
     findings.f_temp,
     findings.f_wt,
     findings.f_pr,
     findings.f_physicalexam,
     findings.f_diagnosis,
     findings.f_medication,
     findings.f_nameofphysician,
     findings.f_date,
     findings.f_id as findings_id,
     patient_record.pr_id,
     patient_record.pr_date,
     patient_record.pr_lname,
     patient_record.pr_fname,
     patient_record.pr_mname,
     patient_record.pr_addrs,
     patient_record.pr_age,
     patient_record.pr_bdate,
     patient_record.pr_bplace,
     patient_record.pr_civilstat,
     patient_record.pr_gen,
     patient_record.pr_number,
     patient_record.pr_religion,
     patient_record.pr_occup
 	');

    $this->db->from('findings');
    $this->db->join('patient_record', 'patient_record.pr_id = findings.pr_findings_id');
    $this->db->where('findings.f_id', $findings_id);

 $query = $this->db->get();

  return $query->row();

}




public function get_findings_id_info() { // Join tables


 $query = $this->db->get('findings');

 
 if($query->num_rows() > 0){

  return $query->result();


 }

  

}





public function get_patient_admission_id($pr_id) { // Join tables
 
 $this->db->select('
     admission_record.ad_wardname,
     admission_record.ad_id as admission_id,
     admission_record.ad_date,
     admission_record.ad_physician,
      admission_record.ad_dischargedate,
     patient_record.pr_date,
     patient_record.pr_lname,
     patient_record.pr_fname,
     patient_record.pr_mname,
     patient_record.pr_addrs,
     patient_record.pr_age,
     patient_record.pr_bdate,
     patient_record.pr_bplace,
     patient_record.pr_civilstat,
     patient_record.pr_gen,
     patient_record.pr_number,
     patient_record.pr_religion,
     patient_record.pr_occup
    ');

    $this->db->from('admission_record');
    $this->db->join('patient_record', 'patient_record.pr_id = admission_record.pr_admission_id');
    $this->db->where('admission_record.pr_admission_id', $pr_id);

 $query = $this->db->get();

 return $query->result();
  
}




public function get_data_admission($admission_id) {


 $this->db->select('
     admission_record.ad_wardname,
     admission_record.ad_id as admission_id,
     admission_record.ad_date,
     admission_record.pr_admission_id,
     admission_record.ad_admittedby,
     admission_record.ad_physician,
     admission_record.ad_father,
     admission_record.ad_mother,
     admission_record.ad_chargetoaccount,
     admission_record.ad_relationtopatient,
     admission_record.ad_address,
     admission_record.ad_number,
     admission_record.ad_totalpayment,
     admission_record.ad_dischargedate,
     admission_record.ad_complaint,
     admission_record.ad_completediagnosis,
     admission_record.ad_medication,
     admission_record.ad_conditiontodischarge,
     admission_record.ad_remarks,
     patient_record.pr_id,
     patient_record.pr_date,
     patient_record.pr_lname,
     patient_record.pr_fname,
     patient_record.pr_mname,
     patient_record.pr_addrs,
     patient_record.pr_age,
     patient_record.pr_bdate,
     patient_record.pr_bplace,
     patient_record.pr_civilstat,
     patient_record.pr_gen,
     patient_record.pr_number,
     patient_record.pr_religion,
     patient_record.pr_occup
    ');

    $this->db->from('admission_record');
    $this->db->join('patient_record', 'patient_record.pr_id = admission_record.pr_admission_id');
    $this->db->where('admission_record.ad_id', $admission_id);

 $query = $this->db->get();

 return $query->row();



}






public function get_users_account($doctor){

$this->db->where('su_position', $doctor);
$query = $this->db->get('standardusers');

return $query->result();

}































}



 ?>