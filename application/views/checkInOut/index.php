<?php echo $header; ?>

<!-- <div class="panel panel-primary"  style="padding:10px;"> -->
<!-- <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> บันทึกการเข้าพัก</div> -->
<div class="navbar navbar-default " style="padding-top: 5px;">
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
			<label for="search">ช่วงวันที่พัก: </label>
			<input type="text" class="form-control" id="search" placeholder="-- หมายเลขห้อง --">
			ถึง
			<input type="text" class="form-control" id="search" placeholder="-- หมายเลขห้อง --">
			ประเภทห้อง
			<select class="form-control">
				<option>STANDDARD</option>
				<option>VIP</option>
			</select>
			<button  class="btn btn-default"><i class="glyphicon glyphicon-search"></i> </button>
		</div>
	</div>
</div>

<div class="panel-body " >
	<div class="row">
		<div class="col-sm-6 pull-right">
			<p class="pull-right">
				<button  class="btn btn-primary  btn-lg checked_room"> เช่าห้อง</button>
				<button  class="btn btn-warning  btn-lg"> จองห้อง</button>
				<!-- <button  class="btn btn-danger  btn-md   btn_checkin" style="margin-top:5px;" > CheckIn</button>
				<button  class="btn btn-default  btn-md  btn_checkout" style="margin-top:5px;" > CheckOut</button>
				<button  class="btn btn-success btn-md   btn_clean" style="margin-top:5px;"  > Clean</button>
				<button  class="btn btn-warning btn-md   btn_reservation" style="margin-top:5px;"  > จอง</button>
				<button  class="btn btn-primary btn-md   btn_reservation" style="margin-top:5px;"  >  ย้ายห้อง</button> -->
			</p>
		</div>
		<div class="cleanfix"></div>
		<!-- <div class="col-sm-12 alert-warning text-left"><h3>ชั้น 1 </div></div> -->
		<h3>FLOOR 1 </h3>
		<div class=" col-sm-12 alert-default"  >
			<?php	//for ($i = 1; $i <= 24; ++$i) :?>
			<div class="col-sm-1 " style="margin-left:10px;">
				<span class="button-checkbox ">
					<button type="button" class="btn" data-color="danger" style="width:120px;">
						<i class="fa fa-bed fa-2x" aria-hidden="true">&nbsp;</i><i class="fa fa-bed fa-2x" aria-hidden="true"></i>
						<h4>201</h4>
					</button>
					<input type="checkbox" class="hidden check_room" name="check_room[]" id="room201" value="room201" />
				</span>
			</div>
			<div class="col-sm-1 " style="margin-left:10px;">
				<span class="button-checkbox ">
					<button type="button" class="btn" data-color="danger" style="width:120px;">
						<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
						<h4>202</h4>
					</button>
					<input type="checkbox" class="hidden check_room" name="check_room[]" id="room202" value="room202" />
				</span>
			</div>
			<div class="col-sm-1 " style="margin-left:10px;">
				<span class="button-checkbox ">
					<button type="button" class="btn" data-color="danger" style="width:120px;">
						<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
						<h4>203</h4>
					</button>
					<input type="checkbox" class="hidden check_room" name="check_room[]" id="room203" value="room203" />
				</span>
			</div>
			<div class="col-sm-1 " style="margin-left:10px;">
				<span class="button-checkbox ">
					<button type="button" class="btn" data-color="danger" style="width:120px;">
						<i class="fa fa-bed fa-2x" aria-hidden="true">&nbsp;</i><i class="fa fa-bed fa-2x" aria-hidden="true"></i>
						<h4>204</h4>
					</button>
					<input type="checkbox" class="hidden check_room" name="check_room[]" id="room204" value="room204" />
				</span>
			</div>
			<div class="col-sm-1 " style="margin-left:10px;">
				<span class="button-checkbox ">
					<button type="button" class="btn" data-color="danger" style="width:120px;">
						<i class="fa fa-bed fa-2x" aria-hidden="true"></i>
						<h4>205</h4>
					</button>
					<input type="checkbox" class="hidden check_room" name="check_room[]" id="room205" value="room205" />
				</span>
			</div>
			<?php //endfor?>
		</div>
	</div>
</div>
<!-- </div> -->
<div class="div_modal"> <!-- show form modal --> </div>
<?php echo $footer; ?>
<script type="text/javascript">
	$(function(){
		$('.checked_room').click(function(){
			var roomNumber=[];
			$('.check_room:checked').each(function( index,r ) {
				// console.log($('#'+r.id+':checked').val());
				roomNumber.push('ห้อง '+$('#'+r.id+':checked').val());
			});
			alert(roomNumber);
		});
	});
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


