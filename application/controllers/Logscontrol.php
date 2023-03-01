<?php 

class Logscontrol extends CI_Controller {



public function logsview(){

$admin_id = $this->session->userdata('u_id');

$data['get_log_findings'] = $this->Logs_model->get_findings_log($admin_id);
$data['title'] = 'Findings';
$data['topbar'] = 'user_logs/userlogsnavbar';
$data['main_view'] = 'user_logs/userfindingslogview';

 $this->load->view('layouts/central_template', $data);


}



public function logsadmissionview(){


$admin_id = $this->session->userdata('u_id');

$data['get_log_admission'] = $this->Logs_model->get_admission_log($admin_id);
$data['title'] = 'Admission';
$data['topbar'] = 'user_logs/userlogsnavbar';
$data['main_view'] = 'user_logs/useradmissionlogview';

 $this->load->view('layouts/central_template', $data);




}





public function log_findingsdetails($findings_id){

$admin_id = $this->session->userdata('u_id');

$data['get_log_details'] = $this->Logs_model->get_findings_details($findings_id);
$data['title'] = 'Log Findings';
$data['topbar'] = 'user_logs/userlogsnavbar';
$data['main_view'] = 'user_logs/userfindingsdetails';

 $this->load->view('layouts/central_template', $data);




}



public function log_admissiondetails($admission_id){

$admin_id = $this->session->userdata('u_id');

$data['get_log_details'] = $this->Logs_model->get_admission_details($admission_id);
$data['title'] = 'Log Admission';
$data['topbar'] = 'user_logs/userlogsnavbar';
$data['main_view'] = 'user_logs/useradmissiondetails';

 $this->load->view('layouts/central_template', $data);




}




















}






















































 ?>