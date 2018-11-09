

<?php $this->load->view('admin/category/head',$this->data)?>
<div class="wrapper" id="main_product">
	<div class="widget">

		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>
			Danh sách Khách hàng 		</h6>
			<div class="num f12">Số lượng: <b><?php echo $total ?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			<thead class="filter"><tr><td colspan="6">
				<form class="list_filter form" action="<?php echo admin_url('customer/index') ?>" method="get">
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
					<td>Tên Khách hàng </td>
					<td>Ngày sinh  </td>
					<td>SDT </td>
					<td>VND </td>
					<td>Địa chỉ  </td>
					<td>Lãi suất  </td>
					<td>Tài sản  </td>

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
					<td><?php echo $row->fullname ?></td>
					<td><?php echo $row->birthday ?></td>
					<td><?php echo $row->phone ?></td>
					<td><?php echo $row->money?></td>
					<td><?php echo $row->address?></td>
					<td><?php echo $row->interested_id?></td>
					<td><?php echo $row->category_id?></td>
					<td class="option">
					 	<a href ="<?php echo admin_url('customer/edit/'.$row->id)?>" title="Chỉnh sửa" class="tipS "><img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" /></a>
						<a href="<?php echo admin_url('customer/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action" ><img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
						</a>
					</td>
				</tr>	
				<?php endforeach?>
			</tbody>
	</table>
</div>
</div>

<div class="clear mt30"></div>

	