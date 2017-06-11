
<style type="text/css">
	.form_input p.required{
		width:99%;
		height: 5px;
		margin-top: -20px;
		text-align:right;
		font-size: 15px;
		color:#FF0000;
		padding: 3	px;
	}
	input{
		margin-bottom: 20px;
	}
</style>
<div class="row form_input" style="text-align:left; margin-bottom:20px">
	<div class="form-group ">
		<div class="col-sm-3" >
			<p >เลขประจำตัวประชาชน</p>
			<p class="required" >*</p>
			<input type="text" class="form-control"  name="firstname_th" placeholder="ชื่อ" required>
		</div>
		<div class="col-sm-3" >
			<p >เพศ</p>
			<p class="required" style="width: 70%;">*</p>
			<label><input type="radio" name="sex" value="male"> <b class="btn btn-primary btn-md">  ชาย</b></label>
			&nbsp;&nbsp;&nbsp;
			<label><input type="radio" name="sex" value="Female"> <b class="btn btn-warning btn-md"> หญิง</b></label>
		</div>
		<div class="col-sm-3" >
			<p >ชื่อ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="firstname_th" placeholder="ชื่อ" required>
		</div>
		<div class="col-sm-3" >
			<p >ชื่อกลาง </p>
			<p class="required"></p>
			<input type="text" class="form-control"  name="firstname_th" placeholder="ชื่อ" required>
		</div>
		<div class="col-sm-3" >
			<p >นามสกุล </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >วัน/เดือน/ปี เกิด </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >ที่อยู่ </p>
			<p class="required">*</p>
			<textarea name="address" class="form-control" rows="1" cols="50"></textarea>
		</div>
		<div class="col-sm-3" >
			<p >จังหวัด </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >อำเภอ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >ตำบล </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >รหัสไปรษณีย์ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >เบอร์มือถือ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >อีเมลล์ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<!-- <div class="col-sm-3" >
			<p >วันที่จอง </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div> -->
		<div class="col-sm-3" >
			<p >ทะเบียนรถยนต์ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >วันนัดหมาย CheckIn </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >วันนัดหมาย CheckOut </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-3" >
			<p >อาหารเช้า </p>
			<p class="required" style="width: 70%;">*</p>
			<label><input type="radio" name="sex" value="male"> <b class="btn btn-primary btn-md">  รับ</b></label>
			&nbsp;&nbsp;&nbsp;
			<label><input type="radio" name="sex" value="Female"> <b class="btn btn-warning btn-md"> ไม่รับ</b></label>
		</div>
		<div class="col-sm-3" >
			<p >เช่าแบบ </p>
			<p class="required">*</p>
			<label><input type="radio" name="sex" value="male"> <b class="btn btn-info btn-md">  ชั่วคราว</b></label>
			&nbsp;
			<label><input type="radio" name="sex" value="Female">  <b class="btn btn-success btn-md"> รายวัน</b></label>
			&nbsp;
			<label><input type="radio" name="sex" value="Female">  <b class="btn btn-primary btn-md"> รายเดือน</b></label>
		</div>
		<div class=" col-sm-3" >
			<p >มัดจำ </p>
			<p class="required">*</p>
			<div class="input-group">
				<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
				<span class="input-group-addon">บาท</span>
			</div>
		</div>
		<div class=" col-sm-3" >
			<p >ให้ออกในรายใบเสร็จได้ไหมไฟล์เงินมัดจำ </p>
			<p class="required">*</p>
			<input type="text" class="form-control"  name="lastname_th" placeholder="สกุล" required>
		</div>
		<div class="col-sm-12 clearfix"><p></p> </div>
		<div class="col-md-6">
			<p >รูปบัตรประชาชน </p>
			<p class="required">*</p>
			<a  id="snap" class="btn btn-primary"><i class="fa fa-camera"></i> ถ่ายภาพ</a>
			<video id="video" class="bg-default" width="600" height="400" autoplay></video>
		</div>
		<div class="col-sm-6">
			<p >&nbsp; </p>
			<p >&nbsp; </p>
			<p class="required">*</p>
			<canvas id="canvas"  class="bg-primary" width="600" height="400"></canvas>
		</div>
	</div>
</div>
<script type="text/javascript">
	// Grab elements, create settings, etc.
	var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
    	video.src = window.URL.createObjectURL(stream);
    	video.play();
    });
  }

  // Elements for taking the snapshot
  var canvas = document.getElementById('canvas');
  var context = canvas.getContext('2d');
  var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 640, 480);
});
</script>