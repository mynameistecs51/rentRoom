<?php echo $header; ?>
<div class="panel panel-primary">
	<div class="panel-heading"><b> เพิ่มประเภทห้องพัก </b></div>
	<div class="panel-body ">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6  alert-info" style="padding:20px;padding-left: 150px;"  >

				<div class="form-group row"  >
					<div class="col-sm-6">
						<input type="text" class="form-control form-control-lg" name="InroomType" id="InroomType" placeholder="ประเภทห้องพัก ธรรมดา,VIP" >
					</div>
					<button class="btn btn-primary btn_addTyperoom">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>
				</div>

			</div>
		</div>
		<div class="col-sm-12"><hr></div>
		<div class="cols-sm-12">
			<div class="showAdd">

			</div>
		</div>
	</div>
</div>
<?php echo $footer; ?>
<script type="text/javascript">
	$(function(){

		addTyperoom();

	});

	function addTyperoom() {
		$('.btn_addTyperoom').click(function(){
			var  row=$(this).length+1;
			var  html  = '<div class="typeRoom col-sm-4" ID="typeRoom'+row+'">';
			html += '<div class="col-sm-10 alert-info" >';
			html += $('#InroomType').val();
			html += '<button class="btn btn-danger pull-right btn_delTyperoom"><span class="glyphicon glyphicon-minus"></span></botton>';
			html += '</div>';
			$('.showAdd').append(html);
			$('#InroomType').val('');
			delTyperoom(row);
		});
	}

	function delTyperoom(num) {
		$('.btn_delTyperoom').click(function(){
			// var chk =  confirm('คุณต้องการย้อนกลับ ใช่หรือไม่ ?');
			// if(chk==true){
			// 	$('#typeRoom'+num).remove();
			// }else{
			// 	return false;
			// }
			$("<div title='แจ้งเตือน !'> คุณต้องการลบข้อมูล </div>").dialog({
				modal: true,
				buttons: [{
					text: "Ok",
					'class': 'btn btn-primary',
					icons: {
						primary: "ui-icon-check"
					},
					click: function() {
						$('#typeRoom'+num).remove();
						$( this ).dialog( "close" );
					}
				},
				{
					text: "No",
					'class': 'btn btn-primary',
					icons: {
						primary: "ui-icon-closethick"
					},
					click: function() {
						$( this ).dialog( "close" );
					}
				}]
			});
		});

	}
</script>