
  <?php $this->load->helper('form')?>
<h2>Thông Tin Đơn Hàng</h2>
  <form class="form-horizontal" role="form" method="post" action=""> 
  
    <div class="form-group">
          <label class="control-label col-sm-2" for="iddonhang">Mã Đơn Hàng:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="iddonhang" placeholder="Ma don hang" disabled>
          </div>
    </div>
    
    <div class="form-group">
          <label class="control-label col-sm-2" for="idkhachhang">Tên khách hàng:</label>
          <div class="col-sm-4">
              <select name="idkhachhang">
                  <?php foreach($khachhang as $item){
                    ?>
                    <option value="<?php echo $item['idkhachhang'] ?>">
                    <?php echo $item['tenkhachhang'] ?>
                    </option>
                    <?php
                  } ?>
                
              </select>
          </div>
          
    </div>
    
    <div class="form-group">
          <label class="control-label col-sm-2" for="trigiadonhang">Trị giá đơn hàng:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="trigiadonhang" id="trigiadonhang" value="<?php echo set_value('trigiadonhang') ?>" placeholder="tri gia don hang">
            <?php echo form_error('trigiadonhang') ?>
          </div>
          
    </div>
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Thêm" name="them"></button>
      </div>
    </div>
  </form>
 