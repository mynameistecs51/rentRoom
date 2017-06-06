<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{

	}

	public function Main()
	{
		$this->data['header'] = $this->template->getHeader(base_url());
		$this->data['footer'] = $this->template->getFooter(base_url());
	}

	public function CreateTypeRoom()
	{
		$this->Main();
		$this->load->view('management/CreateTyperoom',$this->data);
	}

}

/* End of file Management.php */
/* Location: ./application/controllers/Management.php */