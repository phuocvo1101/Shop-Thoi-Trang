
      <div class="content-right group">
                <div style="width: 870px;">
                    <h3>SẢN PHẨM MỚI</h3>

                    <ul class="product">
                         <?php
                        foreach($spmoi as $sp){
                         ?>
                         <li><a href="<?php echo base_url() ?>loaisanpham/chitietsanpham/<?php echo $sp['idsanpham'].'/'.$sp['idloaisanpham'] ?>"><img src="<?php echo base_url(). $sp['hinh1'] ?>" width="300px" height="449px"/></a></li>
                         <?php }?>
                    </ul>

                </div>

                <div style="width: 870px;">
                    <h3>DANH MỤC SẢN PHẨM</h3>

                    <ul class="product">
                         <?php
                            foreach($dssplimit as $sp){
                         ?>
                         <li><a href="<?php echo base_url() ?>loaisanpham/chitietsanpham/<?php echo $sp['idsanpham'].'/'.$sp['idloaisanpham'] ?>"><img src="<?php echo base_url(). $sp['hinh1'] ?>" width="300px" height="449px"/></a></li>
                         <?php }?>
                        
                    </ul>

                </div>

            </div>

</div>
            
