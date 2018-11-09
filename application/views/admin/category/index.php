

<?php $this->load->view('admin/category/head',$this->data)?>


<!-- Main content wrapper -->
<div class="wrapper" id="main_product">
	<div class="widget">

		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>
			Danh sách sản phẩm			</h6>
			<div class="num f12">Số lượng: <b><?php echo $total ?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			<thead class="filter"><tr><td colspan="6">
				<form class="list_filter form" action="<?php echo admin_url('category/index') ?>" method="get">
					<table cellpadding="0" cellspacing="0" width="80%"><tbody>

						<tr>
							<td class="label" style="width:40px;"><label for="filter_id">Mã số</label></td>
							<td class="item"><input name="id" value="" id="filter_id" type="text" style="width:55px;" /></td>
							
							<td class="label" style="width:40px;"><label for="filter_id">Tên</label></td>
							<td class="item" style="width:155px;" ><input name="name" value="" id="filter_iname" type="text" style="width:155px;" /></td>
							
							
							<td style='width:150px ; background-color: grey'>
								<input type="submit" class="button blueB" value="Lọc" />
								<input type="reset" class="basic" value="Reset" onclick="window.location.href = '<?php echo base_url('admin/category')?>'; ">
							</td>
							
						</tr>
					</tbody></table>
				</form>
			</td></tr>
			
			<thead>
				<tr>
					<td style="width:21px;"><img src=<?php echo public_url('admin/images/icons/tableArrows.png')?> /></td>
					<td style="width:60px;">Mã số</td>
					<td>Tên Sản Phẩm</td>
					<td>Ghi chú </td>
					<td>Hãng xe  </td>
					<td>Người khởi tạo </td>
					<td>Ngày khởi tạo </td>
					<td>Ngày cập nhật  </td>
					<td>Hành động </td>
				</tr>
				</thead>

				<tfoot class="auto_check_pages">
					<tr>
						<td colspan="6">
							<div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="admin/product/del_all.html">
									<span style='color:white;'>Xóa hết</span>
								</a>
							</div>
							
							<div class="pagination">
			               <?php echo $page ?>
						</td>
					</tr>
				</tfoot>

				<tbody>
				<?php foreach ($list as $row):?>
				<tr class="row_<?php echo $row->id   ?>">
					<td><div class="checker" id="uniform-undefined"><span><input type="checkbox" name="id[]" value="<?php echo $row->id ?>" style="opacity: 0;"></span></div></td>
					<td><?php echo $row->id ?></td>
					<td><?php echo $row->name ?></td>
					<td><?php echo $row->note ?></td>
					<td><?php echo $row->manufacture ?></td>
					<td><?php echo $row->admin_name ?></td>
					<td><?php echo $row->createdat?></td>
					<td><?php echo $row->updatedat?></td>
					<td class="option">
					 	<a href ="<?php echo admin_url('category/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS "><img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" /></a>
						<a href="<?php echo admin_url('category/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" ><img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
						</a>
					</td>
				</tr>	
				<?php endforeach?>
			</tbody>
	</table>
</div>
</div>

<div class="clear mt30"></div>

	