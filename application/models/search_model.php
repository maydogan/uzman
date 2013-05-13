<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class search_model Extends CI_Model  
{  
   
    function __construct()  
    {  
        parent::__construct();  
        $this->load->database();  
    }  
  
    function get_result_expert($name)  
    {  
     
        $name = $this->db->escape_str($name);             
        $this->db->select('name');  
        $this->db->from('users');  
        $this->db->like('name',$name);    
        return $this->db->get()->result();  
    }  

    function get_result_professions($key_word)  
    {  
     
        $name = $this->db->escape_str($key_word);             
        $this->db->select('key_word');  
        $this->db->from('professions');  
        $this->db->like('key_word',$key_word);    
        return $this->db->get()->result();  
    } 
}  

?>
