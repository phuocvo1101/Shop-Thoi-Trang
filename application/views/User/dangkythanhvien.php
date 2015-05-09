<div class="row">
    <div style="">
    <p><h4>Đăng Nhập</h4></p>
        <form name='login' action='' method='POST'>
            <table style="width: 500px;">
                <tr>
                    <td>Tên đăng nhập or Email:</td>
                    <td><input type="text" size="50" name="login_user_email"  value="<?php echo set_value('login_user_email')?>"></td>
                    <div class="error" id="username_error"><?php echo form_error('login_user_email')?></div>
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td><input type="password" size="35" name="password"></td>
                    <div class="error" id="password_error"><?php echo form_error('password')?></div>
                </tr>

                <tr>
                    <td colspan="2" align="center"> <input type="submit" value="Đăng Nhập"></td>
                </tr>
            </table>
                
        </form>
    </div>
    
    <div style="width: 600px;">
        <p><h4>Lần đầu tiên mua hàng tại Cat Sa Shop? Hãy tạo một tài khoản.</h4></p>
        <form name='register' action='' method='POST'>
            <table style="width: 500px;">
                <tr>
                    <td>Tên đăng nhập:</td>
                    <td><input type="text" size="50" name="username"  value="<?php echo set_value('username')?>"></td>
                    <div class="error" id="username_error"><?php echo form_error('username')?></div>
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td><input type="password" size="35" name="password"></td>
                    <div class="error" id="password_error"><?php echo form_error('password')?></div>
                </tr>
                <tr>
                    <td>Nhập lại mật khẩu:</td>
                    <td><input type="password" size="35" name="re_password"></td>
                     <div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td> <input type="text" name="email" size="50"  value="<?php echo set_value('email')?>"></td>
                     <div class="error" id="email_error"><?php echo form_error('email')?></div>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="submit" value="Đăng ký"></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="#">Tiếp Tục Thanh Toán Mà Không Cần Đăng Ký</a></td>
                </tr>
            </table>
                
        </form>
    </div>

</div>

