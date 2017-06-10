<?php echo $header; ?>

<!-- <div class="panel panel-primary"  style="padding:10px;"> -->
	<!-- <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> บันทึกการเข้าพัก</div> -->
	<div class="navbar navbar-default" style="padding-top: 5px;">
		<div class="form-inline">
			<div class="form-group col-sm-6">
				<i class="fa fa-square-o" aria-hidden="true" style="background-color:white;color:gray;"></i> = ว่าง,
				<i class="fa fa-square " aria-hidden="true" style="background-color:red;color:red;"></i> = อยู่,
				<i class="fa fa-square " aria-hidden="true" style="background-color:green;color:green;" ></i> = ทำความสะอาด,
				<i class="fa fa-square-o " aria-hidden="true" style="background-color:orange;color:orange;" ></i> = จอง
				<div class="text-primary line-height">
					<u> วันที่ <?php echo date('j').' เดือน '.$getMonth[$mounth].' พ.ศ. '.$getYear[date('Y')];?> </u>
				</div>
			</div>
			<div class="form-group pull-right">
				<label for="search">ค้นหา: </label>
				<input type="text" class="form-control" id="search" placeholder="-- หมายเลขห้อง --">
				<button  class="btn btn-default"><i class="glyphicon glyphicon-search"></i> </button>
			</div>
		</div>
	</div>

	<div class="panel-body " >
		<div class="row">
			<div class="container">
				<div class="col-sm-12 ">
					<div class="col-sm-12 pull-right">
						<!-- <p class="pull-right"> -->
							<button  class="btn btn-danger  btn-md col-sm-3  btn_checkin" style="margin-top:5px;" > CheckIn</button>
							<button  class="btn btn-default  btn-md col-sm-3 btn_checkout" style="margin-top:5px;" > CheckOut</button>
							<button  class="btn btn-success btn-md  col-sm-3 btn_clean" style="margin-top:5px;"  > Clean</button>
							<button  class="btn btn-warning btn-md  col-sm-3 btn_reservation" style="margin-top:5px;"  > จอง</button>
							<button  class="btn btn-primary btn-md  col-sm-3 btn_reservation" style="margin-top:5px;"  >  ย้ายห้อง</button>
						<!-- </p> -->
					</div>
				</div>
			</div>
			<div class="cleanfix"></div>
			<div class="col-sm-12 alert-warning text-center"><h3>ชั้น 1</h3></div>
			<div class=" col-sm-12 alert-info"  style="padding:20px;">
				<?php	for ($i = 1; $i <= 24; ++$i) :?>
					<div class="col-sm-1 ">
						<?php echo  $sho = ($i == 5 )?
						'<a  tabindex="0"  class="btn btn-danger col-sm-12 btn_room"  role="button"  data-num_room="'.$i.'"  style="margin:10px;" ><i class="fa fa-bed fa-lg" aria-hidden="true"></i><h5>A'.$i.'  <i class="fa fa-square" aria-hidden="true" style="background-color:orange;color:orange;"></i></h5></a>'
						:
						'<a  tabindex="0"  class="btn btn-default col-sm-12 btn_room"  role="button"  data-num_room="'.$i.'"    style="margin:10px;"><i class="fa fa-bed fa-lg " aria-hidden="true"></i><h5>A '.$i.'</h5></a>';?>
					</div>
				<?php endfor?>
			</div>
		</div>
	</div>
<!-- </div> -->
<div class="div_modal"> <!-- show form modal --> </div>
<?php echo $footer; ?>
<script type="text/javascript">
	$(function () {
		getRoom();

	});

	function getRoom() {
		$('.btn_room').on('click',function(){
			var num_room = $('.btn_room').data('num_room');
			$(this).popover({
				'trigger': 'focus',
				'placement':'right',
				'title': ' ทำรายการ<span class=" glyphicon glyphicon-remove pull-right"></span>',
				'content': '<div class="col-sm-12 popover_content">'+
				'<button  class="btn btn-danger col-sm-12  btn-sm btn_checkin" style="margin-top:5px;" data-num_room="'+num_room+'"> CheckIn</button>'+
				'<button  class="btn btn-default col-sm-12  btn-sm btn_checkout" style="margin-top:5px;" data-num_room="'+num_room+'"> CheckOut</button>'+
				'<button  class="btn btn-success col-sm-12 btn-sm btn_clean" style="margin-top:5px;"  data-num_room="'+num_room+'"> Clean</button>'+
				'<button  class="btn btn-warning col-sm-12 btn-sm btn_reservation" style="margin-top:5px;"  data-num_room="'+num_room+'"> จอง</button>'+
				'</div>',
				'html':true,
			}).popover('toggle'),
			$('.btn_checkin').on('click', function() {  //checkOut
				load_page("<?php echo $form_CheckIn; ?>"+'','.:: CheckIn ::.','#');
			}),
			$('.btn_checkout').on('click', function() {  //checkIn
				load_page("<?php echo $form_CheckOut; ?>"+'','.:: CheckOut ::.','#');
			}),
			$('.btn_clean').on('click', function() {  //Clean
				alert('ห้อง A'+$(this).data('num_room'));
			}),
			$('.btn_reservation').on('click', function() {  //Reservation
				load_page("<?php echo $form_reservation; ?>"+'','.:: Reservation ::.','#');
			}).popover('hide')
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
</script>


