<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detail_unit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dokumen_model');
        $this->load->model('Detail_unit_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
       
        $start = intval($this->input->get('start'));       
        $detail_unit = $this->Detail_unit_model->get_limit_data();

       
        $data = array(
            'detail_unit_data' => $detail_unit,    
             
            'button' => 'Create',
            'start' => $start,
            'title' => 'Detail_unit',
            'action' => site_url('detail_unit/create_action'),
	    'id_detail_unit' => set_value('id_detail_unit'),
	    'id_kawasan' => set_value('id_kawasan'),
	    'no_rumah' => set_value('no_rumah'),
	    'luas_tanah' => set_value('luas_tanah'),
	    'luas_bangunan' => set_value('luas_bangunan'),
	    'harga' => set_value('harga'),
	    'tanggal_terjual' => set_value('tanggal_terjual'),
        'get_kawasan' => $this->Detail_unit_model->get_kawasan(),
	);      
       
        $this->template->load('template/body','detail_unit/detail_unit_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Detail_unit_model->get_by_id($id);
        if ($row) {
            $kawasan = $this->Detail_unit_model->get_by_id_kawasan($row->id_kawasan);
            $data = array(
		'id_detail_unit' => $row->id_detail_unit,
		'id_kawasan' => $row->id_kawasan,
        'blok_kawasan' => $kawasan->blok_kawasan,
		'no_rumah' => $row->no_rumah,
		'luas_tanah' => $row->luas_tanah,
		'luas_bangunan' => $row->luas_bangunan,
		'harga' => $row->harga,
		'tanggal_terjual' => $row->tanggal_terjual,
	     'title' => 'Detail_unit',);
            $this->template->load('template/body','detail_unit/detail_unit_read', $data);
        } else {
            $this->session->set_flashdata('notfound', 'ready');
            redirect(site_url('detail_unit'));
        }
    }

    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
		'id_kawasan' => $this->input->post('id_kawasan',TRUE),
		'no_rumah' => $this->input->post('no_rumah',TRUE),
		'luas_tanah' => $this->input->post('luas_tanah',TRUE),
		'luas_bangunan' => $this->input->post('luas_bangunan',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'tanggal_terjual' => $this->input->post('tanggal_terjual',TRUE),
	    );

            $this->Detail_unit_model->insert($data);
            $this->session->set_flashdata('create', 'ready');
            redirect(site_url('detail_unit'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Detail_unit_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Edit',
                 'title' => 'Detail_unit',
                'action' => site_url('detail_unit/update_action'),
		'id_detail_unit' => set_value('id_detail_unit', $row->id_detail_unit),
		'id_kawasan' => set_value('id_kawasan', $row->id_kawasan),
		'no_rumah' => set_value('no_rumah', $row->no_rumah),
		'luas_tanah' => set_value('luas_tanah', $row->luas_tanah),
		'luas_bangunan' => set_value('luas_bangunan', $row->luas_bangunan),
		'harga' => set_value('harga', $row->harga),
		'tanggal_terjual' => set_value('tanggal_terjual', $row->tanggal_terjual),
        'get_kawasan' => $this->Detail_unit_model->get_kawasan(),
	    );
            $this->template->load('template/body','detail_unit/detail_unit_edit', $data);
        } else {
            $this->session->set_flashdata('notfound', 'ready');
            redirect(site_url('detail_unit'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_detail_unit', TRUE));
        } else {
            $data = array(
		'id_kawasan' => $this->input->post('id_kawasan',TRUE),
		'no_rumah' => $this->input->post('no_rumah',TRUE),
		'luas_tanah' => $this->input->post('luas_tanah',TRUE),
		'luas_bangunan' => $this->input->post('luas_bangunan',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'tanggal_terjual' => $this->input->post('tanggal_terjual',TRUE),
	    );

            $this->Detail_unit_model->update($this->input->post('id_detail_unit', TRUE), $data);
            $this->session->set_flashdata('update', 'ready');
            redirect(site_url('detail_unit'));
        }
    }
     function live_update()
    {
        $data = array(
            $this->input->post('table_column')  =>  $this->input->post('value')
        );

        $this->Detail_unit_model->update($this->input->post('id'),$data);
    }
    public function delete($id) 
    {
        $row = $this->Detail_unit_model->get_by_id($id);

        if ($row) {
             $this->Dokumen_model->delfile($id);
            $this->Detail_unit_model->delete($id);
            $this->session->set_flashdata('delete', 'ready');
            redirect(site_url('detail_unit'));
        } else {
            $this->session->set_flashdata('notfound', 'ready');
            redirect(site_url('detail_unit'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_kawasan', 'id kawasan', 'trim|required');
	$this->form_validation->set_rules('no_rumah', 'no rumah', 'trim|required');
	$this->form_validation->set_rules('luas_tanah', 'luas tanah', 'trim|required');
	$this->form_validation->set_rules('luas_bangunan', 'luas bangunan', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required');
	$this->form_validation->set_rules('tanggal_terjual', 'tanggal terjual', 'trim|required');

	$this->form_validation->set_rules('id_detail_unit', 'id_detail_unit', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Detail_unit.php */
/* Location: ./application/controllers/Detail_unit.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-01-24 06:51:59 */
/* http://harviacode.com */