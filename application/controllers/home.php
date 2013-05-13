<?php if (!defined('BASEPATH')) die();


class Home extends Main_Controller {

   public function index()
	{
			$data['main_content'] = 'index';
      $this->load->view('template', $data);
	}
	
	public function about()
	{
			$data['main_content'] = 'about';
      $this->load->view('template', $data);
	}
	
	public function contact()
	{
	  $data['main_content'] = 'contact';
      $this->load->view('template', $data);     
        
	}
	
	public function add_contact()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'first_name', 'required|max_length[15]|valid_email');
        $this->form_validation->set_rules('last_name', 'last_name', 'required|max_length[15]|valid_email');
        $this->form_validation->set_rules('email', 'email', 'required|max_length[40]|valid_email');
        $this->form_validation->set_rules('subject', 'subject', 'required|max_length[10]|valid_email');
        $this->form_validation->set_rules('message', 'message', 'required|max_length[100]|alpha_numeric');
        
         if($this->form_validation->run() == FALSE)
       {
           $data['main_content'] = 'about';
           $this->load->view('template', $data);
       }
       else
       {
		  $this->alumni_model->add_contact();
		  $this->thank();
       }
	}
	
	public function profile()
	{
			$data['main_content'] = 'profile';
      $this->load->view('template', $data);
	}
	public function profile_expert()
	{
			$data['main_content'] = 'profile_expert';
      $this->load->view('template', $data);
	}
	
	
	public function join_us()
	{
		$data['main_content'] = 'join_us';
      $this->load->view('template', $data);
    }	
    
    public function help()
	{
			$data['main_content'] = 'help';
      $this->load->view('template', $data);
	}
	public function thank()
	{
			$data['main_content'] = 'thank';
      $this->load->view('template', $data);
	}		
	
	
	public function register()
	{

		$this->load->library('form_validation');
         // field name, error message, validation rules
        $this->form_validation->set_rules('email', 'email', 'required|max_length[40]|valid_email');


        if($this->form_validation->run() == FALSE)
       {
           $data['main_content'] = 'contact';
           $this->load->view('template', $data);
       }
       else
       {
          $this->alumni_model->add_mail($this->input->post('email'));
          $data['main_content'] = 'thank';
          $this->load->view('template', $data);
       }
 }
    		
}	
   

?>
