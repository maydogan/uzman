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
    	$a_kategori=$_POST['kategori'];
        
 
       if($a_kategori=='Uzman'){

	$name = $this->input->post('kelime',TRUE); 
        if(empty($name))  
        {  
     
            $data['main_content'] = 'pages/hata_view'; 
            $this->load->view('template', $data);
            
        }  
        else  
        {  
         
            $this->load->model('search_model');    
            $data['results_expert'] = $this->search_model->get_result_expert($name);  
            $data['main_content'] = 'search_expert'; 
            $this->load->view('template', $data);            
        }  
      }

      if($a_kategori=='Alan'){

	$key_word = $this->input->post('kelime',TRUE); 
        if(empty($key_word))  
        {  
     
            $data['main_content'] = 'pages/hata_view'; 
            $this->load->view('template', $data);
            
        }  
        else  
        {  
         
            $this->load->model('search_model');    
            $data['results_professions'] = $this->search_model->get_result_professions($key_word);  
            $data['main_content'] = 'search_expert'; 
            $this->load->view('template', $data);            
        }  
}
    }

}
?>
