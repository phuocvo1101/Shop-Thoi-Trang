
<div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><?php echo $title_ds; ?></div>
      <div class="panel-body">
        <p><?php echo anchor('don-hang/them','Thêm sản phẩm đơn hàng'); ?></p>
      </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã Đơn Hàng</th>
            <th>Tên sản phẩm</th>
            <th>số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($chitiet){
            $i=1;
            foreach($chitiet as $item){
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $item['iddonhang']; ?></td>
                    <td><?php echo $item['idsanpham']; ?></td>
                    <td><?php echo $item['soluong']; ?></td>
                   <td><?php echo number_format($item['dongia']).' VND' ; ?></td> 
                    <td><?php echo number_format($item['thanhtien']).' VND' ; ?></td>                  
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