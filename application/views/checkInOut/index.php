<?php echo $header; ?>

<div class="panel panel-primary"  >
	<div class="panel-heading"><i class="glyphicon glyphicon-list"></i> บันทึกการเข้าพัก</div>
	<div class="navbar navbar-default" style="padding-top: 5px;">
		<div class="form-inline">
			<div class="form-group pull-right">
				<label for="search">ค้นหา: </label>
				<input type="text" class="form-control" id="search" placeholder="-- หมายเลขห้อง --">
				<button  class="btn btn-default"><i class="glyphicon glyphicon-search"></i> </button>
			</div>
		</div>
	</div>

	<div class="panel-body ">
		<div class="row">
			<div class="col-sm-12" style="padding-bottom: 3px;">
				<div class=" col-sm-6">
					<i class="fa fa-square-o" aria-hidden="true" ></i> = ว่าง,
					<i class="fa fa-square-o" aria-hidden="true" style="background-color:red;color:red;"></i> = อยู่,
					<i class="fa fa-square-o" aria-hidden="true" style="background-color:green;color:green;"></i> = ทำความสะอาด
					<div class="text-primary line-height">
						<u> วันที่ <?php echo date('j').' เดือน '.$getMonth[$mounth].' พ.ศ. '.$getYear[date('Y')];?> </u>
					</div>
				</div>
				<div class=" col-sm-6" >
					<!-- <form class="form-inline" method="post" action="<?php //echo base_url('checkInOut'); ?>" > -->
					<?php echo form_open('checkInOut', 'class=" col-sm-12" '); ?>
					<div class="form-group col-sm-5">
						<select name="mounth" class ="form-control" >
							<option value="">  เดือน </option>
							<?php foreach ($getMonth as $keyMounth => $mounth): ?>
								<option  value="<?php echo $keyMounth; ?>">
									<?php echo $mounth; ?>
								</option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group col-sm-5">
						<select name="year" class ="form-control" >
							<option value="">  พ.ศ  </option>
							<?php foreach ($getYear as $keyYear => $Year): ?>
								<option  value="<?php echo $keyYear; ?>"> <?php echo $Year; ?> </option>
							<?php endforeach ?>
						</select>
					</div>
					<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span></button>
					<?php echo form_close(); ?>
				</div>
			</div>

			<table class="table table-hover table-bordered col-sm-12 "  style="width: 100%;overflow-y: auto;overflow-x: auto;display: block;" >
				<thead border="1"  >
					<tr class="alert-info" >
						<th style="text-align: center;padding: 3px;" > ห้อง</th>
						<th style="text-align: center;padding: 3px;" > ราคา</th>
						<?php for ($i=$startDay; $i <= $lastDay; $i++) :?>
							<th style="text-align: center;padding:3px;"> <span style="font-size: 9px;">วันที่</span><br><?php echo $i; ?></th>
						<?php endfor ?>
					</tr>
				</thead>
				<tbody>
					<tr >
						<td style="text-align: center;" class="alert-default">101</td>
						<td style="text-align: center;">550</td>
						<?php for ($i=$startDay; $i <= $lastDay; $i++) :?>
							<td style="text-align: center;padding: 3px;" >
								<button class="btn btn-default btn-xs btn_dateRoom" data-numRoom='<?php echo $i ?>'><i class="fa fa-bed" aria-hidden="true"></i></button>
							</td>
						<?php endfor; ?>
					</tr>
					<tr >
						<td style="text-align: center;" class="alert-default">201</td>
						<td style="text-align: center;">250</td>
						<?php for ($i=$startDay; $i <= $lastDay; $i++) :?>
							<td style="text-align: center;padding: 3px;" >
								<button class="btn btn-default btn-xs btn_dateRoom" data-numRoom='<?php echo $i ?>'><i class="fa fa-bed" aria-hidden="true"></i></button>
							</td>
						<?php endfor; ?>
					</tr>
					<tr >
						<td style="text-align: center;" class="alert-default">301</td>
						<td style="text-align: center;">250</td>
						<?php for ($i=$startDay; $i <= $lastDay; $i++) :?>
							<td style="text-align: center;padding: 3px;" >
								<button class="btn btn-default btn-xs btn_dateRoom" data-numRoom='<?php echo $i ?>'><i class="fa fa-bed" aria-hidden="true"></i></button>
							</td>
						<?php endfor; ?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php echo $footer; ?>

<script type="text/javascript">
	$(function(){
		$('.btn_dateRoom').click(function(){
			$("<div title='บันทึกรายการ'>" + "ห้อง 101 วันที"+$(this).data('numroom')+"</div>").dialog({
				modal: true,
				buttons: {
					'ok': {
						'text': 'OK',
						'prepend': '<b class="glyphicon glyphicon-ok"></b> ',
						'class': 'btn btn-primary',
						'click': function(){
							$(this).dialog('close');
						}
					}
				}
			});
		});
	});
</script>

