<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckInout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->data['startDay'] = date('1',strtotime(date('y-m-d')));
		$this->data['lastDay'] = date('t',strtotime(date('y-m-d')));
		$this->Main();
		$this->load->view('checkInOut/index',$this->data);
	}

	public function Main()
	{
		$this->data['header'] = $this->template->getHeader(base_url());
		$this->data['footer'] = $this->template->getFooter(base_url());
	}

}

/* End of file CheckInout.php */
/* Location: ./application/controllers/CheckInout.php */