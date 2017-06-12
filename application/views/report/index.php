<?php echo $header; ?>
<div class="col-sm-12 ">
	<div class="col-sm-3">	</div>
	<div class="col-sm-6">

		<table width="100%" border='1'  id="example" class="table table-hover table-bordered">
			<caption >
				<table width="100%" >
					<tr>
						<td class="col-sm-3"></td>
						<td class="col-sm-3 text-center" align="center"> <b>ใบเสร็จรับเงิน </b></td>
						<td class="col-sm-3"></td>
					</tr>
					<tr>
						<td class="col-sm-3" colspan="2">
							จันทร์เจ้า โฮเทล <br>
							666 หมู่ 6	ถ.โพนพิสัย ต.หมากแข้ง 	อ.เมือง จ.อุดรธานี 41000 <br>
							โทร 0910571616 <br>
							หมายเลขผู้เสียภาษี  111111111111
						</td>
						<td class="col-sm-3 " style="widows: 100%;text-align: right;">
							<label > ต้นฉบับ</label>
							<br>
							<label style="width: 40%;padding-left: 0px;text-align: left;">เลขที่ </label>
							<label style="padding-right: 0%;text-align: right;"> 123456789</label>
							<br>
							<label style="width: 40%;padding-left: 0px;text-align: left;">วันที่ </label>
							<label style="padding-right: 0%;text-align: right;"><?php echo date('d-m-y'); ?></label>
							<br>
							<label style="width: 40%;padding-left: 0px;text-align: left;">ออกโดย </label>
							<label style="padding-right: 0%;text-align: right;">Administrator</label>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<span><b>ชื่อลูกค้า</b>   ไชยวัฒน์ ไชยวัฒน์</span>
							<br>
							<span><b>ที่อยู่</b> 	ราชภัฏอุดรธานี</span>
						</td>
					</tr>
				</table>
			</caption>
			<thead   style="background:#E6E6E6">
				<tr>
					<th>ชื่อ - สกุล</th>
					<th>ห้อง</th>
					<th>รายการ</th>
					<th>จัดการ</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td>นาย ไชยวัฒน์ หอมแสง</td>
					<td>ห้อง 202</td>
					<td>ห้องเตียงคู่</td>
					<td>500 Bath.</td>
				</tr>
				<tr>
					<td>นาย ไชยวัฒน์ หอมแสง</td>
					<td>ห้อง 203</td>
					<td>ห้องเตียงเดี่ยว</td>
					<td>500 Bath.</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3" align="center">รวม</td>
					<td >1000 Bath.</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-5"></div>
	<p class="text-center">
		<button class="btn btn-primary btn_print"><span class="fa fa-print"> ปริ๊น</span></button>
	</p>
</div>
<?php echo $footer; ?>
<script type="text/javascript">
	$('.btn_print').click(function(){
		// var divToPrint=document.getElementById('example');
		// 	newWin= window.open("");
		// 	newWin.document.write(divToPrint.outerHTML);
		// 	newWin.print();
		// 	newWin.close();

		var data = document.getElementById('example');
		newWin = window.open("");
		newWin.document.write(data.outerHTML);
		newWin.print();
		newWin.close();
	});
</script>