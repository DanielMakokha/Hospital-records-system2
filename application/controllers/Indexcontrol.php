<?php 


class Indexcontrol extends CI_Controller {
 



public function importviewuser(){

$data['title'] = "Import User";
$this->load->view('importuser', $data);


}



public function get_dashboard_data(){
 
 $data['get_data'] = $this->Dashboard_model->get_data();
  $data['topbar'] = 'navbar-default';
 $data['main_view'] = 'dashboard/homedashboard_view';

$this->load->view('layouts/central_template', $data);


}
  

 

public function changepassupdate(){
 
 $u_id = $this->session->userdata('u_id');// user session = user id in database
   $data['user_id'] = $this->User_model->get_user_id($u_id);

 $this->form_validation->set_rules('oldpass', 'Old Password', 'trim|required|callback_password_check');
 $this->form_validation->set_rules('pass', 'New Password', 'trim|required|min_length[9]');
 $this->form_validation->set_rules('cpass', 'Confirm Password', 'trim|required|matches[pass]');

 if($this->form_validation->run() == FALSE){
  
   $data['title'] = 'Change Password';
 $data['topbar'] = 'navbar-default';;
   $data['main_view'] = 'users/changepass';
   $this->load->view('layouts/central_template', $data);

 } else  {
   
    $pass = $this->input->post('pass');
    
   $data['title'] = 'Change Password';

    $this->User_model->updatepass($u_id, $pass);


    $this->session->set_flashdata('pass_updated', 'Password has successfully change');
   $data['topbar'] = 'navbar-default';
    $data['main_view'] = 'users/changepass';

   $this->load->view('layouts/central_template', $data);


 }

}


public function password_check($oldpass){ 

     $u_id = $this->session->userdata('u_id');
     $user_id = $this->User_model->get_user_id($u_id);
     $oldpass = $this->input->post('oldpass');
  
   if(password_verify($oldpass, $user_id->u_pass) == true) {

   return true;

  } else {

    $this->form_validation->set_message('password_check','The {field} is incorrect!');
    
     $data['user_id'] = $this->User_model->get_user_id($u_id);
  
   return false;

  }
  
 }

public function newaccountquestion(){ 

   $u_id = $this->session->userdata('u_id');
    $data['user_id'] = $this->User_model->get_user_id($u_id);

     $this->form_validation->set_rules('currentpassword', 'Current Password', 'trim|required|callback_oldpass_checked');
     $this->form_validation->set_rules('secquestion', 'Secret Question', 'trim|required');
     $this->form_validation->set_rules('secanswer', 'Secret Answer', 'trim|required');
     $this->form_validation->set_rules('cosecanswer', 'Confirm Secret Answer', 'trim|required|matches[secanswer]');

 

   if($this->form_validation->run() == FALSE) {
     
     $data['title'] = "Account Recovery";
     $data['topbar'] = "navbar-default-recovery";
     $data['recoverview'] = 'users/newaccountrecover';
   $this->load->view('newaccountrecovery_view', $data);      

  } else {

    $u_id = $this->session->userdata('u_id');
    $secques = $this->input->post('secquestion');
    $secans = $this->input->post('secanswer');

    $this->User_model->updatesecret($u_id, $secques, $secans);
    
    $data['title'] = "Account Recovery";
     $this->session->set_flashdata('sec_pass', 'Account Recovery is created');;
     redirect('admissioncontrol/admitdatatable', $data);      


  }
  
 }

 public function oldpass_checked($currentpassword){

    $u_id = $this->session->userdata('u_id');
     $the_id = $this->User_model->get_recovery_id($u_id);
     $currentpassword = $this->input->post('currentpassword');
  
   if(password_verify($currentpassword, $the_id->u_pass) == true) {

   return true;

  } else {

    $this->form_validation->set_message('oldpass_checked','The {field} is incorrect!');
    
   
  
   return false;

  }


}


 
 public function secretquestion(){ 

   $u_id = $this->session->userdata('u_id');
    $data['user_id'] = $this->User_model->get_user_id($u_id);

     $this->form_validation->set_rules('currpassword', 'Current Password', 'trim|required|callback_oldpass_check');
     $this->form_validation->set_rules('secquestion', 'Secret Question', 'trim|required');
     $this->form_validation->set_rules('secanswer', 'Secret Answer', 'trim|required');
     $this->form_validation->set_rules('csecanswer', 'Confirm Secret Answer', 'trim|required|matches[secanswer]');

     

   if($this->form_validation->run() == FALSE) {
     
     $data['title'] = "Account Recovery";
     $data['topbar'] = 'navbar-default';
     $data['main_view'] = 'users/recoveraccount';
     $this->load->view('layouts/central_template', $data);

  } else {

    $u_id = $this->session->userdata('u_id');
    $secques = $this->input->post('secquestion');
    $secans = $this->input->post('secanswer');

    $this->User_model->updatesecret($u_id, $secques, $secans);
    
    $data['title'] = "Account Recovery";
    $data['topbar'] = 'navbar-default';
     $this->session->set_flashdata('sec_password', 'Account Recovery is created');
    $data['main_view'] = 'users/recoveraccount';
     $this->load->view('layouts/central_template', $data);      


  }
  
 }




public function oldpass_check($currpassword){

    $u_id = $this->session->userdata('u_id');
     $the_id = $this->User_model->get_recovery_id($u_id);
     $currpassword = $this->input->post('currpassword');
  
   if(password_verify($currpassword, $the_id->u_pass) == true) {

   return true;

  } else {

    $this->form_validation->set_message('oldpass_check','The {field} is incorrect!');
    
   
  
   return false;

  }


}


public function forgotpassuser(){

 $this->form_validation->set_rules('user','Username', 'trim|required|min_length[5]');
 
if($this->form_validation->run() == FALSE){

  $data['title'] = "Forgot Password";
  $data['forgotpass_view'] = 'users/forgotpass';

  $this->load->view('forgotpass_view', $data);

} else {

  $user = $this->input->post('user');
  
  $login_id = $this->User_model->get_user_forgot_id($user);

  if($login_id){
     $data = array(
      'u_id' => $login_id,
      'u_user' => $user,
      'logged_in' => true

     );
     
     $this->session->set_flashdata('forgotpass_success', 'Success!');
      $this->session->set_userdata($data);
  

    $data['secret_question'] = 'users/secretquest_answer';
      redirect('indexcontrol/forgot_secretquestion/'.$login_id->u_id.'', $data);
      
  } else {

  $data['title'] = "Forgot Password";

  $data['forgotpass_view'] = 'users/forgotpass';
  $this->session->set_flashdata('forgotpass_failed', 'Sorry unknown username!');
  $this->load->view('forgotpass_view', $data);

  }

}






}


public function forgot_secretquestion($login_id){ //GET ID FROM URL GET REQUEST

  $u_id = $this->session->userdata('u_id'); // always use the logged_in as userdata and use as variable
 $data['id'] = $this->User_model->get_id($login_id); // always put this query on top when getting id as it represents the URL

  $this->form_validation->set_rules('secans', 'Secret Answer', 'trim|required');
 
  if($this->form_validation->run() == FALSE){
   
   $data['title'] = 'Secret Answer';
    
   $data['secret_question'] = 'users/secretquest_answer';
   $this->load->view('secretquestion_view', $data);

  } else {

  
      $secans = $this->input->post('secans'); 
      $identifypass = $this->User_model->get_forgot_secret($login_id, $secans);
    
    if($identifypass) {
         
    $data['title'] = 'Secret Answer';
    $this->session->set_flashdata('secretans_success', 'Secret Answer is match!');
     $data['secret_question'] = 'users/createnewpass';
       redirect('indexcontrol/create_newpass/'.$u_id->u_id.'', $data);
   
     } else {
 
       $data['title'] = 'Secret Answer';
         $this->session->set_flashdata('secretans_failed', ' The secret answer is incorrect!');
          $data['secret_question'] = 'users/secretquest_answer';
          $this->load->view('secretquestion_view', $data);

     }


  }

 

}


public function create_newpass($login_id) {

$u_id = $this->session->userdata('logged_in');
$data['id'] = $this->User_model->get_id($login_id);

$this->form_validation->set_rules('newpass', 'New Password', 'trim|required|min_length[9]');
$this->form_validation->set_rules('cpass', 'Confirm Password','trim|required|matches[newpass]');

if($this->form_validation->run() == FALSE){
     $data['title'] = 'Secure Account';

  $data['newpass_view'] = 'users/createnewpass';
  $this->load->view('create_newpass_view', $data);

} else {
   
    $newpass = $this->input->post('newpass'); 
    $updatenewpass = $this->User_model->updatenewpass($login_id, $newpass);

    if($updatenewpass){

     $data['title'] = 'Secure Account';

     $data['newpass_view'] = 'users/create_newpass';

     redirect('usercontrol/logoutnewpass', $data);

    } else {
     

     $data['title'] = 'Secure Account';
     $this->session->set_flashdata('newpass_failed', 'Sorry failed to change password');
     $data['newpass_view'] = 'users/create_newpass';
     redirect('create_newpass_view', $data);


    }

}



}
































}





 ?>