<?php echo $header; ?>
<div class="col-sm-12 ">
	<div class="col-sm-3">	</div>
	<div class="col-sm-6 text-center">

		<table width="100%" border='1'  id="example" class="table table-hover table-bordered">
			<caption >
				<div class="col-sm-12 text-center">
					<b  style="font-family:'TH_Charmonman';font-weight: bold;font-size: 20px;">จันเจ้าโฮเทล (JanJao Hotel)</b>
				</div>
				<div class="text-center">โรงแรมจันทร์เจ้า 666 หมู่ 6
					ถ.โพนพิสัย ต.หมากแข้ง <br>
					อ.เมือง จ.อุดรธานี 41000 <br>
					โทร 0910571616
				</div>
			</caption>
			<caption> วันที่ <?php echo date('j').' เดือน '.$getMonth[$mounth].' พ.ศ. '.$getYear[date('Y')];?> </caption>
			<thead   style="text-align:center;background:#E6E6E6">
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