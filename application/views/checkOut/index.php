<?php echo $header; ?>
<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>ชื่อ - สกุล</th>
			<th>ห้อง</th>
			<th>รายการ</th>
			<th>จัดการ</th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<th>นาย ไชยวัฒน์ หอมแสง</th>
			<td>ห้อง 202</td>
			<td>ห้องเตียงคู่</td>
			<td><button class="btn btn-primary">Check Out</button></td>
		</tr>
		<tr>
			<th>นาย ไชยวัฒน์ หอมแสง</th>
			<td>ห้อง 203</td>
			<td>ห้องเตียงเดี่ยว</td>
			<td><button class="btn btn-primary">Check Out</button></td>
		</tr>
	</tbody>
</table>
<?php echo $footer; ?>

<script type="text/javascript">
	$(function() {
		$('#example').DataTable();
	});

	window.print();
</script>