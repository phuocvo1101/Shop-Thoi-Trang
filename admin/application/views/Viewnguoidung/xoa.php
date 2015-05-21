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
<h2>Thông Tin Người Dùng</h2>
  <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('nguoi-dung/thuc-hien-xoa'.'/'.$nguoidung['ma_nguoi_dung']) ?>">
    <div class="form-group">
          <label class="control-label col-sm-2" for="ma_nguoi_dung">Mã Ngươi Dùng:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="ma_nguoi_dung" value="<?php echo $nguoidung['ma_nguoi_dung'] ?>" disabled>
          </div>
    </div>
    
    <div class="form-group">
          <label class="control-label col-sm-2" for="ten_nguoi_dung">Họ Tên:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="ten_nguoi_dung" id="ten_nguoi_dung" value="<?php echo $nguoidung['ten_nguoi_dung'] ?>">
          </div>
    </div>
    
     <div class="form-group">
          <label class="control-label col-sm-2" for="tendn">Tên Đăng nhập:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tendn" id="tendn" value="<?php echo $nguoidung['tendn'] ?>">
          </div>
    </div>
    
     <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $nguoidung['email'] ?>">
          </div>
      </div>
    
      
      <div class="form-group">
          <label class="control-label col-sm-2" for="phone">Điện Thoại</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $nguoidung['phone'] ?>">
          </div>
      </div>
    
      <div class="form-group">
          <label class="control-label col-sm-2" for="dia_chi">Địa Chỉ:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="dia_chi" id="dia_chi" value="<?php echo $nguoidung['dia_chi'] ?>">
          </div>
          <label class="control-label col-sm-2" for="gioi_tinh">Giới Tính: Nam</label>
          <div class="col-sm-1">
          <input type="checkbox"
           class="form-control"
            name="gioi_tinh" 
            id="gioi_tinh"
            <?php
            if($nguoidung['gioi_tinh']==1){
            ?>
            checked="checked"
            <?php } ?>
            >
          </div>
      </div>
     <div class="form-group">
          <label class="control-label col-sm-2" for="ngay_sinh">Ngay Sinh:</label>
          <div class="col-sm-4">
            <input type="text" id="datepicker" name="ngay_sinh" placeholder="Ngay Sinh" value="<?php echo $nguoidung['ngay_sinh'] ?>"> 
            <!-- <input type="date" class="form-control" name="ngay_sinh" id="ngay_sinh" > -->
          </div>
          <label class="control-label col-sm-2" for="ma_loai_nguoi_dung">Loại Người Dùng:</label>
          <div class="col-sm-4">
              <select name="ma_loai_nguoi_dung">
              <?php
              foreach($loainguoidung as $lnd){
                ?>              
                    <option value="<?php echo $lnd['ma_loai_nguoi_dung']; ?>"
                     <?php if($lnd['ma_loai_nguoi_dung']==$nguoidung['ma_loai_nguoi_dung']){?>
                     selected="selected" <?php } ?> >
                     <?php  echo $lnd['ten_loai'] ?>
                     </option>              
              <?php
              
              }
              ?>
            </select>
          </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Xoa" name="capnhat"></button>
      </div>
    </div>
  </form>
 