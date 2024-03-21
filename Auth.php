<?php
class Auth extends CI_Controller {
    public function register() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First_name','required');
        $this->form_validation->set_rules('last_name','Last_name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() == false){
            $this->load->view('register');
            $this->form_validation->set_message('is_unique','Email address already exits, please try another');
        } else {
            // Load the Auth_model
            $this->load->model('Auth_model');
            $formArray = array();
            $formArray['first_name'] = $this->input->post('first_name');
            $formArray['last_name'] = $this->input->post('last_name');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
            $formArray['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            $formArray['created_at'] = date('Y-m-d H:i:s'); 

            // Call the create method from Auth_model
            $this->Auth_model->create($formArray);

            $this->session->set_flashdata('msg', 'Your account has been created successfully.');
            redirect(base_url() . 'index.php/Auth/register');
        }
    }

    public function login(){
         $this->load->library('form_validation');
         $this->form_validation->set_rules('email','Email','required|valid_email');
         $this->form_validation->set_rules('password','Password','required');

         if  ($this->form_validation->run() == true){
            // Load the Auth_model
            $this->load->model('Auth_model');
            $email = $this->input->post('email');
            
            // Call the checkUser method from Auth_model
            $user = $this->Auth_model->checkUser($email);

            if (!empty($user)) {
                $password = $this->input->post('password');
                if (password_verify($password,$user['password']) == true){
                    $sessArray['id']=$user['id'];
                    $sessArray['first_name']=$user['first_name'];
                    $sessArray['last_name']=$user['last_name'];
                    $sessArray['email']=$user['email'];
                    $this->session->set_userdata('user',$sessArray);

                    redirect(base_url().'index.php/auth/dashboard');

                }else{
                     $this->session->set_flashdata('msg','Either email or password is incorrect,please try again. ');
                     redirect(base_url().'index.php/auth/login');
                }
            }
         } else {
            $this->load->view('login');
         }
    }

    function dashboard() {
        $user = $this->session->userdata('user');
        $data['user'] = $user;

        // Pass $data to the view
        $this->load->view('dashboard', $data);
    }

    function logout() {
        $this->session->unset_userdata('user');
        redirect(base_url().'index.php/auth/login');
    }
}
?>
