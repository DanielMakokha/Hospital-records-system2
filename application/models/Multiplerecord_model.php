<?php 


class Multiplerecord_model extends CI_Model {



 function insertUser($record) {

        // Check user
      $this->db->select('*');
      $this->db->where('u_user', $record[1]);
      $q = $this->db->get('users');
      $response = $q->result_array();
 

 if(count($response) == 0){
 
 $option = ['cost' => 12];

 $encrypt = password_hash(trim($record[2]), PASSWORD_BCRYPT,  $option);

      // Insert record
      if(count($response) == 0){
        $newuser = array(
          "u_fname" => trim($record[0]),
          "u_user" => trim($record[1]),
          "u_pass" => $encrypt
        );

        $this->db->insert('users', $newuser);

      }
  
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



public function patientFinding($data){

 $insert = $this->db->insert('findings', $data);
 
 return $insert;

}


public function patientAdmission($data){

$insert = $this->db->insert('admission_record', $data);

return $insert;


}















































}


 ?>