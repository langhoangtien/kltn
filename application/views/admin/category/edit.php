<?php $this->load->view('admin/category/head', $this->data)?>
<div class="line"></div>
<div class="wrapper">
<div class="widget">
	<div class="title">
			<h6>Thêm mới Admin</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			<div class="formRow">
				<label class="formLeft" for="param_name">Tên sản phẩm :<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="name" value="<?php echo set_value('name')?>" id="param_name"_autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('name')?></div>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Ghi chú:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo"><input name="note" <?php echo set_value('note')?> id="param_name" _autocheck="true" type="text" /></span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"> <?php echo form_error('note')?></div>
				</div>
				<div class="clear"></div>s
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Hãng sản xuất:<span class="req">*</span></label>
				<div class="formRight">
				<td><select name="thuoctinh" class="form-control">
					<?php foreach($ds as $row){?>
						<option value="<?php echo $row->id?>"><?php echo $row->manufacture?></option>
							<?php }?>
					</select>
				</td>
				</div>
				<div class="clear"></div>
		</div>
		<div class="formRow">
				<label class="formLeft" for="param_name">Người khởi tạo :<span class="req">*</span></label>
				<div class="formRight">
				<td><select name="tenadmin" class="form-control">
					<?php foreach($list as $row){?>
						<option value="<?php echo $row->id?>"><?php echo $row->name?></option>
							<?php }?>
					</select>
				</td>
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
		 	
