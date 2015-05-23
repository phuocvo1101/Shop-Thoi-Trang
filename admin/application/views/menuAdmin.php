<div class="navbar-wrapper" >
      <div class="container-fuild ">

        <nav class="navbar navbar-default navbar-static-top" >
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" >
              <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url('san-pham') ?>">Sản Phẩm</a></li>
                <li><a href="<?php echo site_url('nguoi-dung') ?>">Người Dùng</a></li>
                <li><a href="<?php echo site_url('khach-hang') ?>">Khách Hàng</a></li>
                <li><a href="<?php echo site_url('don-hang') ?>">Đơn Hàng</a></li>
                <li class="dropdown">
                    <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">
                    Thông Tin Khác <span class="caret"></span></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Địa Chỉ Shop</a></li>
                    <li><a href="#">Khuyến Mại</a></li>
                    <li><a href="#">Thông Tin Cần Biết</a></li>
                  </ul>
                </li>
                
              </ul>
              
              <ul class="nav navbar-nav navbar-right">
              <?php if($this->session->has_userdata('ten_nguoi_dung')){
                ?>
                    <li><a href="#" onclick="return false"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('ten_nguoi_dung') ?></a></li>
                    <li><a href="<?php echo site_url('dang-xuat') ?>"><span class="glyphicon glyphicon-log-out"></span> Đăng Xuất</a></li>
                <?php
                
              }else{
                ?>
                <li><a href="<?php echo site_url('dang-nhap') ?>"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</a></li>
                <?php
              } ?>
                   
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>