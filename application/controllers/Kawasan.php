<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kawasan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kawasan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
       
        $start = intval($this->input->get('start'));       
        $kawasan = $this->Kawasan_model->get_limit_data();

       
        $data = array(
            'kawasan_data' => $kawasan,    
             
            'button' => 'Create',
            'start' => $start,
            'title' => 'Kawasan',
            'action' => site_url('kawasan/create_action'),
	    'id_kawasan' => set_value('id_kawasan'),
	    'luas_kawasan' => set_value('luas_kawasan'),
	    'negara' => set_value('negara'),
	    'provinsi' => set_value('provinsi'),
	    'kota' => set_value('kota'),
	    'kecamatan' => set_value('kecamatan'),
	    'maps' => set_value('maps'),
	    'blok_kawasan' => set_value('blok_kawasan'),
	);      
       
        $this->template->load('template/body','kawasan/kawasan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kawasan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kawasan' => $row->id_kawasan,
		'luas_kawasan' => $row->luas_kawasan,
		'negara' => $row->negara,
		'provinsi' => $row->provinsi,
		'kota' => $row->kota,
		'kecamatan' => $row->kecamatan,
		'maps' => $row->maps,
		'blok_kawasan' => $row->blok_kawasan,
	     'title' => 'Kawasan',);
            $this->template->load('template/body','kawasan/kawasan_read', $data);
        } else {
            $this->session->set_flashdata('notfound', 'ready');
            redirect(site_url('kawasan'));
        }
    }

    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
		'luas_kawasan' => $this->input->post('luas_kawasan',TRUE),
		'negara' => $this->input->post('negara',TRUE),
		'provinsi' => $this->input->post('provinsi',TRUE),
		'kota' => $this->input->post('kota',TRUE),
		'kecamatan' => $this->input->post('kecamatan',TRUE),
		'maps' => $this->input->post('maps',TRUE),
		'blok_kawasan' => $this->input->post('blok_kawasan',TRUE),
	    );

            $this->Kawasan_model->insert($data);
            $this->session->set_flashdata('create', 'ready');
            redirect(site_url('kawasan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kawasan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Edit',
                 'title' => 'Kawasan',
                'action' => site_url('kawasan/update_action'),
		'id_kawasan' => set_value('id_kawasan', $row->id_kawasan),
		'luas_kawasan' => set_value('luas_kawasan', $row->luas_kawasan),
		'negara' => set_value('negara', $row->negara),
		'provinsi' => set_value('provinsi', $row->provinsi),
		'kota' => set_value('kota', $row->kota),
		'kecamatan' => set_value('kecamatan', $row->kecamatan),
		'maps' => set_value('maps', $row->maps),
		'blok_kawasan' => set_value('blok_kawasan', $row->blok_kawasan),
	    );
            $this->template->load('template/body','kawasan/kawasan_edit', $data);
        } else {
            $this->session->set_flashdata('notfound', 'ready');
            redirect(site_url('kawasan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kawasan', TRUE));
        } else {
            $data = array(
		'luas_kawasan' => $this->input->post('luas_kawasan',TRUE),
		'negara' => $this->input->post('negara',TRUE),
		'provinsi' => $this->input->post('provinsi',TRUE),
		'kota' => $this->input->post('kota',TRUE),
		'kecamatan' => $this->input->post('kecamatan',TRUE),
		'maps' => $this->input->post('maps',TRUE),
		'blok_kawasan' => $this->input->post('blok_kawasan',TRUE),
	    );

            $this->Kawasan_model->update($this->input->post('id_kawasan', TRUE), $data);
            $this->session->set_flashdata('update', 'ready');
            redirect(site_url('kawasan'));
        }
    }
     function live_update()
    {
        $data = array(
            $this->input->post('table_column')  =>  $this->input->post('value')
        );

        $this->Kawasan_model->update($this->input->post('id'),$data);
    }
    public function delete($id) 
    {
        $row = $this->Kawasan_model->get_by_id($id);

        if ($row) {
            $this->Kawasan_model->delete($id);
            $this->session->set_flashdata('delete', 'ready');
            redirect(site_url('kawasan'));
        } else {
            $this->session->set_flashdata('notfound', 'ready');
            redirect(site_url('kawasan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('luas_kawasan', 'luas kawasan', 'trim|required');
	$this->form_validation->set_rules('negara', 'negara', 'trim|required');
	$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
	$this->form_validation->set_rules('kota', 'kota', 'trim|required');
	$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
	$this->form_validation->set_rules('maps', 'maps', 'trim|required');
	$this->form_validation->set_rules('blok_kawasan', 'blok kawasan', 'trim|required');

	$this->form_validation->set_rules('id_kawasan', 'id_kawasan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kawasan.php */
/* Location: ./application/controllers/Kawasan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-01-24 06:51:56 */
/* http://harviacode.com */