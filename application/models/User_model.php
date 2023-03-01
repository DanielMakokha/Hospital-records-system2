<?php 


class User_model extends CI_Model {




  //login user script 
  public function login_user($user, $pass){
    
    $this->db->where('u_user', $user);
    $query = $this->db->get('users');
    $decrypt = $query->row(3)->u_pass;

    if(password_verify($pass,  $decrypt)){
  
     return $query->row(0)->u_id;


    } else {

      return false;

    }


  }
  


 //get user id of the current user who is logged in!
 public function get_user_id($u_id){

  $this->db->where('u_id', $u_id);
  $query = $this->db->get('users');
  
     return $query->row();

 }

 //for account recovery!
 public function get_recovery_id($u_id){

  $this->db->where('u_id', $u_id);
  
  $query = $this->db->get('users');
  
     return $query->row();

 }

 // match the user who is logged in
 public function get_user_forgot_id($user){
 
  $this->db->where('u_user', $user);
  $query = $this->db->get('users');
 
  return $query->row();

 }

 public function get_id($login_id){

 $this->db->where('u_id', $login_id); 
  $query = $this->db->get('users');
   
  return $query->row();

 }


 //secret question id retrieve
 public function get_forgot_secret($login_id, $secans){

 $this->db->where('u_id', $login_id);

 $query = $this->db->get('users');

 $decrypt = $query->row()->u_secretanswer;

 if(sha1($secans) == $decrypt){ // md5 encryption 

  return $query->row();
}

} 




//hash the new password
public function updatepass($u_id, $pass){

$this->db->where('u_id', $u_id);


$encrypt = password_hash($this->input->post('pass'), PASSWORD_DEFAULT);

$data = array(

  'u_pass' => $encrypt

);

$updated = $this->db->update('users', $data);

 return $updated;

}


// account recovery scripts
public function updatesecret($u_id, $secques, $secans){

$this->db->where('u_id', $u_id);



$encrypt = sha1($secans);

$data = array(
   
 'u_secretquestion' => $secques,
 'u_secretanswer' => $encrypt

 );
 
 $updatesec = $this->db->update('users', $data);

  return $updatesec;

}


// renew password after secret question
public function updatenewpass($login_id, $newpass){

$this->db->where('u_id', $login_id);
$query = $this->db->get('users');

$option = ['cost', 12];
$encryptnewpass = password_hash($this->input->post('newpass'), PASSWORD_BCRYPT, $option);

$data = array(

 'u_pass' => $encryptnewpass

);

$updatednewpass = $this->db->update('users', $data);

return true;

}














































}



 ?>