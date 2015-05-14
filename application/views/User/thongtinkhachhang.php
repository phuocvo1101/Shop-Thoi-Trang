
<div align="center"  style="width: 800px; padding-left: 200px;">
        <p><h3>ĐĂNG KÝ THÔNG TIN KHÁCH HÀNG</h3></p>
        <form name='register' action='<?php echo site_url('user/thongtinkhachhang') ?>' method='POST'>
            <table style="width: 800px;">
                <tr>
                    <td>Họ Tên Khách Hàng:</td>
                    <td><input type="text" size="80" name="tenkhachhang"  value="<?php echo set_value('tenkhachhang')?>"></td>
                    <p class="error" id="tenkhachhang_error"><label><?php echo form_error('tenkhachhang')?></label></p>
                </tr>
                <tr>
                    <td>Địa Chỉ Khách Hàng:</td>
                    <td><input type="text" size="80" name="diachikhachhang"></td>
                    <p class="error" id="diachikhachhang_error"><?php echo form_error('diachikhachhang')?></p>
                </tr>
                <tr>
                    <td>Địa Chỉ Giao Hàng:</td>
                    <td><input type="text" size="80" name="diachigiaohang"></td>
                     <p class="error" id="diachigiaohang_error"><?php echo form_error('diachigiaohang')?></p>
                </tr>
                <tr>
                    <td>Giới Tính:</td>
                    <td>Nam <input type="checkbox" size="80" name="gioitinh"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td> <input type="text" name="email" size="80"  value="<?php echo set_value('email')?>"></td>
                     <p class="error" id="email_error"><?php echo form_error('email')?></p>
                </tr>
                 <tr>
                    <td>Điện Thoại:</td>
                    <td> <input type="text" name="dienthoai" size="80"  value="<?php echo set_value('dienthoai')?>"></td>
                     <p class="error" id="email_error"><?php echo form_error('dienthoai')?></p>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="submit" value="Đăng ký"></td>
                </tr>
                
            </table>
                
        </form>
    </div>
