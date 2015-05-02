<div class="content-right group">
                <div style="width: 870px;">
                    <h2><?php echo $loaisanpham['tenloaisp'] ?></h2>

                    <ul class="product">
                    <?php
                    foreach($sanpham as $sp){
                     ?>
                     <li><img src="<?php echo base_url() ?>public/image/<?php echo $sp['hinh1'] ?>" width="300px" height="449px"/></li>
                     <?php }?>
                    </ul>

                </div>

 </div>