<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/REST_Controller.php';

class Graphs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("graphs_model");
	}
	public function index()
	{

	}

	public function size()
	{
		$this->load->view("graphs/size");
	}

	public function time()
	{
		$this->load->view("graphs/time");
	}

	public function delete($id)
	{

	}
}