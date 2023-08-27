<?php
defined('BASEPATH') OR exit('NO direct script access allowed.');

class User_model extends CI_Model
{
    function create($formArray)
    {
        $this->db->insert('users',$formArray);
    }
    function all()
    {   
        $users=$this->db->get('users')->result_array();
        return $users;
    }
    function getUser($userId)
    {
        $this->db->select('*');
        $this->db->where('user_id', $userId);
        $q = $this->db->get('users');
        $result = $q->result_array();
        return $result;
    }
    function updateUser($userId,$formArray)
    {   
        $this->db->where('user_id',$userId);
        $this->db->update('users',$formArray);
    }
    function deleteUser($userId)
    {
        $this->db->where('user_id',$userId);
        $this->db->delete('users');
    }
}
?>