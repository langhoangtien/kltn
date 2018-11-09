 


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
		<div class="pageTitle">
			<h5>Lịch sử thanh toán</h5>
			<span>Quản lý lịch sử thanh toán</span>
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
			Lịch sử thanh toán	</h6>
			<div class="num f12">Số lượng: <b>0</b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			
			<thead>
				<tr>
					<td></td>
					<td style="width:60px;">Tên KH</td>
					<td>Số CMND</td>
					<td>Ngày trả</td>
					<td>Số tiền</td>
					<td>Loại thanh toán</td>
					<td>Người tiếp nhận</td>
				</thead>

				

				<tbody>
				<?php foreach ($list as $row):?>
				<tr onclick="view_data(<?php echo $row->id ?>)">
						
					<td><?php echo $row->id ?></td>
					<td><?php echo $row->fullname?></td>
					<td><?php echo "smnd" ?></td>
					<td><?php echo "tien" ?></td>
					<td><?php echo date('d-m-Y',strtotime($row->paiddate)); ?></td>
					<td><?php echo date('d-m-Y',strtotime($row->createdat))?></td>
					<td><?php echo date('d-m-Y',strtotime($row->updatedat))?></td>
					
				</tr>	
				<?php endforeach?>
			</tbody>
	</table>
</div>
</div>

<div class="clear mt30"></div>

	