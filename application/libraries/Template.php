<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function getHeader($base_url)
	{
		return '
		<!DOCTYPE html>
		<html>
		<head>

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">

			<title>ระบบห้องพัก</title>

			<!-- Bootstrap Core CSS -->
			<link href="'.$base_url.'assets/css/bootstrap.css" rel="stylesheet">
			<link href="'.$base_url.'assets/css/bootstrap.min.css" rel="stylesheet">
			<link href="'.$base_url.'assets/css/bootstrap-theme.min.css" rel="stylesheet">

			<!-- Jquery UI -->
			<link href="'.$base_url.'assets/css/jquery-ui.min.css" rel="stylesheet">

			<!-- Custom Fonts -->
			<link href="'.$base_url.'assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		</head>
		<body>
			<!-- Navigation -->
			<div class="row"  >

				<!-- Navigation -->
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  >
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" > Janjao Hotel</a>
					</div>
				</nav>
			</div>
			<!-- </nav> -->

			<div class="row"  style="background-color:none;padding: 20px;margin-top: 50px;">

				<div class="content col-sm-2" >  <!--   menu left -->
					<div class="panel panel-primary">
						<div class="panel-heading"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> บันทึกประจำวัน</div>
						<div class="panel-body ">
							<div>'.anchor("/", "<i class=\"glyphicon glyphicon-hand-right\"></i> Check In/Out").'</div>
						</div>
					</div>

					<div class="panel panel-info">
						<div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> รายงาน</div>
						<div class="panel-body ">
							<div>'.anchor("#", "<i class=\"glyphicon glyphicon-hand-right\"></i> สรุปรายได้").'</div>
							<div>'.anchor("#", "<i class=\"glyphicon glyphicon-hand-right\"></i> ทรัพย์สินเสียหาย").'</div>
							<div>'.anchor("#", "<i class=\"glyphicon glyphicon-hand-right\"></i> xxx").'</div>
						</div>
					</div>

					<div class="panel panel-warning">
						<div class="panel-heading"><i class="glyphicon glyphicon-cog"></i> ตั้งค่าข้อมูล</div>
						<div class="panel-body ">
							<div>'.anchor("management/createTypeRoom", "<i class=\"glyphicon glyphicon-hand-right\"></i> ประเภท").'</div>
							<div>'.anchor("#", "<i class=\"glyphicon glyphicon-hand-right\"></i> ห้องพัก").'</div>
							<div>'.anchor("#", "<i class=\"glyphicon glyphicon-hand-right\"></i> ออกจากระบบ").'</div>
						</div>
					</div>
				</div> <!-- ./end content menu left -->

				<!-- show body -->
				<div class="content col-sm-10" >
					';
				}

				public function getFooter($base_url)
				{
					return '
				</div> <!-- /. end content body -->
			</div>	<!-- end /. row -->
			<!-- Bootstrap Core JS -->
			<script src="'.$base_url.'assets/js/jquery.min.js"></script>
			<script src="'.$base_url.'assets/js/jquery.js"></script>
			<script src="'.$base_url.'assets/js/bootstrap.min.js"></script>

			<!-- Juqery UI -->
			<script src="'.$base_url.'assets/js/jquery-ui.min.js"></script>

		</body>
		</html>
		';
	}

	public static function getMonth() {
		return  array(
			'1' => 'มกราคม',
			'2' => 'กุมภาพันธ์',
			'3' => 'มีนาคม',
			'4' => 'เมษายน',
			'5' => 'พฤษภาคม',
			'6' => 'มิถุนายน',
			'7' => 'กรกฏาคม',
			'8' => 'สิงหาคม',
			'9' => 'กันยายน',
			'10' => 'ตุลาคม',
			'11' => 'พฤศจิกายน',
			'12' => 'ธันวาคม'
			);
	}

	public static function getYear() {
		$arr = array();
		$y = date('Y')-2;

		for ($i = $y; $i <= ($y + 4); $i++) {
			$arr[$i] = $i+543;
		}
		return $arr;
	}

}

/* End of file template.php */
/* Location: ./application/libraries/template.php */
