<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <link href="<?php echo base_url(); ?>public/dinhdang.css" rel="stylesheet">
    
  </head>

  <body  class="bg-body">
  <div id="wrapper" class="container group" >
  
    <!--top-->
    <?php
    $this->load->view('top');
    ?>
    <!-- menu-->
    <div>
            <?php
            $this->load->view('menu');
            ?>
    </div>
   
    <!--content-->
    <div id="primary">
            <div class="container group">
                <div class="row">
    
                <?php
                    if(isset($path)){
                        foreach($path as $path_view){
                            $this->load->view($path_view);
                        }
                    }
                ?>
            </div>
             <div class="border borderstrong borderpadding container"></div>
             <div class="border container"></div>
             <div class="border container"></div>
             <div class="border container"></div>
        </div>

    </div>
    
   
    <!--endcontent-->
    
      <!-- footer-->
     <?php
     $this->load->view('footer');
     ?>
    </div>
  </body>
</html>