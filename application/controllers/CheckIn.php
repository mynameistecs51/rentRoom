<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckIn extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->ctl = 'CheckIn';
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
		$this->load->view('checkIn/index',$this->data);
	}

	public function Main()
	{
		$this->data['header'] = $this->template->getHeader(base_url());
		$this->data['footer'] = $this->template->getFooter(base_url());
		$this->data['getMonth'] = $this->template->getMonth();
		$this->data['getYear'] = $this->template->getYear();
		$this->data['form_CheckIn'] = base_url().'index.php/'.$this->ctl.'/form_CheckIn/';
		$this->data['form_CheckOut'] = base_url().'index.php/'.$this->ctl.'/form_CheckOut/';
		$this->data['form_Booking'] = base_url().'index.php/'.$this->ctl.'/form_Booking/';
	}

	public function form_CheckIn()
	{

		$this->Main();
		$this->load->view('checkIn/Checkin',$this->data);
	}

	public function saveCheckIn()
	{
		echo "<pre>";
		print_r($_POST);
	}

	public function form_CheckOut()
	{
		$this->Main();
		$this->load->view('checkIn/CheckOut',$this->data);
	}

	public function form_Booking()
	{
		$this->Main();
		$this->load->view('checkIn/Booking',$this->data);
	}

}

/* End of file CheckIn.php */
/* Location: ./application/controllers/CheckIn.php */