<?php
class Model_user extends CI_Model{
    
    function chek_Login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',($password));
        $user = $this->db->get('user')->row_array();
        return $user;
    }
 
    
} 
