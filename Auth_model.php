<?php
class Auth_model extends CI_Model {
    public function create($formArray) {
        $this->db->insert('users', $formArray);
    }

    public function checkUser($email) {
        $this->db->where('email', $email);
        return $this->db->get('users')->row_array();
    }
}
?>
