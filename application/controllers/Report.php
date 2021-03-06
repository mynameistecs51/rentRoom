<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$mounth = (empty($this->input->post('mounth')))?date('m'):$this->input->post('mounth');
		$year =  (empty($this->input->post('year')))?date('Y'):$this->input->post('year');
		$this->data['startDay'] = date('1',strtotime(date('y-m-d')));
		$this->data['lastDay'] = date('t',strtotime(date('y'.'-'.$mounth.'-d')));
		$this->data['mounth'] = $mounth;
		$this->Main();
		$this->load->view('report/index',$this->data);
	}

	public function Main()
	{
		$this->data['header'] = $this->template->getHeader(base_url());
		$this->data['footer'] = $this->template->getFooter(base_url());
		$this->data['getMonth'] = $this->template->getMonth();
		$this->data['getYear'] = $this->template->getYear();
	}
}

/* End of file Report.php */
/* Location: ./application/controllers/Report.php */