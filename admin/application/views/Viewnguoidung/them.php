<script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "<?php echo base_url('public/images') ?>/calendar.gif",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  });
  </script>
  <?php $this->load->helper('form')?>
<h2>Thông Tin Người Dùng</h2>
  <form class="form-horizontal" role="form" method="post" action=""> 
  
    <div class="form-group">
          <label class="control-label col-sm-2" for="ma_nguoi_dung">Mã Người Dùng:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="ma_nguoi_dung" placeholder="Ma Nguoi dung" disabled>
          </div>
    </div>
    
    <div class="form-group">
          <label class="control-label col-sm-2" for="ten_nguoi_dung">Họ Tên:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="ten_nguoi_dung" id="ten_nguoi_dung" value="<?php echo set_value('ten_nguoi_dung') ?>" placeholder="Họ Tên">
            <?php echo form_error('ten_nguoi_dung') ?>
          </div>
          
    </div>
    
     <div class="form-group">
          <label class="control-label col-sm-2" for="tendn">Tên Đăng nhập:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tendn" id="tendn" value="<?php echo set_value('tendn') ?>" placeholder="Tên Đăng nhập">
            <?php echo form_error('tendn') ?>
          </div>
          
    </div>
    
     <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email') ?>" placeholder="Email">
          <?php echo form_error('email') ?>  
          </div>
          
      </div>
    
     <div class="form-group">
          <label class="control-label col-sm-2" for="mat_khau">Mật Khẩu:</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" name="mat_khau" id="mat_khau" placeholder="Mật Khẩu">
            <?php echo form_error('mat_khau') ?>
          </div>
          <label class="control-label col-sm-2" for="mat_khau_xac_nhan">Mật Khẩu Xác Nhận:</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" name="mat_khau_xac_nhan" id="mat_khau_xac_nhan" placeholder="Mật Khẩu Xác Nhận">
          <?php echo form_error('mat_khau_xac_nhan') ?>
          </div>
     </div>
      
      <div class="form-group">
          <label class="control-label col-sm-2" for="phone">Điện Thoại</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo set_value('phone') ?>" placeholder="Điện Thoại">
            <?php echo form_error('phone') ?>
          </div>
      </div>
    
      <div class="form-group">
          <label class="control-label col-sm-2" for="dia_chi">Địa Chỉ:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="dia_chi" id="dia_chi" value="<?php echo set_value('dia_chi') ?>" placeholder="Địa Chỉ">
          </div>
          <label class="control-label col-sm-2" for="gioi_tinh">Giới Tính: Nam</label>
          <div class="col-sm-1">
            <input type="checkbox"
             class="form-control" name="gioi_tinh" id="gioi_tinh"
              placeholder="Phái">
          </div>
      </div>
     <div class="form-group">
          <label class="control-label col-sm-2" for="ngay_sinh">Ngay Sinh:</label>
          <div class="col-sm-4">  
           <input type="text" id="datepicker" name="ngay_sinh" value="<?php echo set_value('ngay_sinh') ?>" placeholder="Ngay Sinh"> 
           <!-- <input type="date" class="form-control" name="ngay_sinh" id="ngay_sinh" placeholder="Ngay Sinh"/> -->
          <?php echo form_error('ngay_sinh') ?>
          </div>
          <label class="control-label col-sm-2" for="ma_loai_nguoi_dung">Loại Người Dùng:</label>
          <div class="col-sm-4">
              <select name="ma_loai_nguoi_dung">
              <?php
              foreach($loainguoidung as $lnd){
                ?>               
                    <option value="<?php echo $lnd['ma_loai_nguoi_dung']; ?>"><?php echo $lnd['ten_loai'] ?></option>                
              <?php
              }
              ?>
            </select>
          </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Thêm" name="them"></button>
      </div>
    </div>
  </form>
 