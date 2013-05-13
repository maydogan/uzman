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
		return $row-> is_admin;
	}
	public function validate_password($id, $password)
	{
		$query = $this->db->get_where('users', array('id' => $uid, 'password' => md5($password)));
		return ($query->num_rows == 1) ? TRUE : FALSE;
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
	
	public function add_contact()
	{
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'message' => $this->input->post('message'),
		
             );
       $this->db->insert('contact', $data);
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
	public function update_password($id, $password)
	{
		 
		//~ $this->db->update('users', array('password' => md5($password)), array('id' => $id));
		    $password = md5( $this->_clean($_POST['password']) );
            $data = array(
            'password' => $password
            );        
            $this->db->update('users', $data, array('UserName' => $_POST[UserName]));
} 
	
	
	public function change_password()
        {   

  
        $this->db->where('email',$this->session->userdata('email'));
        $this->db->where('password',$this->input->post('old_password'));
        $this->db->select('id');
        $query = $this->db->get('users');   

        if ($query->num_rows() > 0)
         {
                $row = $query -> row();
                if($row -> id == $this->session->userdata('id'))
                {
                    $data = array(
                      'password' => md5($this->input->post('new_password'))
                     );

                  $this->db->where('email',$this->session->userdata('email'));
                  $this->db->where('password',md5($this->input->post('old_password')));
                       if( $this->db->update('users', $data) ) 
                       {
                       return "Password Changed Successfully";
                       }else{
                        return "Something Went Wrong, Password Not Changed";
                       }
                }else{
                return "Something Went Wrong, Password Not Changed";
                }


         }else{
            return "Wrong Old Password";
         }

        }
}
/* End of file alumni_model.php */
