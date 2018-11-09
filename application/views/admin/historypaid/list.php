


<style type="text/css">
	/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
/* Popup box BEGIN */

.ptb5 {
    padding: 5px 0px !important;
}
</style>

	<div class="titleArea">
	<div class="wrapper">
		<?php $this->load->view('admin/message')?>
		<div class="pageTitle">
			<h5>CẦM ĐỒ</h5>
			<span>Quản lý hợp đồng cầm đồ </span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				<li ><a href="../admin/Historypaid/add">
					<img src="http://localhost/webproduct/public/admin/images/icons/control/16/add.png">
					<span>Thêm mới </span>
				</a></li>
				
				
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<!-- Main content wrapper -->
<div class="wrapper" id="main_product">
	<div class="widget">

		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>
			Danh sách hợp đồng cầm đồ		</h6>
			<div class="num f12">Số lượng: <b>0</b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			
			<thead>
				<tr>
					<td>Id</td>
					<td style="width:60px;">Tên KH</td>
					<td>Loại Tài sản</td>
					<td>VNĐ</td>
					<td>Ngày cầm</td>
					<td>Lãi đã đóng</td>
					<td>Tình trạng</td>
					<td>Ngày phải đóng lãi</td>
					<td>Nợ cũ </td>
					<td>Cập nhật </td>
				</thead>

				

				<tbody>
				<?php foreach ($list as $row):?>
				<tr onclick="view_data(<?php echo $row->id ?>)">
						
					<td><?php echo $row->id ?></td>
					<td><?php echo $row->fullname?></td>
					<td><?php echo $row->manufacture ?></td>
					<td><?php echo number_format($row->money) ?></td>
					<td><?php echo date('d-m-Y',strtotime($row->paiddate)); ?></td>
					<td><?php echo 0?></td>
					<td><?php echo "Đang cầm"?></td>	
					<td><?php echo date('d-m-Y',strtotime($row->updatedat))?></td>	
					<td> </td>
					<td>
					 	<a href ="<?php echo admin_url('Historypaid/add_paid/'.$row->id)?>" title="Thanh toán"  class="tipS "><img src="<?php echo public_url('admin')?>/images/icons/color/money.png" /></a>
					 	
						<a href="<?php echo admin_url('Historypaid/list_view/')?>" title="Lịch sử thanh toán " class="tipS "><img src="<?php echo public_url('admin')?>/images/icons/color/hand.png" />
						</a>
					</td>
				</tr>	
				<?php endforeach?>
			</tbody>
	</table>
</div>
</div>

<div class="clear mt30"></div>

	