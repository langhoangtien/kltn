<?php $this->load->view('admin/admin/head', $this->data)?>
<div class="line"></div>
<div class="wrapper">
<div class="widget">
	<div class="title">
			<h6>Thêm mới Admin</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			<div class="formRow">
				<label class="formLeft" for="param_name">Tên :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="name" value="<?php echo set_value('name')?>" id="param_name"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('name')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">password:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="password" <?php echo set_value('password')?> id="param_name" _autocheck="true" type="password" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('password')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Nhập lại mật khẩu:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="repassword" <?php echo set_value('repassword')?>id="param_name" _autocheck="true" type="password" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('repassword')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Email:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input <?php echo set_value('email')?>name="email" id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('email')?></div>
				</div>
				<div class="clear"></div>
		</div>
		
		
		<div class="formRow">
				<label class="formLeft" for="param_name">Địa chỉ:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="address" id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('address')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Số điện thoại:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="phone" id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"><?php echo form_error('phone')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Số CMT:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="idcard" id="param_name" _autocheck="true" type="text" /></span>
				
				<div name="name_error" class="clear error"> <?php echo form_error('idcard')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formSubmit">
	           			<input type="submit" value="Thêm mới" class="redB"/>
	           			
	     </div>

			</fieldset>
		</form>
	</div>
</div>
		 	
