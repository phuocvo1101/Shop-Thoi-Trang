<form action="<?php echo base_url() ?>shop/show" method="post">
<table align= "center" style="border: 1px gray solid; width: 700px;">
    <tr><td colspan="5" align ="center"><h2>Hóa Đơn Khách Hàng</h2></td></tr>
    
    <tr>
        <td align="right">Tên Khách Hàng:</td>
        <td><?php echo $khachhang['tenkhachhang']; ?></td>
    </tr>
    <tr>
        <td align="right">Địa Chỉ Khách Hàng:</td>
        <td><?php echo $khachhang['diachikhachhang']; ?></td>
    </tr>
    <tr>
        <td align="right">Địa Chỉ Giao Hàng:</td>
        <td><?php echo $khachhang['diachigiaohang']; ?></td>
    </tr>
     <tr>
        <td align="right">Email:</td>
        <td><?php echo $khachhang['email']; ?></td>
    </tr>
    <tr>
        <td align="right">Số Điện Thoại:</td>
        <td><?php echo $khachhang['dienthoai']; ?></td>
    </tr>
    <tr align="center">
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Số Lượng</th>
        <th>Đơn Giá</th>
        <th>Thành Tiền</th>
    </tr>
    
    <?php foreach($giohang as $gh){
        ?>
        <tr align="center">
         
            <td><?php echo $gh['id']; ?></td>
            <td><?php echo $gh['name'] ;?></td>
            <td><input type="text" name="soluong[<?php echo $gh['id']; ?>]" size="5" value="<?php echo $gh['qty'] ?>" /></td>
            <td><?php echo number_format($gh['price']).' VND';?></td>
            <td><?php echo number_format($gh['subtotal']).' VND';  ?></td>
         </tr>
       
        <?php
    } ?>
    <tr>
        <td colspan="4" align='right'><h4>Tổng Trị Giá Đơn Hàng:</h4></td>
        <td align="center"><?php echo number_format($tongtien).' VND';  ?></td>
    </tr>
    <tr>
        <td colspan="5"><label style="color: red;">Xin chân thành cảm ơn quý khách.<br /> 
        Công Ty chúng tôi sẽ liên hệ với quý khách trong vòng 24h.</label> </td>
    </tr>
    
   
</table>
</form>
<p align="center"><a href="<?php echo base_url('user/hoantatdonhang'); ?>">HOÀN TẤT ĐƠN HÀNG</a></p>
