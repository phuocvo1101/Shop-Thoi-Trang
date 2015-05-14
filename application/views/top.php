<div id="topbar" class="hidden-phone">
            <div class="container">

                <div class="row">
                    <?php
                    if(isset($user)){
                        ?>
                        <div>
                            XIN CHÀO
                            <span> : </span>
                            <?php if(isset($user)){
                              echo $user['username'];  
                            }  ?>
                        </div>
                        <div>
                        <a href="<?php echo base_url('user/logout') ?>">ĐĂNG XUẤT</a>
                            
                        </div>
                        <?php
                    }else{
                        ?>
                        <div>
                        <a href="<?php echo base_url('user/register') ?>">
                            ĐĂNG NHẬP
                            <span> / </span>
                            ĐĂNG KÝ
                        </a>
                            
                        </div>
                        <?php
                    }
                     ?>
                    
                    <div>MỤC YÊU THÍCH</div>
                    <div>SO SÁNH</div>
                </div>



            </div>

            <div class="container">

                <div class="border"></div>
                <div class="border"></div>
                <div class="border"></div>
                <div class="borderstrong"></div>

            </div>
        </div>