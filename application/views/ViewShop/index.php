 
            <div class="row">
                <div class="content-right group">
                        <div style="width: 840px;">
                            <h3>CHI TIẾT SẢN PHẨM</h3>
                            <?php if(isset($mss)){
                                ?>
                                <label style="color: red;"><h3><?php echo $mss; ?></h3></label>
                            
                                <?php
                            } ?>
                            <div>
                                <img src="<?php echo base_url('admin/public/images').'/'.$chitietsp['hinh'] ?>" width="300px" height="449px"/>
                            </div>
                            <div style="width: 500px; padding-left: 30px;" > 
                              <p>Mã Sản Phẩm:<?php echo $chitietsp['idsanpham'] ?></p>
                              <hr /> <hr /> <hr />
                              <p>Price:<?php echo number_format($chitietsp['dongia']).' VND';  ?> </p>  
                              <p>Mô Tả: <?php echo $chitietsp['chitietsp'] ?></p>
                                                          
                            </div>


                        </div>

                        <div style="width: 870px;">
                            <h3>SẢN PHẨM CÙNG LOẠI</h3>
                           
                            <ul class="product">
                             <?php
                             if($spcungloai){
                                foreach($spcungloai as $spcl){
                             
                                ?>
                                 <li><a href="<?php echo base_url() ?>loaisanpham/chitietsanpham/<?php echo $spcl['idsanpham'].'/'.$spcl['idloaisanpham'] ?>"><img src="<?php echo base_url('admin/public/images').'/'.$spcl['hinh'] ?>" width="300px" height="449px"/></a></li>
                                <?php
                                }
                            }else{
                                ?>
                                <li><span style="width: 300px; height: 449px;">San Pham Cong Ty Dang cap nhat</span></li>
                                <?php
                            } ?>
                               
                                
                            </ul>

                        </div>

                    </div>
                    <div><a href="<?php echo base_url() ?>shop/show"><h2>XEM GIỎ HÀNG >></h2></a></div>
                    <div class="content-left group" style="padding-top: 80px; padding-right: 20px;">
                      <div style="background-color:ghostwhite;">
                              <form action="" method="post">
                                <table style="border: 1px solid black;width: 230px;height: 300px;">
                                    <tr>
                                    <td colspan="2"> ĐẶT HÀNG</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="tensanpham" readonly value="<?php echo $chitietsp['tensanpham'] ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td>Mã Sản Phẩm:</td>
                                        <td><input type="text" name="masanpham" readonly value="<?php echo $chitietsp['idsanpham'] ?>" /></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Giá:</td>
                                        <td><input type="text" name="gia" value="<?php echo number_format($chitietsp['dongia']).' VND';  ?>" readonly /></td>
                                    </tr>
                                    <tr>
                                        <td>Số Lượng:</td>
                                        <td><input type="text" name="soluong" id="soluong" /></td>
                                    </tr>
                                    <tr>
                                        <td>Chọn Size:</td>
                                        <td>
                                            <select name="size">
                                            <?php foreach($size as $sz){
                                            ?>
                                                <option value="<?php echo $sz['idsize'] ?>"><?php echo $sz['tensize'] ?></option>
                                            <?php
                                            } ?>
                                                
                                            </select>
                                        </td>
                                    </tr>
                                    <tr><td colspan="2" align="center"><input type="submit" value="MUA" name="submitmua" /></td></tr>
                                </table>
                            </form>
                    
                        </div>
                  
                    </div>

            
            </div>
                    
   