
	<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Thanh toán</h5>
			<span>Quản lý Thanh toán </span>
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
			<h6>Thanh toán</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			<div class="formRow">
				<label class="formLeft" for="fullname">Tên khách hàng:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input disabled="" name="fullname" value="<?php echo $data_info->fullname ?>" id="fullname"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('fullname')?></div>
				</div>
				<div class="clear"></div>
			</div>


			<div class="formRow">
				<label class="formLeft" for="interested_id">Số CMND:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input disabled="" name="interested_id" value="<?php echo $data_info->interested_id ?>" id="interested_id"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('interested_id')?></div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="formRow">
				<label class="formLeft" for="phone">Số điện thoại:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input disabled="" name="phone" value="<?php echo $data_info->phone ?>" id="param_name"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('phone')?></div>
				</div>
				<div class="clear"></div>
			</div>

		<div class="formRow">
				<label class="formLeft" for="address">Địa chỉ:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input disabled="" name="address"  value="<?php echo $data_info->address ?>" id="address" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('address')?></div>
				</div>
				<div class="clear"></div>
		</div>

		<div class="formRow">
				<label class="formLeft" for="status">Hình thức thanh toán  :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo">
					<select name="status" class="form-control">
					
						<option value="1">Tiền lãi</option>
						<option value="2">Tiềng gốc</option>
							
					</select>
				</span>
				<div name="name_error" class="clear error"> <?php echo form_error('category_id')?></div>
				</div>
				<div class="clear"></div>
		</div>

		<div class="formRow">
				<label class="formLeft" for="money">Tiền đóng  :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="money" <?php echo set_value('money')?> id="money" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('money')?></div>
				</div>
				<div class="clear"></div>
		</div>

		
		<div class="formSubmit">
	    	<input type="submit" value="Cập nhật " class="redB"/>   			
	     </div>

			</fieldset>
		</form>
	</div>
</div>

		 	
