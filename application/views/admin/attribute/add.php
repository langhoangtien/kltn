<?php $this->load->view('admin/attribute/head', $this->data)?>
<div class="line"></div>
<div class="wrapper">
<div class="widget">
	<div class="title">
			<h6>Thêm mới thuộc tính</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			<div class="formRow">
				<label class="formLeft" for="param_name">Hãng sản xuất:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="manufacture" value="<?php echo set_value('manufacture')?>" id="param_name"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('manufacture')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Loại xe:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="type" <?php echo set_value('type')?> id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('type')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Màu sắc:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="color" <?php echo set_value('color')?> id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('color')?></div>
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
		 	
