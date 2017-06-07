<?php echo $header; ?>

<div class="panel panel-primary">
	<div class="panel-heading"><b> เพิ่มห้องพัก </b></div>
	<div class="panel-body ">
		<div class="row " >
			<div class="col-sm-12" style="width: 100%;overflow-y: auto; overflow-x: auto; display: block;  ">
				<table width="100%" >
					<thead>
						<tr>
							<th>
								<div class="col-sm-11 alert-info" >
									<h4>ห้องธรรมดา</h4>
									<div class="form-group row"  >
										<div class="col-sm-9">
											<input type="text" class="form-control " name="Inroom" id="Inroom" placeholder="ห้องพัก 101" >
										</div>
										<button class="btn btn-primary btn_addRoom">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
										</button>
									</div>
								</div>
							</th>
							<th>
								<div class="col-sm-11 alert-info" >
									<h4>ห้อง VIP</h4>
									<div class="form-group row"  >
										<div class="col-sm-9">
											<input type="text" class="form-control " name="Inroom" id="Inroom" placeholder="ห้องพัก 101" >
										</div>
										<button class="btn btn-primary btn_addRoom">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
										</button>
									</div>
								</div>
							</th>
							<th>
								<div class="col-sm-11 alert-info" >
									<h4>ห้อง VIP 1</h4>
									<div class="form-group row"  >
										<div class="col-sm-9">
											<input type="text" class="form-control " name="Inroom" id="Inroom" placeholder="ห้องพัก 101" >
										</div>
										<button class="btn btn-primary btn_addRoom">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
										</button>
									</div>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="cols-sm-12">
									<div class="col-sm-12 roomStanddard"> <!--  show data room Standdard -->	</div>
								</div>
							</td>
							<td>
								<div class="cols-sm-12">
									<div class="col-sm-12 roomStanddard"> <!--  show data room Standdard -->	</div>
								</div>
							</td>
							<td>
								<div class="cols-sm-12">
									<div class="col-sm-12 roomStanddard"> <!--  show data room Standdard -->	</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
		<div class="col-sm-12"><hr></div>

	</div>
</div>
<?php echo $footer; ?>
<script type="text/javascript">
	$(function(){

		$('.btn_addRoom').click(function(){
			CreateRoom('#Inroom','.btn_delRoom','.roomStanddard');
		});

	});

	function CreateRoom(inputID,classBtn,show) {
		console.log($(inputID).val());
		// $('.btn_addRoom').click(function(){
			if($(inputID).val() != ""){
				var  row=$(classBtn).length+1;
				var  html  = '<div class="typeRoom col-sm-12" ID="typeRoom'+row+'" style="margin-top:10px;font-size:15px;">';
				html += '<div class="col-sm-12 alert-info" >';
				html += '<div> หมายเลขห้อง : '+$(inputID).val() ;
				html += '<button class="btn btn-danger btn-sm pull-right classBtn" id= '+classBtn+row+'" style="right:0px;"><span class="glyphicon glyphicon-minus"></span></botton>';
				html += '</div>';
				html += '</div>';
				$(show).append(html);
				$(inputID).val('').focus();
				delRoom(row);
			}else{
				$("<div title='แจ้งเตือน !'> <i class=\"fa fa-info-circle fa-2x  text-info\" aria-hidden=\"true\"></i> กรุณากรอกข้อมูลห้องพัก </div>").dialog({
					modal: true,
					buttons: {
						'OK': {
							text: "OK",
							icons: {primary: "ui-icon-check"	},
							'click':function() {
								$(this).dialog( "close" );
								$(inputID).val('').focus();
							}
						}
					}
				});
			}
		// });
	}

	function delRoom(num) {
		$('#btn_delRoom'+num).click(function(){
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
