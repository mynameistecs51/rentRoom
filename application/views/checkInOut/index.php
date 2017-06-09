<?php echo $header; ?>

<div class="panel panel-primary"  >
	<div class="panel-heading"><i class="glyphicon glyphicon-list"></i> บันทึกการเข้าพัก</div>
	<div class="navbar navbar-default" style="padding-top: 5px;">
		<div class="form-inline">
			<div class="form-group col-sm-6">
				<i class="fa fa-square-o" aria-hidden="true" style="background-color:gray;color:gray;"></i> = ว่าง,
				<i class="fa fa-square text-danger" aria-hidden="true" ></i> = อยู่,
				<i class="fa fa-square text-success" aria-hidden="true" ></i> = ทำความสะอาด,
				<i class="fa fa-square text-warning" aria-hidden="true" ></i> = จอง
				<div class="text-primary line-height">
					<u> วันที่ <?php echo date('j').' เดือน '.$getMonth[$mounth].' พ.ศ. '.$getYear[date('Y')];?> </u>
				</div>
			</div>
			<div class="form-group pull-right">
				<label for="search">ค้นหา: </label>
				<input type="text" class="form-control" id="search" placeholder="-- หมายเลขห้อง --">
				<button  class="btn btn-default"><i class="glyphicon glyphicon-search"></i> </button>
			</div>
		</div>
	</div>

	<div class="panel-body " >
		<div class="row">
			<div class=" col-sm-12 alert-info"  style="padding:20px;">
				<?php	for ($i = 1; $i <= 24; ++$i) :?>
					<div class="col-sm-1 ">
						<?php echo  $sho = ($i == 5 )?
						'<button class="btn btn-danger col-sm-12" style="margin:10px;" ><i class="fa fa-bed fa-lg" aria-hidden="true"></i><h5>A'.$i.'  <i class="fa fa-square text-warning" aria-hidden="true" ></i></h5></button>'
						:
						'<button class="btn btn-default col-sm-12 " style="margin:10px;"><i class="fa fa-bed fa-lg " aria-hidden="true"></i><h5>A '.$i.'</h5></button>';?>
					</div>
				<?php endfor?>
			</div>
		</div>
	</div>
</div>


