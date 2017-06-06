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
					<i class="glyphicon glyphicon-hand-right"></i> <a href="www.google.com" target="_blank" >Check In/Out</a>
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

				<div class="navbar navbar-default" style="padding-top:5px;margin-bottom: 0px;">
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
					<table width="100%" border="1" >
						<caption>
							<i class="fa fa-square-o" aria-hidden="true" ></i> = ว่าง,
							<i class="fa fa-square-o" aria-hidden="true" style="background-color:red;color:red;"></i> = อยู่,
							<i class="fa fa-square-o" aria-hidden="true" style="background-color:green;color:green;"></i> = ทำความสะอาด
						</caption>
						<thead >
							<tr class="alert-info" >
								<th style="text-align: center;"> Room</th>
								<th style="text-align: center;"> Price</th>
								<?php for ($i=$startDay; $i <= $lastDay; $i++) :?>
									<th style="text-align: center;"> <?php echo $i; ?></th>
								<?php endfor ?>
							</tr>
						</thead>
						<tbody >
							<tr >
								<td style="text-align: center;" class="alert-default">101</td>
								<td style="text-align: center;">550</td>
								<?php for ($i=$startDay; $i <= $lastDay; $i++) :?>
									<td style="text-align: center;padding: 3px;" >
										<button class="btn btn-default btn-xs btn_dateRoom" data-numRoom='<?php echo $i ?>'><i class="fa fa-bed" aria-hidden="true"></i></button>
									</td>
								<?php endfor ?>
							</tr>
						</tbody>
					</table>


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

	<script type="text/javascript">
		$(function(){
			$('.btn_dateRoom').click(function(){
				console.log($(this).data('numroom'));
			});
		});
	</script>
</body>
</html>
