<?php 

// Notes, Explanation, Concepts

/*  CodeIgniter is an open-source software rapid development web framework, for use in building dynamic web sites with PHP Programming Language

si Codeigniter nahahati sa tatlong parts  VIEW - CONTROLLER - MODEL

VIEW - dito yung codes para sa user interface, kung anu yung nakikita ng tao sa screen

CONTROLLER - ito yung kumbaga middleman ng VIEW and MODEL sya yung may codes para sa validation, pagdala ng data from database to user interface, pagload ng view from folder, etc.

MODEL - dito yung codes para sa pagcommunicate sa database, queries to kumpano kukunin yung data sa bawat tables sa loob ng mysql database. (ex. queries SELECT * FROM, sa codeigniter iba ang style ng code pero same ng ginagawa

$this->db->select(* or column_name);
$this->db->from('table_name');

)

*/


/* First of all
 always lalagyan ng .php yung file nyo sample customname.php para maintindihan ni computer yung filetype nya
 
 then sa loob ng file na .php

 declare yung php tag <?php ?>

example:
<?php
 then sa loob neto always

example:
class Filename extends CI_Controller { <--declare this line of code

example:                                    
public function methodname(){  <-- declare function then sa loob neto is yung mga codes na bubuuin 

 write all codes here  

}                                  


}

?> lahat ng codes sa taas is typical setup ni codeigniter ganyan ang style ng coding nya

*/


// MOVE ON

/* ditong part is pagdeclare netong file na Addusercontrol.php as part ng codeigniter framework para gumana yung codes ng codeignter, always Capital after ng class Addusercontrol then extends CI_Controller {
  
   write all codes here
}
*/
class Addusercontrol extends CI_Controller { // itong controller is umiikot sa user accounts, lahat ng scripts para sa add, edit, view, delete ng user accounts including communcation sa database and user interface is nandito


// public function - pangdeclare pero sa method naman, method is yung adduserview(custom yan, any name pede) 

/* si adduserview na method is siniset sa VIEW, pede din dito sa CONTROLLER, ginagamit si method sa
paglipat ng page, pede din script para sa pagprocess ng sinubmit na input value, makikita yung pagbabago  sa URL: localhost/patientrecords/addusercontrol/adduserview 
*/  
public function adduserview() { // itong method is para sa pagopen ng page kung san makikita yung users page (wag kakalimutan yung {  } jan makikita kung hanggang saan yung codes para sa method, method is adduserview)


$data['get_user'] = $this->Addusers_model->get_users(); // complete script setup, get data from Addusers_model

/*
$data - codeigniter variable declaration kung san nilalagay lahat ng data sa loob ng variable

(Note: si php kapag nagdedeclare ng variable gumagamit ng dollar sign($) example: $variable kahit anung name pede jan, basta una may $ then custom name nyo)

['get_users'] - yung get_users is coconvert as variable $get_users pede yan kahit anung name, gagamitin natin yan sa loob ng VIEW as variable para makapagpasa tayo ng data n kinuha ni CONTROLLER sa MODEL

$this->Addusers_model->get_users(); - itong script ay pagkuha ng data from MODEL which is naglalaman ng queries para makakuha ng data from mysql database

$this - default na single script na ginagamit ni codeigniter pagdeclare 

-> - ito ay connection lagi tong kasama ni $this->

Addusers_model - is custom file name kung san tinatawag ni $this-> yung name ng file sa MODEL folder which is Addusers_model.php

->get_users(); - is method naman sa loob ng MODEL any name declaration, kadalasan public function get_users(), ang CONTROLLER at MODEL ay laging may public function then method name, open nyo n lng yung file na Adduser_model.php tapos hanapin nyo yung public function get_users(){ } 

laging setup sa part ng [''] <-- dapat may '' sa loob para magwork then every line of code may semicolon ;

$data['get_user'] = $this->Addusers_model->get_users(); <-- line of code 

*/


$data['title'] = 'Add Users'; /* dito naman yung nasa loob ng $data['title'] = 'Add Users' 
si ['title'] is equal to Add Users name, gagamitin mo yung varible title as $title kung san sya ay naglalaman ng value na Add Users, sesend mo yan sa loob ng VIEW, nakaset yan sa may <title> <?php echo $title; ?> </title> open nyo lng yung file na central_template.php then sa pinakataas n part, nilagyan mo yung title bar ng browser as Add Users
*/

$data['topbar'] = 'standardusers/addusernavbar'; /* same setup din dito, itong sample naman is referring to standardusers which is folder name then addusernavbar is yung file name yung may .php */

/*
 nilalagyan natin yung ['topbar'] n gagawin nating variable $topbar sa loob ng VIEW, ito ay naglalaman ng scripts para sa pagbuo ng navigation bar, kukunin natin yan sa foldername standardusers / 
 file name(custom name or any name) addusernavbar is the name of file then semicolon ; sa ganitong setup kahit wala ng .php sa dulo ng filename

*/

 // magkaiba ang $data['customname'] = 'Add Users';  at  $data['topbar'] = 'standardusers/addusernavbar';

 // si $data['customname'] = 'Add Users'; ay may value na Add Users, normal words lng sya hindi sya kinuha sa folder/filename iba yan

 // $data['topbar'] = 'standardusers/addusernavbar'; ito yung may kinuha na scripts sa foldername then filename 

$data['addform'] = 'standardusers/add_user_form'; /* same setup again ito refers naman sa pagkuha ng 

scripts para sa form */

$data['main_view'] = "standardusers/add_user_view"; /* same setup again ito refers naman sa pagkuha ng 

scripts para sa isang bahagi ng website */

$this->load->view('layouts/central_template', $data); /* 

$this->load->view - ito yung default declaration para maipakita yung at maipasa yung data sa VIEW

('layouts/central_template', $data); - kadugtong ng sa taas yung layouts is foldername then central_template is file name naman along with (comma ,) si comma gagamitin para maidagdag yung variable gaya nung sa taas $data then semicolon ('layouts/central_template', $data) ; <--

$this->load->view('layouts/central_template', $data); itong fix script kadalasan ginagamit sa pagview at pagpasa ng data, kung mapapansin nyo yung maraming $data['addform'] $data['main_view']

isipin nyo na lng si $data may dalang ibat ibang ['customname'] gagamitin na variable para maipasa sa VIEW
$data <-- default variable yan ni codeigniter

example:

$data['addform'] = 'standardusers/add_user_form'; 

$data['main_view'] = "standardusers/add_user_view"; 

si $data pinagisa nya n lahat yan, (dapat laging pareho or dapat same variables para magwork which is $data)

$this->load->view('layouts/central_template', $data); <-- dito mo sya ilalagay na part laging sa huli 

si $data ipapasa nya yung mga dala nya sa 'layouts/central_template' then open nyo na lng yung central_template.php  sa bandang baba hanapin nyo yung topbar at main_view n variables

*/


}



public function add_user(){

$this->form_validation->set_rules('a_user', 'Username', 'trim|required|is_unique[standardusers.su_user]', array('is_unique'=>'Username already exist!'));
$this->form_validation->set_rules('a_pass', 'Password', 'trim|required|min_length[9]');
$this->form_validation->set_rules('a_fname', 'Firstname', 'trim|required|alpha');
$this->form_validation->set_rules('a_position', 'Position', 'trim|required', array('required'=>'Please select position'));

if($this->form_validation->run() == FALSE){

$data['get_user'] = $this->Addusers_model->get_users();

$data['title'] = 'Add Users';
$data['topbar'] = 'standardusers/addusernavbar';
$data['addform'] = 'standardusers/add_user_form';
$data['main_view'] = "standardusers/add_user_view";

$this->load->view('layouts/central_template', $data);


} else {

    $user_id = $this->session->userdata('u_id');

   if($this->Addusers_model->add_user($user_id)){

   	$data['get_user'] = $this->Addusers_model->get_users();

      $data['title'] = 'Add Users';
      $data['topbar'] = 'standardusers/addusernavbar';
      $data['addform'] = 'standardusers/add_user_form';
      $data['main_view'] = "standardusers/add_user_view";
  
      $this->session->set_flashdata('add_user', 'User Added');
      $this->load->view('layouts/central_template', $data);


   }

}


}



public function edit_user($user_id){

$this->form_validation->set_rules('e_user', 'Username', 'trim|required');
$this->form_validation->set_rules('e_pass', 'Password', 'trim|required|min_length[9]');
$this->form_validation->set_rules('e_fname', 'Firstname', 'trim|required|alpha');
$this->form_validation->set_rules('e_position', 'Position', 'trim|required', array('required'=>'Please select position'));

if($this->form_validation->run() == FALSE){


$data['get_user_id'] = $this->Addusers_model->get_users_id(
	$user_id);

$data['title'] = 'Edit Users';
$data['topbar'] = 'standardusers/addusernavbar';
$data['editform'] = 'standardusers/edit_user_form';
$data['main_view'] = "standardusers/edit_user_view";

$this->load->view('layouts/central_template', $data);


} else {



   if($this->Addusers_model->edit_user_data($user_id)){

   	$data['get_user_id'] = $this->Addusers_model->get_users_id($user_id);

      $data['title'] = 'Edit Users';
      $data['topbar'] = 'standardusers/addusernavbar';
      $data['editform'] = 'standardusers/edit_user_form';
      $data['main_view'] = "standardusers/edit_user_view";
  
      $this->session->set_flashdata('edit_user', 'User Updated');
      redirect('addusercontrol/adduserview', $data);


   }

}


}



public function delete_user($user_id){
 

 if($this->Addusers_model->delete_user_data($user_id)){

	$data['get_user_id'] = $this->Addusers_model->get_users_id($user_id);

      $data['title'] = 'Edit Users';
      $data['topbar'] = 'standardusers/addusernavbar';
      $data['main_view'] = "standardusers/edit_user_view";
  
      $this->session->set_flashdata('delete_user', 'User Deleted');
      redirect('addusercontrol/adduserview', $data);



 }



}



public function adddoctorview(){

 $data['get_field'] = $this->Addusers_model->get_fieldofphysician();
 $data['get_doctor'] = $this->Addusers_model->get_doctor();

 $data['title'] = 'Add Doctor';
 $data['adddoc'] = 'standardusers/add_doctor_form';
 $data['topbar'] = 'standardusers/addusernavbar';
$data['main_view'] = 'standardusers/add_doctor_view';

$this->load->view('layouts/central_template', $data);


}



public function add_doctor(){

$this->form_validation->set_rules('a_fname', 'Firstname', 'trim|required|alpha');
$this->form_validation->set_rules('a_lname', 'Lastname', 'trim|required|alpha');
$this->form_validation->set_rules('a_position', 'Position', 'trim|required', array('required' => 'Please choose position of doctor'));

if($this->form_validation->run() == FALSE){
 
  $data['get_field'] = $this->Addusers_model->get_fieldofphysician();
 $data['get_doctor'] = $this->Addusers_model->get_doctor();
 $data['title'] = 'Add Doctor';
 $data['adddoc'] = 'standardusers/add_doctor_form';
 $data['topbar'] = 'standardusers/addusernavbar';
$data['main_view'] = 'standardusers/add_doctor_view';

$this->load->view('layouts/central_template', $data);


} else {
  
 $fname = $this->input->post('a_fname');
 $lname = $this->input->post('a_lname');

$data = array(
 
 'ph_name' => $fname.'.'.$lname,
 'ph_fieldofphysician' => $this->input->post('a_position')

);
   
if($this->Addusers_model->add_doctor_data($data)){
 

   $data['get_user_id'] = $this->Addusers_model->get_users_id($user_id);
   $data['get_field'] = $this->Addusers_model->get_fieldofphysician();
   $data['get_doctor'] = $this->Addusers_model->get_doctor();
     $data['title'] = 'Add Doctor';
     $data['adddoc'] = 'standardusers/add_doctor_form';
      $data['topbar'] = 'standardusers/addusernavbar';
      $data['main_view'] = "standardusers/add_doctor_view";
  
      $this->session->set_flashdata('add_doctor', 'Physician Added');
      redirect('addusercontrol/adddoctorview', $data);


    }

  }



}




public function delete_doctor($doctor_id){
 

 if($this->Addusers_model->delete_doctor_data($doctor_id)){

  $data['get_field'] = $this->Addusers_model->get_fieldofphysician();
 $data['get_doctor'] = $this->Addusers_model->get_doctor();
 $data['title'] = 'Delete Doctor';
 $data['adddoc'] = 'standardusers/add_doctor_form';
 $data['topbar'] = 'standardusers/addusernavbar';
$data['main_view'] = 'standardusers/add_doctor_view';

 $this->session->set_flashdata('delete_doctor', 'Physician Deleted');
$this->load->view('layouts/central_template', $data);


 }



}






















































}




 ?>