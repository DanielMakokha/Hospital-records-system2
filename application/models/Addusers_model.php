<?php 

/* 

ito yung model dito binubuo yung queries para makapagcommunicate sa database, halos same lng sila ni controller sa declarations sa 


class Addusers_model extends CI_Model{
	
	public function methodname(){
	
	// database queries


	}

}

 ayun sana gets nyo


*/



class Addusers_model extends CI_Model{



public function add_user($user_id) { // wag nyo muna pansinin yung sa loob ng add_user($user_id)
// itong method na add_user is para sa pagadd ng users/ pagcreate ng accounts nila dito napupunta yung request na nasa sample $data['get_users'] = $this->Addusers_model->get_users(); pero dito papalitan natin yung method gagawin $this->Addusers_model->add_user(); kasi magaadd ng users tayo hindi tayo magget_users or magreretrieve ng data, magiinsert tayo magaadd ganun.

// yung script or queries sa baba is pagadd natin ng data, si data dadaan muna sa series ng codes bago maadd sa database table natin 

 $option = ['cost' => 12]; // itong part na to si $option variable equals kay ['cost' => 12]; ginagamit to para sa mga hacker n gustong magpenetrate sa isang encrypted na data, so sabi jan yung cost => 12 si cost may 12, yung value na 12 is Maximum amount of time it may take to compute the hash data. ilalagay mo yan sa baba

$encrypt = password_hash($this->input->post('a_pass'), PASSWORD_BCRYPT, $option); 
/* 

yung password_hash() is default hashing method ni PHP prog para iencrypt yung data 

$this->input->post('a_pass'), PASSWORD_BCRYPT, $option, sa loob ng password_hash();  may parameters  na tinatawag

$this->input->post()- ginagamit to para maipasa yung nasa input box yung attribute na name="" n may value
example: <input  name='value' <-- any name yan > yung laman ng name='' is ilalagay sa loob ng $this->input->post()

ang setup lagi $this->input->post('value');

then , is para maidagdag yung sunod na parameter

PASSWORD_BCRYPT - itong yung hashing method na latest kay PHP idadagdag lng yan as second parameter

then $option na may lamang ['cost' => 12] as third parameter

si $this->input->post('a_pass') <-- a_pass yung name na nasa <input name='a_pass'> makikita mo to sa foldername standardusers / filename add_user_form.php, yung value ng a_pass na attribute is eencrypt natin since password sya hindi sya pedeng maexpose maski sa sariling database natin, lahat ng sensitive data macoconvert sa output na $2y$12$i1smyg0fT4rbFFiocy58lOaRFj/g7.TPwSBznxhyuyTWXqurPkW/C sa loob ng database

lahat ng yan password_hash($this->input->post('a_pass'), PASSWORD_BCRYPT, $option); ay nilagay natin sa variable na $encrypted so dala nya yung value na password_hash($this->input->post('a_pass'), PASSWORD_BCRYPT, $option); 


*/


 /* 

sa baba makikita nyo $data = array(); <-- ginagamit to pagmaramihang data ang iinsert, update, or reretrieve depende sa need.

sa baba 

'su_user' =>  $this->input->post('a_user'), itong line ng code kinuha mo uli yung value ng attribute name="a_user" mula sa input box dinala mo sa $this->input->post('a_user') tapos iinsert mo sya sa column name na su_user <-- makikita mo to sa database table name 'standardusers', kumbaga hinanay mo yung ilalagay mo na value ng input box duun sa tamang column nya sa database. so ganun din sa iba


 */
  $data = array(
    'su_user' =>  $this->input->post('a_user'),
    'su_userid' => $user_id,// itong part is gumamit  ng variable so may laman yan na iinsert sa database

    'su_pass'=> $encrypt, // always seperate with comma bawat isang codes, si $encrypt yung kanina na may value na password_hash($this->input->post('a_pass'), PASSWORD_BCRYPT, $option); is iinsert na natin sa database sa tama nyang column

    'su_fname' => $this->input->post('a_fname'), // ganun din sa iba
    'su_position' => $this->input->post('a_position') // ganun din sa iba
  );

  /* 
  
  then since si $data = array(); ay pang maramihan pede uli natin ilagay yung nilalaman ng array() sa variable na $data so pinagisa uli

  */

$inserted = $this->db->insert('standardusers', $data); // after kinomvert sa $data variable yung nilalaman ng array() 

/*
 
 itong line of code na  $this->db->insert('standardusers', $data); is gagamitin natin para mainsert yung data, yung db is default para kay codeigniter laging ganyan setup $this->db->
 then kasi pede palitan yung insert depende sa need

 pedeng 
 $this->db->insert('standardusers', $data);
 $this->db->update('standardusers', $data);
 $this->db->delete('standardusers', $data);
 $this->db->get('standardusers', $data);

 so after ng nasa taas  

 $this->db->insert('standardusers', $data); nilagay mo na yung $data as second parameter katabi ng table_name(standardusers) na naglalaman ng columns(su_user,su_pass), ilalagay mo yung value ni $data sa table na yun automatically mapapopulate yan sa respective column nila then si $this->db->insert('standardusers', $data); kinomvert natin uli sa variable inserted para naman malaman kung talaga nainsert sya sa database

*/

 return $inserted; // itong yung variable gamit return, automatic malalaman yun sa VIEW kung may nainsert na sya, dadaan muna sya una sa CONTROLLER then VIEW

}


public function get_users(){

$query = $this->db->get('standardusers');

return $query->result();


}


public function get_users_id($user_id){

$this->db->where('su_id', $user_id);

$query = $this->db->get('standardusers');

return $query->row();


}



public function edit_user_data($user_id){

$this->db->where('su_id', $user_id);

 $option = ['cost' => 12];

$encrypted = password_hash($this->input->post('e_pass'), PASSWORD_BCRYPT, $option);

$data= array(

 'su_user' => $this->input->post('e_user'),
 'su_fname' => $this->input->post('e_fname'),
 'su_position' => $this->input->post('e_position'),   
 'su_pass' => $encrypted

);

$query = $this->db->update('standardusers', $data);

return $query;


}


public function delete_user_data($user_id){

$this->db->where('su_id', $user_id);

$query = $this->db->delete('standardusers');

 
 return $query;

}



public function get_fieldofphysician(){

$query = $this->db->get('fieldsphysician');

return $query->result();


}



public function get_doctor(){

$quer = $this->db->get('physicians');

return $quer->result();

}



public function add_doctor_data($data){

$q = $this->db->insert('physicians', $data);
 
 return $q;

}


public function delete_doctor_data($doctor_id){


$this->db->where('ph_id', $doctor_id);

$query = $this->db->delete('physicians');
 
 return $query;


}













































}


 ?>