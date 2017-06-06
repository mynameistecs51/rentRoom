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

				<div class="panel-body " style="overflow-y: auto;overflow-x: auto;">
					<table class="col-sm-12" border="1" >
						<caption>
							<i class="fa fa-square-o" aria-hidden="true" ></i> = ว่าง,
							<i class="fa fa-square-o" aria-hidden="true" style="background-color:red;color:red;"></i> = อยู่,
							<i class="fa fa-square-o" aria-hidden="true" style="background-color:green;color:green;"></i> = ทำความสะอาด
						</caption>
						<thead >
							<tr class="alert-info" >
								<th style="text-align: center;padding: 3px;" > ห้อง</th>
								<th style="text-align: center;padding: 3px;" > ราคา</th>
								<?php for ($i=$startDay; $i <= $lastDay; $i++) :?>
									<th style="text-align: center;"> <span style="font-size: 10px;">วันที่</span><br><?php echo $i; ?></th>
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

