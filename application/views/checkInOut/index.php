<?php echo $header; ?>

<div class="panel panel-primary"  >
	<div class="panel-heading"><i class="glyphicon glyphicon-list"></i> บันทึกการเข้าพัก</div>
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
			<div class="col-sm-12 alert-warning text-center"><h3>ชั้น 1</h3></div>
			<div class=" col-sm-12 alert-info"  style="padding:20px;">
				<?php	for ($i = 1; $i <= 24; ++$i) :?>
					<div class="col-sm-2 ">
						<?php echo  $sho = ($i == 5 )?
						'<a  tabindex="0"  class="btn btn-danger col-sm-12 btn_room"  role="button"  data-num_room="'.$i.'"  style="margin:10px;" ><i class="fa fa-bed fa-lg" aria-hidden="true"></i><h5>A'.$i.'  <i class="fa fa-square" aria-hidden="true" style="background-color:orange;color:orange;"></i></h5></a>'
						:
						'<a  tabindex="0"  class="btn btn-default col-sm-12 btn_room"  role="button"  data-num_room="'.$i.'"    style="margin:10px;"><i class="fa fa-bed fa-lg " aria-hidden="true"></i><h5>A '.$i.'</h5></a>';?>
					</div>
				<?php endfor?>
			</div>
		</div>
	</div>
</div>
<div class="modal"> <!-- show form modal --> </div>
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
				'<button  class="btn btn-danger col-sm-12  btn-sm btn_checkout" style="margin-top:5px;" data-num_room="'+num_room+'"> CheckOut</button>'+
				'<button  class="btn btn-success col-sm-12 btn-sm btn_clean" style="margin-top:5px;"  data-num_room="'+num_room+'"> Clean</button>'+
				'<button  class="btn btn-warning col-sm-12 btn-sm btn_reservation" style="margin-top:5px;"  data-num_room="'+num_room+'"> จอง</button>'+
				'</div>',
				'html':true,
			}).popover('toggle'),
			$('.btn_checkin').on('click', function() {
				alert('ห้อง A'+$(this).data('num_room'));
			});
			$('.btn_checkout').on('click', function() {
				alert('ห้อง A'+$(this).data('num_room'));
			});
		});
	}
</script>


