<div class="gioithieu">
<div class="post-3086 page type-page status-publish hentry group instock" id="post-3086">
<?php foreach($diachi as $dc){
    echo $dc['chitiet'];
    if($dc['child']>0){
        foreach($dc['child'] as $item){
            echo $item['chitiet'];
        }
    }
    
} ?>
</div>
</div>