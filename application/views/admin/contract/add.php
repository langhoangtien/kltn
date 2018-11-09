<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' });
    $('#register_date').datepicker({ dateFormat: 'dd-mm-yy' });
    $('#paiddate').datepicker({ dateFormat: 'dd-mm-yy' });
    $('#make_year').datepicker({ dateFormat: 'yy' });

  });

  </script>
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
 	 
// Gọi ajax chọn khách hàng

  	$.ajax({
  		url : "<?php echo admin_url('customer/ajax_customer') ?>",
  		type : "post",
  		dataType:"json",
  		data : {

  		},
  		success : function (result){
  			var projects = result;
  			console.log(projects);

  			$( function() {
  				$( "#fullname" ).autocomplete({
  					minLength: 0,
  					source: projects,
  					focus: function( event, ui ) {
  						$( "#fullname" ).val( ui.item.fullname );
  						return false;
  					},
  					select: function( event, ui ) {
  						$("#fullname").val( ui.item.fullname );
  						$("#fullname_id").val( ui.item.id );
  						$("#idcard").val( ui.item.idcard );
  						$("#phone" ).val( ui.item.phone );
  						$("#address" ).val( ui.item.address );

  						return false;
  					}
  				})
  				.autocomplete( 'instance' )._renderItem = function( ul, item ) {
  					return $( '<li style="background: #48404063">' )
  					.append( '<div>' + item.fullname + '</div>' )
  					.appendTo( ul );
  				};
  			} );

  		}
  	});


  </script>
</head>
	<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>CẦM ĐỒ</h5>
			<span>Quản lý hợp đồng cầm đồ </span>
		</div>
		
		<div class="horControlB menu_action">
			
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>
<div class="wrapper">
<div class="widget">
	<div class="title">
			<h6>Thêm mới hồ sơ</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div> <input style="margin-left: 300px; margin-top: 15px; " ; type="radio" name="gender" id="male" checked value="new">   <label style="color: red; font-weight: bold" for="male">Khách hàng mới</label>
					<input style="margin-left: 50px; margin-top: 15px; " ; type="radio" name="gender" value="normal">   <label style="color: red; font-weight: bold" for="male">Khách hàng có trong hệ thống</label><br>
				</div>
			<div class="formRow">
<h4 style=" text-align: center; margin-top: 5px; margin-bottom: 5px">Thông tin khách hàng</h4>
				<label class="formLeft" for="fullname">Tên khách hàng:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="fullname" value="<?php echo set_value('fullname')?>" id="fullname"_autocheck="true" type="text" /></span>
				<input name="fullname_id" value="<?php echo set_value('fullname_id')?>" id="fullname_id"_autocheck="true" type="hidden" />
				<input name="action" value="normal" id="action"_autocheck="true" type="hidden" />
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('fullname')?></div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="formRow">
				<label class="formLeft" for="idcard">Số CMND:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="idcard" value="<?php echo set_value('interested_id')?>" id="idcard"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('interested_id')?></div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="formRow">
				<label class="formLeft" for="phone">Số điện thoại:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="phone" value="<?php echo set_value('phone')?>" id="phone"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('phone')?></div>
				</div>
				<div class="clear"></div>
			</div>

		<div class="formRow">
				<label class="formLeft" for="address">Địa chỉ:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="address" <?php echo set_value('address')?> id="address" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('address')?></div>
				</div>
				<div class="clear"></div>
		</div>

	

<h4 style=" text-align: center; margin-top: 5px; margin-bottom: 5px; font-weight: bold;">Thông tin sản phẩm </h4>
		<div class="formRow">
				<label class="formLeft" for="category_id">Loại sản phẩm  :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo">
					<select name="category_id" class="form-control">
					<?php foreach($list as $row){?>
						<option value="<?php echo $row->id?>"><?php echo $row->name?></option>
							<?php }?>
					</select>
				</span>
				<div name="name_error" class="clear error"> <?php echo form_error('category_id')?></div>
				</div>
				<div class="clear"></div>
		</div>

		<div class="formRow">
				<label  class="formLeft" for="name">Tên :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="name" <?php echo set_value('name')?> id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('name')?></div>
				</div>
				<div class="clear"></div>
		</div>
	<div class="formRow">
				<label class="formLeft" for="paiddate">Ngày đăng ký  :<span class="req">*</span></label>
				<div class="formRight">
			
					<span class="oneTwo"><input name="register_date" type="text" id="register_date"></p></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('paiddate')?></div>
				</div>
				<div class="clear"></div>
		</div>


		<div class="formRow">
				<label  class="formLeft" for="bks">Biển kiểm soát :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="bks" <?php echo set_value('bks')?> id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('bks')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label   class="formLeft" for="so_khung">số khung :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="so_khung" <?php echo set_value('so_khung')?> id="so_khung" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('so_khung')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label   class="formLeft" for="so_may">Số máy :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="so_may" <?php echo set_value('so_may')?> id="so_may" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('so_may')?></div>
				</div>
				<div class="clear"></div>
		</div>

			<div class="formRow">
				<label   class="formLeft" for="color">Màu sắc :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="color" <?php echo set_value('color')?> id="color" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('color')?></div>
				</div>
				<div class="clear"></div>
		</div>
			<div class="formRow">
				<label   class="formLeft" for="manufacture_year">Năm sản suất  :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="manufacture_year" <?php echo set_value('manufacture_year')?> id="manufacture_year" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('manufacture_year')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="money">Số tiền cầm :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="money" <?php echo set_value('money')?> id="money" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('money')?></div>
				</div>
				<div class="clear"></div>
		</div>

		<div class="formRow">
				<label class="formLeft" for="typepaid">Hình thức lãi :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo">
					<select name="typepaid" class="form-control">
						<option value="1">Lãi ngày</option>
						<option value="2">Lãi tháng </option>
					</select>
				</span>
				<div name="name_error" class="clear error"> <?php echo form_error('typepaid')?></div>
				</div>
				<div class="clear"></div>
		</div>

		<div class="formRow">
				<label class="formLeft" for="type">Lãi xuất  :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo">
					<select name="type" class="form-control">
						<option value="3">Lãi 3%</option>
						<option value="4">Lãi 4%</option>
					</select>
				</span>
				<div name="name_error" class="clear error"> <?php echo form_error('type')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="paiddate">Ngày vay :<span class="req">*</span></label>
				<div class="formRight">
			
					<span class="oneTwo"><input name="paiddate" type="text" id="paiddate"></p></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('paiddate')?></div>
				</div>
				<div class="clear"></div>
		</div>

		<div class="formRow">
				<label class="formLeft" for="param_name">Ghi chú :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="note" <?php echo set_value('note')?> id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('note')?></div>
				</div>
				<div class="clear"></div>
		</div>
		
		<div class="formSubmit">
	    	<input type="submit" value="Thêm mới " class="redB"/>   			
	     </div>

			</fieldset>
		</form>
	</div>
</div>

		 	
<script type="text/javascript">
	
</script>