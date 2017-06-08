<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckInout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
		$this->dt_now = $now->format('Y-m-d H:i:s');
		$this->datenow = $now->format('d/m/').($now->format('Y')+543);
	}

	public function index()
	{
		$mounth = (empty($this->input->post('mounth')))?date('m'):$this->input->post('mounth');
		$year =  (empty($this->input->post('year')))?date('Y'):$this->input->post('year');
		$this->data['startDay'] = date('1',strtotime(date('y-m-d')));
		$this->data['lastDay'] = date('t',strtotime(date('y'.'-'.$mounth.'-d')));
		$this->data['mounth'] = $mounth;
		$this->Main();
		$this->load->view('checkInOut/index',$this->data);
	}

	public function Main()
	{
		$this->data['header'] = $this->template->getHeader(base_url());
		$this->data['footer'] = $this->template->getFooter(base_url());
		$this->data['getMonth'] = $this->template->getMonth();
		$this->data['getYear'] = $this->template->getYear();
	}

	public function checkIn()
	{
		$this->Main();
		$this->load->view('checkInOut/Checkin',$this->data);
	}

}

/* End of file CheckInout.php */
/* Location: ./application/controllers/CheckInout.php */