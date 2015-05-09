<form>
 <table style="border: 1px gray solid;">
    <tr>
        <td colspan="2" align="center"><h2>Đăng Nhập</h2></td>
    </tr>
    <tr>
        <td><label style="size: 50px; text-align: left;" for="tendn">Tên Đăng nhập:</label></td>
        <td><input type="text" name="tendn" id="tendn" size="100px" value=""></td>
    </tr>
    <tr>
        <td><label style="size: 100px; text-align: left;" for="mat_khau">Mật Khẩu:</label></td>
        <td><input type="password" name="mat_khau" id="mat_khau" size="50px" value=""></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit"  value="Đăng Nhập" name="dangnhap"></button></td>
    </tr>
 </table>   
</form>
  
  <form class="t-form form_action" method="post" action="" name="login" >
                   
                  <div class="form-row">
                        <label for="param_email" class="form-label">Email:<span class="req">*</span></label>
                        <div class="form-item">
                            <input type="text" class="input" id="login_email" name="email" value="<?php echo set_value('email')?>">
                            <div class="clear"></div>
                            <div class="error" id="login_email_error"><?php echo form_error('email')?></div>
                        </div>
                        <div class="clear"></div>
                  </div>
                  <div class="form-row">
                        <label for="param_password" class="form-label">Mật khẩu:<span class="req">*</span></label>
                        <div class="form-item">
                            <input type="password" class="input" id="login_password" name="password">
                            <div class="clear"></div>
                            <div class="error" id="login_password_error"><?php echo form_error('password')?></div>
                        </div>
                        <div class="clear"></div>
                  </div>
                  <div class="form-row">
                        <label class="form-label">&nbsp;</label>
                        <div class="form-item">
                            <div class="error" id="login_error"><?php echo form_error('login')?></div>
                               <input type="submit" class="button"  name='login' value="Đăng nhập" >
                        </div>
                   </div>
            </form>
- See more at: http://hocphp.info/codeigniter-framework-chuc-nang-dang-nhap-dang-xuat/#sthash.GsEnsQcw.dpuf  