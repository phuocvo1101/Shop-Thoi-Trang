<div class="content-right group">
                <div style="width: 870px;">
                    <h2><?php echo $loaisanpham['tenloaisp'] ?></h2>

                    <ul class="product">
                    <?php
                    foreach($sanpham as $sp){
                     ?>
                     <li><a href="<?php echo base_url() ?>loaisanpham/chitietsanpham/<?php echo $sp['idsanpham'].'/'.$sp['idloaisanpham'] ?>"><img src="<?php echo base_url('admin/public/images').'/'.$sp['hinh'] ?>" width="300px" height="449px"/></a></li>
                     <?php }?>
                    </ul>
                    
                  
                </div>
                <p align="center"><?php echo $links; ?></p>

 </div>