<?php echo $header; ?>
<style type="text/css">
	.form_input p.required{
		width:99%;
		height: 5px;
		margin-top: -10px;
		text-align:right;
		font-size: 15px;
		color:#FF0000;
	}
</style>
<div class="row form_input" style="text-align:left; margin-bottom:20px">
	<div class="form-group ">
		<div class="col-sm-2" >
			<p>เพศ</p>
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
		<div class="col-sm-3" >
			<p>วัน/เดือน/ปี เกิด </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p>ที่อยู่ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-5 " >
			<p>จำนวนวันที่พัก </p>
			<p class="required">*</p>
			<div class="col-sm-5">
				<input type="text" class="form-control "  name="lastname_th" placeholder="สกุล" required>
			</div>
			<div class="col-sm-1">ถึง</div>
			<div class="col-sm-6">
				<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
			</div>
		</div>
	</div>
</div>
<?php echo $footer; ?>