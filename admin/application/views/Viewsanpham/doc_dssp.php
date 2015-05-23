<?php $this->load->helper('form'); ?>
<form action="<?php echo base_url('san-pham') ?>" method="POST">
<div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><?php echo $title_ds; ?></div>
      <div class="panel-body">
        <p><?php echo anchor('san-pham/them','Thêm Sản Phẩm'); ?></p>
        <input type="text" name="search" id="search" placeholder="search: tensanpham" value="<?php echo set_value('search') ?>"/>
        <input type="submit" name="ok" id="ok" value="search">
      </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã Sản Phẩm</th>
            <th>Hình</th>
            <th>Tên Sản Phẩm</th>
            <th>Tensanphamurl</th>
            <th>Đơn Giá</th>
            
            <th>Sản Phẩm Mới</th>
          </tr>
        </thead>
        <tbody>
       
        <?php
        if($dssp){
            $i=1;
            foreach($dssp as $item){
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $item['idsanpham']; ?></td>
                    <td><img src="<?php echo base_url('public/images').'/'.$item['hinh'] ?>" width="50px" height="50px"/></td>
                    <td><?php echo $item['tensanpham']; ?></td>
                    <td><?php echo $item['tensanphamurl']; ?></td>
                    <td><?php echo number_format($item['dongia']).' VND' ; ?></td>
                    
                    <td><?php echo $item['sanphammoi']; ?></td>
                    
                    <td>
                    <?php  echo anchor('san-pham/cap-nhat/'.$item['idsanpham'],'Cap Nhap','class= "btn btn-primary"');
                    echo ' | ';
                    echo anchor('san-pham/xoa/'.$item['idsanpham'],'Xoa','class= "btn btn-info"'); ?>
                    </td>
                    
                </tr>
                <?php
                $i++;
            }
        }
        ?>
        
         <tr>
            <td align="center" colspan="8">
                <ul class="pagination">
                
                    <?php
                    if(isset($link)){
                         echo $link;
                    }
                     ?>
                </ul>
            </td>                
         </tr>
        </tbody>
            
        
      </table>
    </div>
</form>