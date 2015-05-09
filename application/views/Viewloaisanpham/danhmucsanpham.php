<div class="row">
<div class="content-left group">
        <div>
            <h3>DANH MỤC SẢN PHẨM</h3>
        </div>
        <div class="danhmuc">
            <ul>
            <?php foreach($dmsp as $item){
            ?>
                <li> <a href="<?php echo base_url()?>loaisanpham/sanpham/<?php echo $item['id']; ?>" ><?php echo $item['name']; ?></a> </li>
            <?php    
            } ?> 
            </ul>
        </div>
         <div><h3>HỖ TRỢ TRỰC TUYẾN</h3></div>
    
    </div>
    