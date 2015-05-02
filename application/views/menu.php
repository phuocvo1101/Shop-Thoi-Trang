<div id="header" class="group button">
            <div class="group container">
                <div id="logo-container" class="row">
                    <div id="logo" class="group" >
                        <a href="#"><img src="<?php echo base_url() ?>public/image/logo-catsashop.jpg"></a>
                        <p id="tagline">Chuyên cung cấp sỉ và lẻ thời trang nam</p>
                    </div>

                    <div id="header-cart-search">

                        <div class="cart-row group">
                            <div class="cart-item cart-item-icon">
                                <span class="cart-items-number">0</span>
                                <span class="cart-items-label">Sản Phẩm</span>
                            </div>
                            <div class="cart-subtotal" >
                                <span class="cart-subtotal-integer">0</span>
                                <span class="cart-subtotal-decimal"></span>
                                <span class="cart-subtotal-currency"> VND</span>
                            </div>
                            <div  class="widget woocommerce widget_shopping_cart">
                                GIỎ HÀNG
                            </div>
                        </div>

                        <div class="widget widget_search_mini">
                            <form class="search_mini" method="get" action="http://catsashop.com/">
                                <input id="search_mini" type="text" placeholder="Tìm kiếm..." value="" name="s">
                                <input type="hidden" value="product" name="post_type">
                                <input id="mini-search-submit" type="submit" value="">
                            </form>
                        </div>

                    </div>



                    <div id="header-sidebar" class="group hidden-phone">
                        <div id="text-image-2" class="widget-1 widget-first widget text-image">
                            <div>
                                <img width="36" height="43" alt="" src="<?php echo base_url() ?>public/image/thanhtoan.png">
                            </div>
                            <div>
                                <p style="font-size:11px;">THANH TOÁN AN TOÀN</p>
                                <p style="font-size:11px;">GIAO HÀNG TẬN NƠI</p>
                            </div>
                        </div>
                        <div  id="text-image-3" class="widget-2 widget text-image">
                            <div>
                                <img width="16" height="43" alt="" src="<?php echo base_url() ?>public/image/phone.png">
                            </div>
                            <div>
                                <span style="font-size:15px; color:green; font-weight:bold;">0909.547.175</span>
                                <p style="font-size:15px; color:green; font-weight:bold;">0909.574.689</p>
                            </div>

                        </div>

                        <div  id="text-2" class="widget-3 widget-last widget widget_text">
                            <a href="#">
                                <span align="center" style="font-weight:bold; font-size:14px; font-color:FF0000; width: 380px;">HƯỚNG DẪN MUA HÀNG</span>
                            </a>
                        </div>


                    </div>


                </div>


            </div>


            <div id="nav">
                <div class="container">
                    <ul>
                        <li>
                            <a href="<?php echo base_url()?>">HOME »</a>
                            <ul>
                                <li><a href="<?php echo base_url()?>Home/thongtin/gioithieu">Giới thiệu</a></li>
                                <li><a href="<?php echo base_url()?>Home/thongtin/lienhe">Liên hệ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>Shop">
                                VÀO SHOP »
                            </a>
                            <?php $this->load->view('menu_top') ?>
                        </li>

                        <li>
                            <a href="#">
                               Cuộc thi CS-MODEL »
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Thể lệ cuộc thi CS-MODEL</a>
                                </li>
                                <li>
                                    <a href="#">Qui định cuộc thi CS-MODEL</a>
                                </li>
                                <li>
                                    <a href="#">
                                        ĐĂNG KÝ DỰ THI CS-MODEL
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Hình ảnh cuộc thi</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>DiaChiShop">ĐỊA CHỈ SHOP</a>
                        </li>
                        <li>
                            <a href="#">
                                THÔNG TIN CẦN BIẾT
                                <span> »</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Câu hỏi thường gặp</a>
                                </li>
                                <li>
                                    <a href="#">Hướng dẫn đặt hàng</a>
                                </li>
                                <li>
                                    <a href="#">Hướng dẫn lấy sỉ quần áo Cát Sa</a>
                                </li>
                                <li>
                                    <a href="#">Tài khoản ngân hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">KHUYẾN MÃI</a>
                        </li>
                    </ul>
                </div>
                <div class="border borderstrong borderpadding container"></div>
                <div class="border container"></div>
                <div class="border container"></div>
                <div class="border container"></div>





            </div>
        </div>
