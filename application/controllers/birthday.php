<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Birthday extends CI_Controller
{
	public function __construct()
{
	parent ::__construct();
}
	public function index()
{
	
	//
	
	//de calendar object wordt geladen 
	$this->load->model('birthday_model');
	$data['birthdays'] = $this->birthday_model->get_birthdays();
	$this->load->view('birthday/birthdays', $data);
		
	
	
	}
public function Create()
{	
	//de calendar wordt geladen 
	$this->load->view('adnamen');
	//
	$this->load->model('birthday_model');
		
		
		
}
public function add_user()
	{
		// de codes hieronder zorgen ervoor dat de gegevens firstname, day, month en year worden opgeslagen in de database.	
        
        $firstname = $this->input->post('person');
		$lastname = $this->input->post('day');
		$date = $this->input->post('month');
		$year = $this->input->post('year');
		
		$data = array('person'=>$firstname,'day'=>$lastname,'month'=>$date,'year'=>$year);
		//
		
		$this->load->model('birthday_model');
		
		//als je de firstname en lastname invult zijn de gegevens opgeslagen in de database.
		if($this->birthday_model->add($data))
		{
			echo "Data Insert Successfully";
		}
		else 
		{
			echo "Data Not Inserted";
		}
		
		redirect('Birthday');
	}
// de function 
public function delete(){
	

		$this->load->model('birthday_model');
		$id = $this->input->get('id');
	
	
	if($this->birthday_model->deleteuser($id))
	
	
	{
		$data['birthdays'] = $this->birthday_model->get_birthdays();
		//maybe s
		$this->load->view('birthday/birthdays',$data);
	}
	redirect('Birthday');

}
public function get_user(){
		
		
		$this->load->model('birthday_model'); 
		//maybe s
		$data['birthday'] = $this->HomeModel->getuser();
		$this->load->view('birthday/birthdays', $data);
		redirect('Birthday');
}

public function Edit($id){
	$this->load->model('birthday_model');
	$data['person'] = $this->birthday_model->getuserbyid($id)[0];
	$this->load->view('edit',$data);
//
}
public function updateuser(){
		

		$firstname = $this->input->post('person');
		$lastname = $this->input->post('day');
		$date = $this->input->post('month');
		$year = $this->input->post('year');
		$id = $this->input->post('eid');
	
		$data = array('person'=>$firstname ,'day'=>$lastname ,'month'=>$date ,'year'=>$year);
	 
		$this->load->model('birthday_model');
	

	if($this->birthday_model->updateuserbyid($data,$id))
	

	{
		//maybe s
		$data['birthdays'] = $this->birthday_model->getuser();
		$this->load->view('birthday/birthdays', $data);
	}
	} 
}

?>