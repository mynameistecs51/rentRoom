<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* Load First
 */

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		redirect('CheckInOut','refresh');
	}

	public function index()
	{

	}

	public function Main()
	{
		$this->data['header'] = $this->template->getHeader(base_url());
		$this->data['footer'] = $this->template->getFooter(base_url());
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */