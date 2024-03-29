<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kawasan_model extends CI_Model
{

    public $table = 'kawasan';
    public $id = 'id_kawasan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
 
    // get data with limit and search
    function get_limit_data() {
        $this->db->order_by($this->id, $this->order);
        
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Kawasan_model.php */
/* Location: ./application/models/Kawasan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-01-24 06:51:56 */
/* http://harviacode.com */