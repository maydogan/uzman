<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class search_model Extends CI_Model  
{  
   
    function __construct()  
    {  
        parent::__construct();  
        $this->load->database();  
    }  
  
    function get_result($name)  
    {  
     
        $name = $this->db->escape_str($name);             
        $this->db->select('name');  
        $this->db->from('users');  
        $this->db->like('name',$name);    
        return $this->db->get()->result();  
    }  
}  

?>

