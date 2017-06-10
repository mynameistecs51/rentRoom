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

			<script src="'.$base_url.'assets/js/jquery.min.js"></script>
			<style >
				@font-face {
					font-family: TH_Charmonman;
					src: url("'.$base_url.'assets/fonts/TH Charmonman.ttf");
				}

			#brandner {
				font-family: TH_Charmonman;
				font-size: 30px;
				padding-left:30px;
			}
			body {
				background:#F7F7F7;
				border : 1px solid #D9DEE4;
			}
		</style>
	</head>
	<body>
		<!-- Navigation -->
		<div class="row"  >
			<nav class="navbar navbar-primary">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" id="brandner"> JanJao Hotel</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						'.$this->menu().'
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<!-- show body -->
			<div class="content col-sm-12" >
				';
			}

			public function getFooter($base_url)
			{
				return '
			</div> <!-- /. end content body -->
		</div>	<!-- end /. row -->
		<!-- Bootstrap Core JS -->
		<script src="'.$base_url.'assets/js/jquery.js"></script>
		<script src="'.$base_url.'assets/js/bootstrap.min.js"></script>

		<!-- Juqery UI -->
		<!-- <script src="'.$base_url.'assets/js/jquery-ui.min.js"></script> -->

	</body>
	</html>
	';
}

public function menu()
{
	return '
	<ul class="nav navbar-nav navbar-right">
		<li><a href="#">เข้าพัก</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> รายงาน <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">สรุปรายได้</a></li>
				<li><a href="#">ทรัพย์สินเสียหาย</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ตั้งค่า <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">ประเภทห้องพัก</a></li>
				<li><a href="#">ห้องพัก</a></li>
			</ul>
		</li>
		<li><a href="#"> ออกจากระบบ</a></li>
	</ul>
	';
}

public  function getMonth() {
	return  array(
		'01' => 'มกราคม',
		'02' => 'กุมภาพันธ์',
		'03' => 'มีนาคม',
		'04' => 'เมษายน',
		'05' => 'พฤษภาคม',
		'06' => 'มิถุนายน',
		'07' => 'กรกฏาคม',
		'08' => 'สิงหาคม',
		'09' => 'กันยายน',
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
