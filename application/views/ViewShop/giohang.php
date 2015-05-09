<form action="<?php echo base_url() ?>shop/show" method="post">
<?php if(isset($mssupdate)){
?>
    <div><h4><?php echo $mssupdate; ?></h4></div>
<?php
} ?>
<table align= "center" style="border: 1px gray solid; width: 700px;">
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
            <td><input type="text" name="soluong" size="5" value="<?php echo $gh['qty'] ?>" /></td>
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
        <td colspan="2" align="right"><input type="submit" name="capnhat" id="capnhat" value="Cập Nhật Giỏ Hàng" /> </td>
        <td colspan="2" align="right"><a href="<?php echo base_url() ?>user/register">Tiến Hành Thanh Toán</a> </td>
    </tr>
   
</table>
</form>
