<form>
<div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><?php echo $title_ds; ?></div>
      <div class="panel-body">
        <p><?php echo anchor('nguoi-dung/them','Thêm Người Dùng'); ?></p>
        <input type="text" name="search" id="search" placeholder="search: tennguoidung" value=""/>
        <input type="submit" name="ok" id="ok" value="search">
      </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã Người Dùng</th>
            <th>Tên Đăng nhập</th>
            <th>Tên Người Dùng</th>
            <th>Ngày Sinh</th>
            <th>Địa Chỉ</th>
            <th>Email</th>
            <th>Số Điện Thoại</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($dsnd){
            $i=1;
            foreach($dsnd as $item){
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $item['ma_nguoi_dung']; ?></td>
                    <td><?php echo $item['tendn']; ?></td>
                    <td><?php echo $item['ten_nguoi_dung']; ?></td>
                    <td><?php echo $item['ngay_sinh']; ?></td>
                    <td><?php echo $item['dia_chi']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['phone']; ?></td>
                    
                    <td>
                    <?php  echo anchor('nguoi-dung/cap-nhat/'.$item['ma_nguoi_dung'],'Cap Nhap','class= "btn btn-primary"');
                    echo ' | ';
                    echo anchor('nguoi-dung/xoa/'.$item['ma_nguoi_dung'],'Xoa','class= "btn btn-info"'); ?>
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