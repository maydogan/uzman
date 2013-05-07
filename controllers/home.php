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
	
	public function mezun()
	{
			$data['main_content'] = 'mezun';
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
     
     public function dropdown()  
     {
		$this->load->model('alumni_model');
		$data['dropdown'] = $this->alumni_model->get_dropdown();
		$this->load->view('index', $data);
	 }

    		
}	
   

?>
