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
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.form_input p.required{
			width:99%;
			height: 3px;
			margin-top: -10px;
			text-align:right;
			font-size: 15px;
			color:#FF0000;
		}

	</style>
</head>
<body>
	<!-- <div class="nav  navbar-inverse navbar-fixed-top" style="padding: 15px; color: #f9f8f7; font-size: 18px;">
		บริการห้องพัก
	</div> -->
	<!-- Navigation -->
	<div id="row" >

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
				<a class="navbar-brand" >ระบบห้องพัก Janjao</a>
			</div>
		</nav>
	</div>

	<!-- </nav> -->
	<div class="row"  style="background-color:none;padding: 20px;margin-top: 50px;">
		<div class="content col-sm-2">  <!--   menu left -->
			<div class="panel panel-primary">
				<div class="panel-heading"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> บันทึกประจำวัน</div>
				<div class="panel-body ">
					<i class="glyphicon glyphicon-hand-right"></i> <a href="www.google.com" target="_blank" >google.com</a>
				</div>
			</div>

			<div class="panel panel-info">
				<div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> รายงาน</div>
				<div class="panel-body ">
					<i class="glyphicon glyphicon-hand-right"></i> ssss
					<div><i class="glyphicon glyphicon-hand-right"></i> sss</div>
					<div><i class="glyphicon glyphicon-hand-right"></i> xxxxxx</div>
				</div>
			</div>

			<div class="panel panel-warning">
				<div class="panel-heading"><i class="glyphicon glyphicon-cog"></i> ตั้งค่าข้อมูล</div>
				<div class="panel-body ">
					<div><i class="glyphicon glyphicon-hand-right"></i> xx</div>
					<div><i class="glyphicon glyphicon-hand-right"></i> xxx</div>
					<div><i class="glyphicon glyphicon-hand-right"></i> xx</div>
				</div>
			</div>
		</div> <!-- ./end content menu left -->

		<!-- show body -->
		<div class="content col-sm-10">

			<div class="panel panel-primary">
				<div class="panel-heading"><i class="glyphicon glyphicon-list"></i> บันทึกการเข้าพัก</div>

				<div class="navbar navbar-default" style="padding-top:5px;">
					<div class="form-inline">
						<div class="form-group pull-right">
							<?php echo base_url(); ?>
							<label for="search">ค้นหา: </label>
							<input type="text" class="form-control" id="search" placeholder="-- หมายเลขห้อง --">
							<button  class="btn btn-default"><i class="glyphicon glyphicon-search"></i> </button>
						</div>
					</div>
					<!-- <div class="clearfix"></div>
					<div class="clearfix"></div> -->
				</div>

				<div class="panel-body">
					<?php
					header('Content-Type: text/html; charset=utf-8');
					$weekDay = array( 'อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสฯ', 'ศุกร์', 'เสาร์');
					$thaiMon = array( "01" => "มกราคม", "02" => "กุมภาพันธ์", "03" => "มีนาคม", "04" => "เมษายน",
						"05" => "พฤษภาคม","06" => "มิถุนายน", "07" => "กรกฎาคม", "08" => "สิงหาคม",
						"09" => "กันยายน", "10" => "ตุลาคม", "11" => "พฤศจิกายน", "12" => "ธันวาคม");

//Sun - Sat
$month = isset($_GET['month']) ? $_GET['month'] : date('m'); //ถ้าส่งค่าเดือนมาใช้ค่าที่ส่งมา ถ้าไม่ส่งมาด้วย ใช้เดือนปัจจุบัน
$year = isset($_GET['year']) ? $_GET['year'] : date('Y'); //ถ้าส่งค่าปีมาใช้ค่าที่ส่งมา ถ้าไม่ส่งมาด้วย ใช้ปีปัจจุบัน

//วันที่
$startDay = $year.'-'.$month."-01";   //วันที่เริ่มต้นของเดือน

$timeDate = strtotime($startDay);   //เปลี่ยนวันที่เป็น timestamp
$lastDay = date("t", $timeDate);   //จำนวนวันของเดือน

$endDay = $year.'-'.$month."-". $lastDay;  //วันที่สุดท้ายของเดือน

$startPoint = date('w', $timeDate);   //จุดเริ่มต้น วันในสัปดาห์

//echo "<br>\$data ";
//print_r($data);
//echo "<hr>";
?>
<?php
echo "<br/>ตำแหน่งของวันที่ startDay คือ <strong>", $startPoint , " (ตรงกับ วัน" , $weekDay[$startPoint].")</strong>";

$title = "เดือน $thaiMon[$month] <strong>". $startDay. " : ". $endDay."</strong>";

//ลดเวลาลง 1 เดือน
$prevMonTime = strtotime ( '-1 month' , $timeDate  );
$prevMon = date('m', $prevMonTime);
$prevYear = date('Y', $prevMonTime);
//เพิ่มเวลาขึ้น 1 เดือน
$nextMonTime = strtotime ( '+1 month' , $timeDate  );
$nextMon = date('m', $nextMonTime);
$nextYear = date('Y', $nextMonTime);

echo '<div id="main">';
echo '<div id="nav">
<button class="navLeft" onclick="goTo(\''.$prevMon.'\', \''.$prevYear.'\');"><< เดือนที่แล้ว</button>
<div class="title">'.$title.'</div>
<button class="navRight" onclick="goTo(\''.$nextMon.'\', \''.$nextYear.'\');">เดือนต่อไป >></button>
</div>
<div style="clear:both"></div>';
echo "<table id='tb_calendar' border='1' width='100%'>"; //เปิดตาราง
// echo "<tr>
// <th>อาทิตย์</th><th>จันทร์</th><th>อังคาร</th><th>พุธ</th><th>พฤหัสฯ</th><th>ศุกร์</th><th>เสาร์</th>
// </tr>";
echo "<thead>";
echo "<th>";    //เปิดแถวใหม่
$col = $startPoint;          //ให้นับลำดับคอลัมน์จาก ตำแหน่งของ วันในสับดาห์
//i//f($startPoint < 7){         //ถ้าวันอาทิตย์จะเป็น 7
// echo str_repeat("<td> </td>", $startPoint); //สร้างคอลัมน์เปล่า กรณี วันแรกของเดือนไม่ใช่วันอาทิตย์
//}
for($i=1; $i <= $lastDay; $i++){ //วนลูป ตั้งแต่วันที่ 1 ถึงวันสุดท้ายของเดือน
 $col++;       //นับจำนวนคอลัมน์ เพื่อนำไปเช็กว่าครบ 7 คอลัมน์รึยัง

 echo "<td style='text-align:center;'>", $i , "</td>";  //สร้างคอลัมน์ แสดงวันที่
 //i//f($col % 7 == false){   //ถ้าครบ 7 คอลัมน์ให้ขึ้นบรรทัดใหม่
  //echo "</tr><tr>";   //ปิดแถวเดิม และขึ้นแถวใหม่
  //$col = 0;     //เริ่มตัวนับคอลัมน์ใหม่
//}

echo '</th>';  //ปิดแถวสุดท้าย
echo "</thead>";
// echo "<tr><td style='text-align:center;'>", $i , "</td></tr>";
// echo "<tr><td> <i class='glyphicon glyphicon-user'></i></td></tr>";

}
//i//f($col < 7){         // ถ้ายังไม่ครบ7 วัน
 //echo str_repeat("<td> </td>", 7-$col); //สร้างคอลัมน์ให้ครบตามจำนวนที่ขาด
//}

echo '</table>'; //ปิดตาราง
echo '</main>';
?>
					<!-- <div class="row form_input" style="text-align:left; margin-bottom:20px">
						<div class="form-group ">
							<div class="col-sm-2" >
								<p>คำนำหน้าชื่อ</p>
								<p class="required" style="width: 70%;">*</p>
								<label><input type="radio" name="sex" value="male"> ชาย</label>
								<label><input type="radio" name="sex" value="Female"> หญิง</label>
							</div>
							<div class="col-sm-3" >
								<p>ชื่อ </p>
								<p class="required">*</p>
								<input type="text" class="form-control"  name="firstname_th" placeholder="ชื่อ" required>
							</div>
							<div class="col-sm-3" >
								<p>นามสกุล </p>
								<p class="required">*</p>
								<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div> <!-- /. end content body -->
	</div>	<!-- end /. row -->
	<!-- Bootstrap Core JS -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
