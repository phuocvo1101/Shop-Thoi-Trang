
  <?php $this->load->helper('form')?>
<h2>Thông Tin Khách Hàng</h2>
  <form class="form-horizontal" role="form" method="post" action=""> 
  
    <div class="form-group">
          <label class="control-label col-sm-2" for="idkhachhang">Mã Khách Hàng:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="idkhachhang" placeholder="Ma Nguoi dung" disabled>
          </div>
    </div>
    
    <div class="form-group">
          <label class="control-label col-sm-2" for="tenkhachhang">Tên Khách Hàng:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="tenkhachhang" id="tenkhachhang" value="<?php echo set_value('tenkhachhang') ?>" placeholder="Họ Tên">
            <?php echo form_error('tenkhachhang') ?>
          </div>
           <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email') ?>" placeholder="Email">
          <?php echo form_error('email') ?>  
          </div>
          
    </div>
    
    
    <div class="form-group">
          <label class="control-label col-sm-2" for="diachikhachhang">Địa Chỉ Khách Hàng:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="diachikhachhang" id="diachikhachhang" value="<?php echo set_value('diachikhachhang') ?>" placeholder="Địa Chỉ">
            <?php echo form_error('diachikhachhang') ?>  
          </div>
          <label class="control-label col-sm-2" for="diachigiaohang">Địa Chỉ Giao Hàng:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="diachigiaohang" id="diachigiaohang" value="<?php echo set_value('diachigiaohang') ?>" placeholder="Địa Chỉ">
             <?php echo form_error('diachigiaohang') ?>  
          </div>
          
      </div>
       <div class="form-group">
          
           <label class="control-label col-sm-2" for="dienthoai">Điện Thoại</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="dienthoai" id="dienthoai" value="<?php echo set_value('dienthoai') ?>" placeholder="Điện Thoại">
            <?php echo form_error('dienthoai') ?>
          </div>
          <label class="control-label col-sm-2" for="phai">Giới Tính: Nam</label>
          <div class="col-sm-1">
            <input type="checkbox"
             class="form-control" name="phai" id="phai"
              placeholder="Phái">
          </div>
        </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Thêm" name="them"></button>
      </div>
    </div>
  </form>
 