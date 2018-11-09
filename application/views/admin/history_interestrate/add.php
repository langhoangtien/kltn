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
    $( "#datepicker" ).datepicker();
   
  } );
  </script>
</head>
<div class="line"></div>
<div class="wrapper">
<div class="widget">
	<div class="title"><br/>
			<h6>Thêm mới lãi suất </h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			
		<div class="formRow">
				<label class="formLeft" for="param_name">Ngày bắt đầu :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="startdate" type="text" id="datepicker"></p></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('startdate')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			<div class="formRow">
				<label class="formLeft" for="param_name">Tỷ lệ lãi suất  :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="percent" value="<?php echo set_value('name')?>" id="param_name"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('name')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Ghi chú  :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="note" <?php echo set_value('note')?> id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('note')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">lựa chọn tên  lãi suất :<span class="req">*</span></label>
				<td><select name="tenls" class="form-control">
					<?php foreach($ds as $row){?>
						<option value="<?php echo $row->id?>"><?php echo $row->name?></option>
							<?php }?>
					</select>
				</td>
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
		 	
