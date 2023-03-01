<?php 



class Dashboard_model extends CI_Model{






public function get_data(){

$query =  $this->db->count_all('patient_record');

return $query;

}


public function get_user(){

$query =  $this->db->count_all('standardusers');

return $query;

}


public function get_doctor(){

$query =  $this->db->count_all('physicians');

return $query;


}





















}


 ?>