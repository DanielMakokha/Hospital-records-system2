<?php 



 class Logs_model extends CI_Model {



public function get_findings_log($admin_id){

 $this->db->select('

     log_findings.lo_id,
     log_findings.lo_fname,
     log_findings.lo_mname, 
     log_findings.lo_lname,
     log_findings.lo_gender, 
     log_findings.lo_age,
     log_findings.lo_complaint, 
     log_findings.lo_historypresentillness, 
     log_findings.lo_bp,
     log_findings.lo_rr,
     log_findings.lo_cr,
     log_findings.lo_temp,
     log_findings.lo_wt, 
     log_findings.lo_pr,
     log_findings.lo_physicalexam,
     log_findings.lo_diagnosis,
     log_findings.lo_medication,
     log_findings.lo_date,
     log_findings.log_time,
     standardusers.su_user,
     standardusers.su_fname,
     standardusers.su_position
  ');

    $this->db->from('log_findings');
    $this->db->join('standardusers', 'standardusers.su_id = log_findings.lo_user_id');
    $this->db->where('log_findings.lo_physician_id', $admin_id);

 $query = $this->db->get();

 return $query->result();


}


public function get_findings_details($findings_id){

 $this->db->where('lo_id', $findings_id);
 $q = $this->db->get('log_findings');
 
 return $q->row();
 
}




public function get_admission_log($admin_id){


 $this->db->select('
     log_admission.lo_id,
     log_admission.lo_fname,
     log_admission.lo_mname, 
     log_admission.lo_lname,
     log_admission.lo_gender, 
     log_admission.lo_age,
     log_admission.lo_complaint, 
     log_admission.lo_completediagnosis, 
     log_admission.lo_medication,
     log_admission.lo_conditiontodischarge,
     log_admission.lo_remarks, 
     log_admission.lo_dischargedate,
     log_admission.lo_date,
     log_admission.lo_admittedby,
     log_admission.lo_wardname,
     log_admission.log_time,
     standardusers.su_user,
     standardusers.su_fname,
     standardusers.su_position
  ');

    $this->db->from('log_admission');
    $this->db->join('standardusers', 'standardusers.su_id = log_admission.lo_user_id');
    $this->db->where('log_admission.lo_physician_id', $admin_id);

 $query = $this->db->get();

 return $query->result();


}



public function get_admission_details($admission_id){

 $this->db->where('lo_id', $admission_id);
 $q = $this->db->get('log_admission');
 
 return $q->row();
 
}






















































}

 ?>