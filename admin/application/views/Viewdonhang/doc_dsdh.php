
<div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><?php echo $title_ds; ?></div>
      <div class="panel-body">
        <p><?php echo anchor('don-hang/them','Thêm Đơn Hàng'); ?></p>
      </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã Đơn Hàng</th>
            <th>Tên Khách Hàng</th>
            <th>Trị Giá Đơn Hàng</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($dsdh){
            $i=1;
            foreach($dsdh as $item){
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $item['iddonhang']; ?></td>
                    <td><?php echo $item['tenkhachhang']; ?></td>
                    <td><?php echo number_format($item['trigiadonhang']).' VND' ; ?></td>     
                    <td>
                        <?php echo anchor('chi-tiet-don-hang/'.$item['iddonhang'],'Chi Tiết đơn hàng','class= "btn btn-primary"');?>
                    </td>                
                    <td>
                    <?php  echo anchor('don-hang/cap-nhat/'.$item['iddonhang'],'Cap Nhap','class= "btn btn-primary"');
                    echo ' | ';
                    echo anchor('don-hang/xoa/'.$item['iddonhang'],'Xoa','class= "btn btn-info"'); ?>
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