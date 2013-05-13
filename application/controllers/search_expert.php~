<?php 
Class Search_expert Extends CI_Controller  
{  
 
    public function __construct()  
    {  
        parent::__construct();  
    }  
       
   public function index()
	{
			$data['main_content'] = '';
      $this->load->view('template', $data);
	}
	
    
    public function result()  
    {  
    
        $name = $this->input->post('name',TRUE);  
       
        if(empty($name))  
        {  
     
            $data['main_content'] = 'pages/hata_view'; 
            $this->load->view('template', $data);
            
        }  
        else  
        {  
         
            $this->load->model('search_model');    
            $data['results'] = $this->search_model->get_result($name);  
            $data['main_content'] = 'search_expert'; 
            $this->load->view('template', $data);            
        }  
    }  
}
?>      
