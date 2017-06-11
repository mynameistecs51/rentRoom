<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckOut extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->ctl = 'CheckOut';

	}

	public function index()
	{
		$this->Main();
		$this->load->view('CheckOut/index',$this->data);
	}

	public function Main()
	{
		$this->data['header'] = $this->template->getHeader(base_url());
		$this->data['footer'] = $this->template->getFooter(base_url());
	}

}

/* End of file CheckOut.php */
/* Location: ./application/controllers/CheckOut.php */