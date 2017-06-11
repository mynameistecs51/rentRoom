<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$this->Main();
		$this->load->view('report/index',$this->data);
	}

	public function Main()
	{
		$this->data['header'] = $this->template->getHeader(base_url());
		$this->data['footer'] = $this->template->getFooter(base_url());
	}
}

/* End of file Report.php */
/* Location: ./application/controllers/Report.php */