<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
		
        $this->load->view('register');
    }
}
	/*public function register()
    {
		sleep(2);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ad', 'Email', 'required|max_length[40]|valid_email');
        $this->form_validation->set_rules('soyad', 'İsim', 'required|max_length[40]|valid_email');
        $this->form_validation->set_rules('fakulte', 'Fakülte', 'required|max_length[20]|alpha_numeric');
        $this->form_validation->set_rules('bolum', 'Bölüm', 'required|max_length[20]|alpha_numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|max_length[20]|alpha_numeric');
		$this->form_validation->set_rules('email2', 'Email2', 'required|max_length[20]|alpha_numeric');
        $this->form_validation->set_rules('pwd', 'Password', 'required|max_length[40]|valid_email');
        $this->form_validation->set_rules('pwd2', 'Password2', 'required|max_length[20]|alpha_numeric');
        $this->form_validation->set_rules('gizli_soru', 'Gizli_soru', 'required|max_length[40]|valid_email');
        $this->form_validation->set_rules('gizli_cevap', 'Gizli_cevap', 'required|max_length[20]|alpha_numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $json = json_encode(array(
                'isSuccessful' => FALSE,
                'message' => "<strong>Registration</strong> failed! Incorrect input."
            ));
            echo $json;
		} else {   
            $ad = $this->input->post('ad');
            $soyad = $this->input->post('soyad');
            $fakulte = $this->input->post('fakulte');
            $bolum = $this->input->post('bolum');
            $email = $this->input->post('email');
            $pwd = $this->input->post('pwd');
            $email = $this->input->post('email');
            $pwd = $this->input->post('pwd');
            $email = $this->input->post('email');
          
            if ($email != $this->input->post('email2')) {
                $message = "<strong>Emails</strong> do not match!";
                $json = json_encode(array(
                    'isSuccessful' => FALSE,
                    'message' => $message
                ));
                echo $json;
            } elseif ($pwd != $this->input->post('pwd2')) {
                $message = "<strong>Passwords</strong> do not match!";
                $json = json_encode(array(
                    'isSuccessful' => FALSE,
                    'message' => $message
                ));
                echo $json;
            } elseif($this->alumni_model->add_user($email,  $pwd)) {
                $message = "<strong>Registration</strong> successful!";
                $json = json_encode(array(
                    'isSuccessful' => TRUE,
                    'message' => $message
                ));
                echo $json;
            } else {
                $message = "<strong>Email</strong> already exists!";
                $json = json_encode(array(
                    'isSuccessful' => FALSE,
                    'message' => $message
                ));
                echo $json;
            }
        }
    }//end sign_up
}*/
/*End of file signup.php*/
	

