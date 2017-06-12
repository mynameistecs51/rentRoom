<?php echo $header; ?>
<div class="col-sm-12 ">
	<div class="col-sm-12 text-center">จันเจ้าโฮเทล (JanJao Hotel)</div>
	<div class="col-sm-12 ">

		<table width="100%" border="1" id="example">
			<caption>โรงแรมจันทร์เจ้า 666 หมู่ 6
				ถ.โพนพิสัย ต.หมากแข้ง <br>
				อ.เมือง จ.อุดรธานี 41000 <br>
				โทร 0910571616</caption>
				<thead class="bg-warning">
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
			</table>
		</div>
	</div>
	<div class="col-sm-12">
		<p class="pull-right">
			<button class="btn btn-primary btn_print"><span class="fa fa-print"> ปริ๊น</span></button>
		</p>
	</div>
	<?php echo $footer; ?>
	<script type="text/javascript">
		$('.btn_print').click(function(){
		// 	var divToPrint=$("#example");
		// 	newWin= window.open("");
		// 	newWin.document.write(divToPrint.html());
		// // newWin.document.write(divToPrint.outerHTML);
		// newWin.print();
		// newWin.close();
		// window.open($('#example'));
		window.print($('#example'));
		window.close();
	});
</script>