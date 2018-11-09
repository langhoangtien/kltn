<?php $this->load->view('admin/admin/head', $this->data)?>
<div class="line"></div>
<div class="wrapper">
<div class="widget">
	<div class="title">
			<h6>Cập nhât Admin</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			<div class="formRow">
				<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="name" value="<?php echo $info ->name?>" id="param_name"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('name')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">password:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo">
					<input name="password" value="<?php echo $info ->password?>"" id="param_name" _autocheck="true" type="password" />
					<p>Nếu cập nhật mật khẩu thì mới nhập giá trị </p>
				</span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('password')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Nhập lại mật khẩu:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="repassword" value="" id="param_name" _autocheck="true" type="password" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('repassword')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Email:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input value=" <?php echo $info->email ?>" name="email" id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('email')?></div>
				</div>
				<div class="clear"></div>
		</div>
		
		
		<div class="formRow">
				<label class="formLeft" for="param_name">Địa chỉ:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="address" value=" <?php echo $info->address ?>"id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('address')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Số điện thoại:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="phone" value=" <?php echo $info->phone ?>"id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"><?php echo form_error('phone')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Số CMT:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="idcard" value=" <?php echo $info->idcard?>"id="param_name" _autocheck="true" type="text" /></span>
				
				<div name="name_error" class="clear error"> <?php echo form_error('idcard')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formSubmit">
	           			<input type="submit" value="Cập nhật" class="redB"/>
	           			
	     </div>

			</fieldset>
		</form>
	</div>
</div>
		 	
