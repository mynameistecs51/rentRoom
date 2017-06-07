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
					<!-- <div class="clearfix"></div>
					<div class="clearfix"></div> -->
				</div>

				<div class="panel-body ">
					<div class="row">
						<div class="col-sm-12" style="padding-bottom: 3px;">
							<div class=" pull-left">
								<i class="fa fa-square-o" aria-hidden="true" ></i> = ว่าง,
								<i class="fa fa-square-o" aria-hidden="true" style="background-color:red;color:red;"></i> = อยู่,
								<i class="fa fa-square-o" aria-hidden="true" style="background-color:green;color:green;"></i> = ทำความสะอาด
							</div>
							<div class=" pull-right" >
								<!-- <form class="form-inline" method="post" action="<?php //echo base_url('checkInOut'); ?>" > -->
								<?php echo form_open('checkInOut', 'class="form-inline col-sm-12" '); ?>
								<div class="form-group">
									<select name="mounth" class ="form-control"  required>
										<option> เดือน </option>
										<?php foreach ($getMonth as $keyMounth => $mounth): ?>
											<?php $selectedMounth = ($keyMounth == date('m'))?"selected":''; ?>
											<option <?php echo $selectedMounth; ?> value="<?php echo $keyMounth; ?>">
												<?php echo $mounth; ?>
											</option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="form-group">
									<select name="year" class ="form-control"  required>
										<option> ปี </option>
										<?php foreach ($getYear as $keyYear => $Year): ?>
											<?php $selectedYear = ($keyYear == date('Y'))?"selected":''; ?>
											<option <?php echo $selectedYear; ?>   value="<?php echo $keyYear; ?>"> <?php echo $Year; ?> </option>
										<?php endforeach ?>
									</select>
								</div>
								<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span></button>
								<?php echo form_close(); ?>
							</div>
						</div>

						<table class="col-sm-12" border="1" bordercolor=" #ccffff"  style="width: 100%;overflow-y: auto;overflow-x: auto;display: block;padding:0px; " >
							<thead border="1"  >
								<tr class="alert-info" >
									<th style="text-align: center;padding: 3px;" > ห้อง</th>
									<th style="text-align: center;padding: 3px;" > ราคา</th>
									<?php for ($i=$startDay; $i <= $lastDay; $i++) :?>
										<th style="text-align: center;"> <span style="font-size: 10px;">วันที่</span><br><?php echo $i; ?></th>
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
		</div>
		<?php echo $footer; ?>

		<script type="text/javascript">
			$(function(){
				$('.btn_dateRoom').click(function(){
					$("<div title='บันทึกรายการ'>" + "ห้อง 101 วันที"+$(this).data('numroom')+"</div>").dialog({
						modal: true,
							// draggable: false,
							buttons: {
								'ok': {
									'text': 'OK',
									'prepend': '<b class="glyphicon glyphicon-ok"></b> ',
									'class': 'btn btn-primary',
									// 'style':'background-color:blue',
									'click': function(){
										$(this).dialog('close');
									}
								}
							}
						});
				});
			});
		</script>

