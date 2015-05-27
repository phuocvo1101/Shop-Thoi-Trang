<form action="" method="post">
<div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><?php echo $title_ds; ?></div>
      <div class="panel-body">
        <p><?php echo anchor('khach-hang/them','Thêm Khách Hàng'); ?></p>
        <input type="text" name="search" id="search" size="60px" placeholder="search: tenkhachhang, dienthoai, email" value="<?php echo $txtTim  ?>"/>
        <input type="submit" name="ok" id="ok" value="search">
      </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã Khách Hàng</th>
            <th>Tên Khách Hàng</th>
             <th>Giới Tính</th>
            <th>Địa Chỉ Khách Hàng</th>
            <th>Địa Chỉ Giao Hàng</th>
            <th>Email</th>
            <th>Số Điện Thoại</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($dskh){
            $i=1;
            foreach($dskh as $item){
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $item['idkhachhang']; ?></td>
                    <td><?php echo $item['tenkhachhang']; ?></td>
                    <td><?php echo $item['phai']==1?'Nam':'Nữ'; ?></td>
                    <td><?php echo $item['diachikhachhang']; ?></td>
                    <td><?php echo $item['diachigiaohang']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['dienthoai']; ?></td>
                    
                    <td>
                    <?php  echo anchor('khach-hang/cap-nhat/'.$item['idkhachhang'],'Cap Nhap','class= "btn btn-primary"');
                    echo ' | ';
                    echo anchor('khach-hang/xoa/'.$item['idkhachhang'],'Xoa','class= "btn btn-info"'); ?>
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