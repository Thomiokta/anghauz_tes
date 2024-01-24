<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detail_unit_model extends CI_Model
{

    public $table = 'detail_unit';
    public $id = 'id_detail_unit';
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
    function get_kawasan()
    {
        return $this->db->get('kawasan')->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    function get_by_id_kawasan($id)
    {
        $this->db->where('id_kawasan', $id);
        return $this->db->get('kawasan')->row();
    }
    
 
    // get data with limit and search
    function get_limit_data() {
        $this->db->order_by($this->id, $this->order);
        $this->db->select('kawasan.*,detail_unit.*');
        $this->db->join('kawasan' , 'kawasan.id_kawasan = detail_unit.id_kawasan' , 'Left');
        return $this->db->get($this->table)->result();
    }
    function tgl_ind($date){ 
    // array hari dan bulan 
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"); $Bulan = array("Januari","Februari","Maret","April","Mei","Juni", "Juli","Agustus","September","Oktober","November","Desember"); 
    // pemisahan tahun, bulan, hari, dan waktu 
    $tahun = substr($date,0,4); $bulan = substr($date,5,2); $tgl = substr($date,8,2); $waktu = substr($date,11,5); $hari = date("w",strtotime($date)); $result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;
     return $result; }
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

/* End of file Detail_unit_model.php */
/* Location: ./application/models/Detail_unit_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-01-24 06:51:59 */
/* http://harviacode.com */