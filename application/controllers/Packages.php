<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/REST_Controller.php';

class Packages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->model('packages_model');
		$results = $this->packages_model->view();
		// die('<pre>'.print_r($results, true));
		$this->load->view('packages/packages', $results);

	}
	public function add()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->load->model('packages_model');
			$data = $this->packages_model->add($_POST);
			// die('<pre>'.print_r($data, true));
			if(null != $data->getObjectId())
			{
				redirect(base_url()."packages/add?success");
			}
			else
			{
				redirect(base_url()."packages/add?failed");
			}

		}

		$this->load->view('packages/add');

	}
	public function edit($id='')
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->load->model('packages_model');
			$this->packages_model->edit($_POST);
		}
		$this->load->model('packages_model');
		$results = $this->packages_model->get_id($id);
		// die('<pre>'.print_r($results, true));
		$this->load->view('packages/edit', $results);
	}
	public function delete($id='')
	{	
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->load->model('packages_model');
			$this->packages_model->delete($_POST);

			redirect(base_url()."packages?success");
		}
		$this->load->model('packages_model');
		$this->load->view('packages/delete', $this->packages_model->get_id($id));
	}
}

/* End ocibindbyname()f file welcome.php */
/* Location: ./application/controllers/welcome.php */