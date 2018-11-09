
<div class="box-center"><!-- The box-center product-->
             <div class="tittle-box-center">
		        <h2>Kết quả tìm kiếm với từ khóa "<?php echo $key?>"</h2>
		      </div>
		      <div class="box-content-center product"><!-- The box-content-center -->
		            <?php foreach ($list as $row):?>
		            <div class="product_item">
                       <h3>
                         <a title="<?php echo $row->name?>" href="<?php echo base_url('product/view/'.$row->id)?>">
                              <?php echo $row->name?>	                    
                          </a>
	                   </h3>
                     
          
		    
</div>
