<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumni_model extends CI_Model 
{
	public function is_user($email, $password)
	{
		$query = $this->db->get_where('users', array('email' => $email, 'password' => $password));
		return ($query->num_rows == 1) ? TRUE : FALSE;
	}
	public function get_username($email, $password)
	{
		$row = $this->db->get_where('users', array('email' => $email, 'password' => $password))->row();
		return $row->first_name;
	}	
	public function get_uid($email)
	{
		$row = $this->db->get_where('users', array('email' => $email))->row();
		return $row->id;
	}
	
	public function get_user_type($email)
	{
		$row = $this->db->get_where('users', array('email' => $email))-> row();
		return $row-> user_type;
	}
	public function validate_password($id, $password)
	{
		$query = $this->db->get_where('users', array('id' => $uid, 'password' => md5($password)));
		return ($query->num_rows == 1) ? TRUE : FALSE;
	}
	
	public function update_password($id, $password)
	{
		$this->db->update('users', array('password' => md5($password)), array('id' => $uid));
	}

	public function get_users()
	{
		$users = $this->db->order_by('id')->get('users')->result_array();
	 	return $users;
	}
	
	public function add_mail($email)
	{
		$query = $this->db->get_where('mails', array('email' => $email));
		if($query->num_rows == 1){
			return FALSE;
		}
		
		$this->db->insert('mails', array('email' => $email)); 
		return TRUE;
	}
	
	public function delete_user($email)
	{
		$uid = $this->db->get_where('users', array('email' => $email))->row()->uid;
		$this->db->delete('contacts', array('id' => $uid));
		
		$this->db->delete('users', array('email' => $email));
	}
	
	public function update_user($email, $password)
	{
		$this->db->update('users', array('password' => md5($password)), array('email' => $email));
	}
	
	public function get_dropdown() 
	{
		$result = $this->db->select('id, key_word')->get('professions')->result_array();
		$dropdown = array();	
		foreach($result as $r) 
		{
		    $dropdown[$r['id']] = $r['key_word'];
	    }
    return $dropdown;
    }
}
/* End of file alumni_model.php */
