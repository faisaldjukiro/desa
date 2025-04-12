<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$title = $this->db->query("SELECT nama FROM master WHERE id_master = 1")->row();
        $this->load->vars(['desa' => $title]);
	}
	public function index()
	{

		$this->load->view('admin/beranda');
	}
}