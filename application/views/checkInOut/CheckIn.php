
<style type="text/css">
	.form_input p.required{
		width:99%;
		height: 5px;
		margin-top: -20px;
		text-align:right;
		font-size: 15px;
		color:#FF0000;
		padding: 3px;
	}
</style>
<div class="row form_input" style="text-align:left; margin-bottom:20px">
	<div class="form-group ">
		<div class="col-sm-2" >
			<p>เลขประจำตัวประชาชน</p>
			<p class="required" >*</p>
			<input type="text" class="form-control"  name="firstname_th" placeholder="ชื่อ" required>
		</div>
		<div class="col-sm-2" >
			<p>เพศ</p>
			<p class="required" style="width: 70%;">*</p>
			<label><input type="radio" name="sex" value="male"> ชาย</label>
			<label><input type="radio" name="sex" value="Female"> หญิง</label>
		</div>
		<div class="col-sm-2" >
			<p>ชื่อ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="firstname_th" placeholder="ชื่อ" required>
		</div>
		<div class="col-sm-2" >
			<p>ชื่อกลาง </p>
			<p class="required"></p>
			<input type="text" class="form-control"  name="firstname_th" placeholder="ชื่อ" required>
		</div>
		<div class="col-sm-2" >
			<p>นามสกุล </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>วัน/เดือน/ปี เกิด </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p>ที่อยู่ </p>
			<p class="required">*</p>
			<textarea name="address" class="form-control" rows="1" cols="50"></textarea>
		</div>
		<div class="col-sm-2" >
			<p>จังหวัด </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>อำเภอ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>ตำบล </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>รหัสไปรษณีย์ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>เบอร์มือถือ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>อีเมลล์ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>วันที่จอง </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>วันนัดหมาย CheckIn </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>วันนัดหมาย CheckOut </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-2" >
			<p>อาหารเช้า </p>
			<p class="required">*</p>
			<label><input type="radio" name="sex" value="male"> รับ</label>
			<label><input type="radio" name="sex" value="Female"> ไม่รับ</label>
		</div>
		<div class="col-sm-3" >
			<p>เช่าแบบ </p>
			<p class="required">*</p>
			<label><input type="radio" name="sex" value="male"> ชั่วคราว</label>
			<label><input type="radio" name="sex" value="Female"> รายวัน</label>
			<label><input type="radio" name="sex" value="Female"> รายเดือน</label>
		</div>
		<div class=" col-sm-2" >
			<p>มัดจำ </p>
			<p class="required">*</p>
			<div class="input-group">
				<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
				<span class="input-group-addon">บาท</span>
			</div>
		</div>
		<div class=" col-sm-3" >
			<p>ให้ออกในรายใบเสร็จได้ไหมไฟล์เงินมัดจำ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class=" col-sm-3" >
			<p>รูปบัตรประชาชน </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-12 clearfix"> </div>
		<div class="col-xs-8 col-md-3">
			<a href="#" class="thumbnail">
				<img src="<?php echo base_url('assets/images/no-image.jpg'); ?>" alt="...">
			</a>
		</div>
	</div>
</div>