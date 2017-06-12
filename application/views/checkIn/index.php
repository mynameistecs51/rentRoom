<?php echo $header; ?>

<!-- <div class="panel panel-primary"  style="padding:10px;">
	<div class="panel-heading"><i class="glyphicon glyphicon-list"></i> บันทึกการเข้าพัก</div> -->
	<div class="navbar navbar-default " style="padding-top: 5px;">
		<div class="form-inline">
			<div class="form-group col-sm-5 pull-left">
				<div class="text-primary line-height">
					<h4><u> วันที่ <?php echo date('j').' เดือน '.$getMonth[$mounth].' พ.ศ. '.$getYear[date('Y')];?> </u></h4>
				</div>
			</div>
			<!-- <div class="form-group "> -->
			<div class="form-group">
				<label for="exampleInputName2">Name</label>
				<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail2">Email</label>
				<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
			</div>
			<div class="form-group">
				<label for="typeRoom">ประเภทห้อง</label>
				<select class="form-control" id="typeRoom">
					<option>SINGEL ROOMS</option>
					<option>TWIN ROOMS</option>
					<option>STANDDARD</option>
					<option>VIP</option>
				</select>
			</div>
			<button  class="btn btn-default"><i class="glyphicon glyphicon-search"></i> </button>
			<!-- </div> -->
		</div>
	</div>

	<div class="row">
		<div class="container col-sm-12">
			<div class="col-sm-6">
				<p class="pull-left">
					<b>
						<i class="fa fa-square-o fa-3x" aria-hidden="true" style="background-color:white;color:gray;"></i> = ว่าง,
						<i class="fa fa-square fa-3x" aria-hidden="true" style="background-color:red;color:red;"></i> = อยู่,
						<i class="fa fa-square fa-3x" aria-hidden="true" style="background-color:green;color:green;" ></i> = ทำความสะอาด,
						<i class="fa fa-square-o fa-3x" aria-hidden="true" style="background-color:orange;color:orange;" ></i> = จอง
					</b>
				</p>
			</div>
			<div class="col-sm-6 ">
				<p class="pull-right">
					<button  class="btn btn-primary  btn-lg  btn_CheckIn"> เช่าห้อง</button>
					<button  class="btn btn-warning  btn-lg btn_Booking"> จองห้อง</button>
				</p>
			</div>
			<div class="col-sm-12 cleanfix"></div>
			<!-- <div class="col-sm-12 alert-warning text-left"><h3>ชั้น 1 </div></div> -->
			<h3 class="col-sm-12">FLOOR 1 </h3>
			<div class=" col-sm-12 text-center"  >
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true">&nbsp;</i><i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>201 <i class="fa fa-square " aria-hidden="true" style="background-color:orange;color:orange;" ></i></h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room201" value="room201" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" disabled   style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>202</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room202" value="room202" checked />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>203</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room203" value="room203" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true">&nbsp;</i><i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>204</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room204" value="room204" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>205 VIP</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room205" value="room205" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>205 VIP</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room205" value="room205" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>205 VIP</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room205" value="room205" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>205 VIP</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room205" value="room205" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>205 VIP</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room205" value="room205" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>205 VIP</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room205" value="room205" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>205 VIP</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room205" value="room205" />
					</span>
				</div>
				<div class="col-sm-1 " style="margin:10px;">
					<span class="button-checkbox ">
						<button type="button" class="btn btn_room" data-color="danger" style="width:120px;">
							<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
							<h4>205 VIP</h4>
						</button>
						<input type="checkbox" class="hidden check_room" name="check_room[]" id="room205" value="room205" />
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="div_modal"> <!-- show form  input--> </div>
	<div class="alert_modal">		<!-- show modal alert -->	</div>

	<?php echo $footer; ?>
	<script type="text/javascript">
		$(function(){
			checkIn();
			Booking();
		});

		function message_alert(message) {
			var html ='	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">';
			html +='	<div class="modal-dialog modal-sm" role="document">';
			html +='<div class="modal-content">';
			html +='<div class="modal-header">';
			html +='	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			html +='<h4 class="modal-title" id="myModalLabel">แจ้งเตือน</h4>';
			html +='</div>';
			html +='<div class="modal-body">';
			html += '<i class="fa fa-info-circle btn-info fa-3x" aria-hidden="true"></i>'+     message;
			html +='</div>';
			html +='<div class="modal-footer">';
			html +='	<button type="button" class="btn btn-primary" data-dismiss="modal"> OK </button>';
			html +='</div>';
			html +='</div>';
			html +='</div>';
			html +='</div>';
			$('.alert_modal').html(html);
			$('#myModal').modal('toggle');
		}
		function checkIn() {
			$('.btn_CheckIn').click(function(){
				var roomNumber=[];  //รายการห้องที่เลือก room1,room2
				if($('.check_room').is(':checked') == true){
					$('.check_room:checked').each(function( index,r ) {
						roomNumber.push('ห้อง '+$('#'+r.id+':checked').val());
					});
					console.log(roomNumber);
					load_page('<?php echo $form_CheckIn; ?>','.:: เข้าพัก ::.','#');
				}else{
					message_alert('กรุณาเลือกห้องพัก !!');
				// location.reload();
			}
		});
		}

		function Booking() {
			$('.btn_Booking').click(function(){
				load_page('<?php echo $form_Booking; ?>','.:: เข้าพัก ::.','#');
			});
		}

		function load_page(loadUrl,texttitle,urlsend){
			var screenname= texttitle;
			var url = loadUrl;
			var n=0;
			$('.div_modal').html('');
			modal_form(n,screenname,urlsend);
			$('#myModal'+n+' .modal-body').html('<img id="ajaxLoaderModal" src="<?php echo base_url(); ?>assets/images/loader.gif"/>');
			var modal = $('#myModal'+n), modalBody = $('#myModal'+n+' .modal-body');
			modal.on('show.bs.modal', function () {
				modalBody.load(url);
			}).modal({backdrop: 'static',keyboard: true});
			setInterval(function(){$('#ajaxLoaderModal').remove()},5100);
		}

		function modal_form(n,screenname,url)
		{
			var div='';
			div+='<form action="'+url+'"  role="form" data-toggle="validator" id="form" method="post" enctype="multipart/form-data">';
			div+='<!-- Modal -->';
			div+='<div class="modal modal-wide fade" id="myModal'+n+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
			div+='<div class="modal-dialog" style="width:90%;">';
			div+='<div class="modal-content">';
			div+='<div class="modal-header" style="background:#d9534f;color:#FFFFFF;">';
			div+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
			div+='<h4 class="modal-title">'+screenname+'</h4>';
			div+='</div>';
			div+='<div class="modal-body">';
			div+='</div>';
			div+='<div class="modal-footer" style="text-align:center; background:#F6CECE;">';
			div+='<button type="submit" id="save" class="btn btn-modal"><span class="   glyphicon glyphicon-floppy-saved"> บันทึก</span></button>';
			div+='<button type="reset" class="btn btn-modal" data-dismiss="modal"><span class="   glyphicon glyphicon-floppy-remove"> ยกเลิก</span></button>';
			div+='</div>';
			div+='</div><!-- /.modal-content -->';
			div+='</div><!-- /.modal-dialog -->';
			div+='</div><!-- /.modal -->';
			div+='</form>';
			$('.div_modal').html(div);
		}

	/*
	*-------------------------check button room  ----------------
	*/
	$(function () {
		$('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
        $button = $widget.find('button'),
        $checkbox = $widget.find('input:checkbox'),
        color = $button.data('color'),
        settings = {
        	on: {
        		icon: 'glyphicon glyphicon-check'
        	},
        	off: {
        		icon: 'glyphicon glyphicon-unchecked'
        	}
        };

        // Event Handlers
        $button.on('click', function () {
        	$checkbox.prop('checked', !$checkbox.is(':checked'));
        	$checkbox.triggerHandler('change');
        	updateDisplay();
        });
        $checkbox.on('change', function () {
        	updateDisplay();
        });

        // Actions
        function updateDisplay() {
        	var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
            .removeClass()
            .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
            	$button
            	.removeClass('btn-default')
            	.addClass('btn-' + color + ' active');
            }
            else {
            	$button
            	.removeClass('btn-' + color + ' active')
            	.addClass('btn-default');
            }
          }

        // Initialization
        function init() {

        	updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
            	$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
          }
          init();
        });
	});

</script>


