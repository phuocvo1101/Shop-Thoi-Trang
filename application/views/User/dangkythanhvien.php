
<div class="row">
    <div style="">
    <?php if(isset($mss)){
        ?>
        <span style="color: red;"><?php echo $mss; ?></span>
        <?php
    
    } ?>
    <p><h4>Đăng Nhập</h4></p>
        <form name='login' action='<?php echo base_url('user/login') ?>' method='POST'>
            <table style="width: 500px;">
                <tr>
                    <td>Tên đăng nhập or Email:</td>
                    <td><input type="text" size="50" name="user_email"  value="<?php echo set_value('user_email')?>"></td>
                    <p class="error" id="username_error"><?php echo form_error('user_email')?></p>
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td><input type="password" size="35" name="password"></td>
                    <p class="error" id="password_error"><?php echo form_error('password')?></p>
                </tr>

                <tr>
                    <td colspan="2" align="center"> <input type="submit" name="login" value="Đăng Nhập"></td>
                </tr>
            </table>
                
        </form>
    </div>
    
    <div style="width: 600px;">
        <p><h4>Lần đầu tiên mua hàng tại Cat Sa Shop? Hãy tạo một tài khoản.</h4></p>
        <form name='register' action='<?php echo site_url('user/register') ?>' method='POST'>
            <table style="width: 500px;">
                <tr>
                    <td>Tên đăng nhập:</td>
                    <td><input type="text" size="50" name="username"  value="<?php echo set_value('username')?>"></td>
                    <p class="error" id="username_error"><label><?php echo form_error('username')?></label></p>
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td><input type="password" size="35" name="password"></td>
                    <p class="error" id="password_error"><?php echo form_error('password')?></p>
                </tr>
                <tr>
                    <td>Nhập lại mật khẩu:</td>
                    <td><input type="password" size="35" name="re_password"></td>
                     <p class="error" id="re_password_error"><?php echo form_error('re_password')?></p>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td> <input type="text" name="email" size="50"  value="<?php echo set_value('email')?>"></td>
                     <p class="error" id="email_error"><?php echo form_error('email')?></p>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="submit" value="Đăng ký"></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="<?php echo base_url('user/thongtinkhachhang') ?>">Tiếp Tục Thanh Toán Mà Không Cần Đăng Ký</a></td>
                </tr>
            </table>
                
        </form>
    </div>

</div>

