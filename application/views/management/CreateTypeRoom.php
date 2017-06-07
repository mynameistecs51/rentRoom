<?php echo $header; ?>

<div class="panel panel-primary">
	<div class="panel-heading"><b> เพิ่มประเภทห้องพัก </b></div>
	<div class="panel-body ">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6  alert-info" style="padding:20px;padding-left: 120px;"  >

				<div class="form-group row"  >
					<div class="col-sm-7">
						<input type="text" class="form-control " name="InroomType" id="InroomType" placeholder="ประเภทห้องพัก ธรรมดา,VIP" >
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
			if($('#InroomType').val() != ""){
				var  row=$('.btn_delTyperoom').length+1;
				var  html  = '<div class="typeRoom col-sm-4" ID="typeRoom'+row+'" style="margin-top:10px;font-size:25px;">';
				html += '<div class="col-sm-10 alert-info" >';
				html += '<div>'+$('#InroomType').val() ;
				html += '<button class="btn btn-danger pull-right btn_delTyperoom" id="btn_deltyperoom'+row+'" style="right:0px;"><span class="glyphicon glyphicon-minus"></span></botton>';
				html += '</div>';
				html += '</div>';
				$('.showAdd').append(html);
				$('#InroomType').val('');
				delTyperoom(row);
			}else{
				$("<div title='แจ้งเตือน !'> <i class=\"fa fa-info-circle fa-2x  text-info\" aria-hidden=\"true\"></i> กรุณากรอกข้อมูลประเภทห้องพัก </div>").dialog({
					modal: true,
					buttons: {
						'OK': {
							text: "OK",
							icons: {primary: "ui-icon-check"	},
							'click':function() {
								$(this).dialog( "close" );
								$('#InroomType').focus();
							}
						}
					}
				});
			}
		});
	}

	function delTyperoom(num) {
		$('#btn_deltyperoom'+num).click(function(){
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
					'class': 'btn btn-danger',
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