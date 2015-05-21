<script src="<?php echo base_url('public/ckeditor_san_pham/ckeditor.js')?>"></script>
<?php $this->load->helper('form')?>
<h2>Thông Tin Sản Phẩm</h2>
  <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('san-pham/thuc-hien-xoa'.'/'.$sanpham['idsanpham']) ?>">
    <div class="form-group">
          <label class="control-label col-sm-2" for="idsanpham">Mã sản phẩm:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="idsanpham" value="<?php echo $sanpham['idsanpham'] ?>" disabled>
          </div>
    </div>
    
    <div class="form-group">
          <label class="control-label col-sm-2" for="tensanpham">Tên Sản Phẩm:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="tensanpham" id="tensanpham" value="<?php echo $sanpham['tensanpham'] ?>">
          </div>
          
          <label class="control-label col-sm-2" for="tensanphamurl">Tên URL:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="tensanphamurl" id="tensanphamurl" value="<?php echo $sanpham['tensanphamurl'] ?>">
          </div>
    </div>
    
    
     <div class="form-group">
          <label class="control-label col-sm-2" for="dongia">Đơn Giá:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="dongia" id="dongia" value="<?php echo $sanpham['dongia'] ?>">
          </div>
          
           <label class="control-label col-sm-2" for="sanphammoi">Sản phẩm mới </label>
          <div class="col-sm-1">
          <input type="checkbox"
           class="form-control"
            name="sanphammoi" 
            id="sanphammoi"
            <?php
            if($sanpham['sanphammoi']==1){
            ?>
            checked="checked"
            <?php } ?>
            >
          </div>
      </div>
      
       <div class="form-group">
          
          <label class="control-label col-sm-2" for="idloaisanpham">Loại:</label>
          <div class="col-sm-4">
              <select name="idloaisanpham">
              <?php
              foreach($lspselect as $lsp){
                ?>              
                    <option value="<?php echo $lsp['idloaisanpham']; ?>"
                     <?php if($lsp['idloaisanpham']==$sanpham['idloaisanpham']){?>
                     selected="selected" <?php } ?> >
                     <?php  echo $lsp['tenloaisp'] ?>
                     </option>              
              <?php
              
              }
              ?>
            </select>
          </div>
    </div>
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Xóa" name="xoa"></button>
      </div>
    </div>
  </form>
 