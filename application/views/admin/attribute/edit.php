<?php $this->load->view('admin/attribute/head', $this->data)?>
<div class="line"></div>
<div class="wrapper">
<div class="widget">
	<div class="title">
			<h6>Cập nhât thuộc tính</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			<div class="formRow">
				<label class="formLeft" for="param_name">Hãng sản xuất:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="manufacture" value="<?php echo $info ->manufacture?>" id="param_name"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('manufacture')?></div>
				</div>
				<div class="clear"></div>
		</div>
		
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			<div class="formRow">
				<label class="formLeft" for="param_name">Loại xe:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="type" value="<?php echo $info ->type?>" id="param_name"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('type')?></div>
				</div>
				<div class="clear"></div>
		</div>
	
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			<div class="formRow">
				<label class="formLeft" for="param_name">Màu xe:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="color" value="<?php echo $info ->color?>" id="param_name"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('color')?></div>
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
		 	
