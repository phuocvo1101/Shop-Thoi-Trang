<ul>                   
<?php 
    foreach($kq as $item) {
?>
         <li>
            <a href="<?php if(count($item['child'])==0){
                 echo base_url().'loaisanpham/sanpham/'.$item['id'];
            }else{
                echo '#';
            } ?>">
            <?= $item['name'] ?>
           <?php if(count($item['child'])>0){?>
            <span> ...............»</span>
            <?php }?>
            </a>
            <?php 
                if(count($item['child']) > 0) {
            ?>

                    <ul>
                           <?php
                                foreach($item['child'] as $itemChild) {
                           ?>
                                    <li>
                                        <a href="<?php echo base_url()?>loaisanpham/sanpham/<?php echo $itemChild['id']; ?>" ><?= $itemChild['name'] ?></a>
                                    </li>
                            <?php
                                }
                           ?>

                    </ul>
            <?php
                }
            ?>
           
        </li>
<?php 
    }
?>

  </ul>