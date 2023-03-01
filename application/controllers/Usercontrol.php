<?php 


class Usercontrol extends CI_Controller {


public function index(){ // get data of the user who is logged in
  
 if($this->session->userdata('logged_in')) {
 
  $u_id = $this->session->userdata('u_id');

  $data['get_user_records'] = $this->Record_model->get_patient_records($u_id);
 
  $data['main_view'] = 'chartgraph/homedashboard_view';

  $this->load->view('layouts/central_template', $data);

 }


}

 
  

   public function newlogin() {

  
    $this->form_validation->set_rules('user1', 'Username', 'trim|required|min_length[5]');
    $this->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[9]');

   if($this->form_validation->run() == FALSE){

    $data['title'] = "Login Account";
    $data['accountlogin'] = 'users/newlogin_view';
    
    $this->load->view('newaccountlogin', $data);

   } else {
       $user = $this->input->post('user1');
       $pass = $this->input->post('pass1');
      
        $login_id = $this->User_model->login_user($user, $pass);

       if($login_id){

          $data = array(
            'u_id' => $login_id,
            'u_user' => $user,
            'logged_in' => TRUE
          );

         $data['title'] = "Account Recovery";
         $this->session->set_userdata($data);
         $this->session->set_flashdata('login_success', '<div class="text-center">You are now logged in as <b>'.$this->session->userdata('u_user'). '</b></div>');
          redirect('indexcontrol/newaccountquestion', $data);  


       } else {

          $data['title'] = "Login Account";
         $this->session->set_flashdata('login_failed', 'Username or Password is incorrect!');
         redirect('usercontrol/newlogin', $data);


       }
       
      
     }


   }

  
   public function login() {
    

    $this->form_validation->set_rules('user1', 'Username', 'trim|required');
    $this->form_validation->set_rules('pass1', 'Password', 'trim|required');

   if($this->form_validation->run() == FALSE){
  


    $data['title'] = "Login Account";
    $data['accountlogin'] = 'users/login_view';
    

    $this->load->view('accountlogin', $data);

   } else {
   	   $user = $this->input->post('user1');
   	   $pass = $this->input->post('pass1');
      
        $login_id = $this->User_model->login_user($user, $pass);

       if($login_id){

       	  $data = array(
            'u_id' => $login_id,
            'u_user' => $user,
            'logged_in' => TRUE
       	  );

         $data['title'] = "Patient Record Management";
         $this->session->set_userdata($data);
         $this->session->set_flashdata('login_success', '<div class="text-center">You are now logged in as <b>'.$this->session->userdata('u_user'). '</b></div>');
          redirect('admissioncontrol/admitdatatable', $data);  


       } else {

          $data['title'] = "Login Account";
         $this->session->set_flashdata('login_failed', 'Username or Password is incorrect!');
         redirect('usercontrol/login/#admin', $data);


       }
       
      
     }


   }



public function logout(){
 
 $this->session->sess_destroy();

redirect('usercontrol/login');

}



  public function accountlogin() {

  
    $this->form_validation->set_rules('userlogin', 'Username', 'trim|required|min_length[5]');
    $this->form_validation->set_rules('passlogin', 'Password', 'trim|required|min_length[9]');

   if($this->form_validation->run() == FALSE){

    $data['title'] = "Login Account";
    $data['logging'] = 'users/logging_in';
 
    $this->load->view('accountloggedin', $data);


   } else {
       $user = $this->input->post('userlogin');
       $pass = $this->input->post('passlogin');
      
        $login_id = $this->User_model->login_user($user, $pass);

       if($login_id){

          $data = array(
            'u_id' => $login_id,
            'u_user' => $user,
            'logged_in' => TRUE
          );

         $data['title'] = "Patient Record Management";
         $this->session->set_userdata($data);
         $this->session->set_flashdata('login_success', '<div class="text-center">You are now logged in as <b>'.$this->session->userdata('u_user'). '</b></div>');
          redirect('admissioncontrol/admitdatatable', $data);  


       } else {
   
     $data['title'] = "Login Account";
     $data['logging'] = 'users/logging_in';

      $this->session->set_flashdata('login_failed', 'Username or Password is incorrect! Please try again');

         $this->load->view('accountloggedin', $data);

       }
       
      
     }


   }

public function logoutnewpass() {

   $data['title'] = 'Login Account';

  
   $this->session->set_flashdata('newpass_success', 'Password has change successfully!');
   
   $data['logging'] = 'users/logging_in';
   $this->load->view('accountloggedin', $data);

}

























}

?>