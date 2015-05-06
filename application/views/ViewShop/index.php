 
                    <div class="content-right group">
                        <div style="width: 870px;">
                            <h3>CHI TIẾT SẢN PHẨM</h3>
                            <div>
                                <img src="<?php echo base_url().$chitietsp['hinh1'] ?>" width="300px" height="449px"/>
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
                             <?php foreach($spcungloai as $spcl){
                                ?>
                                 <li><img src="<?php echo base_url().$spcl['hinh1'] ?>" width="300px" height="449px"/></li>
                                <?php
                            } ?>
                               
                                
                            </ul>

                        </div>

                    </div>
                    
                    <div class="content-left group" style="padding-top: 80px; padding-right: 20px;">
                      <div style="background-color:ghostwhite;">
                              <form>
                                <table style="border: 1px solid black;width: 250px;height: 300px;">
                                    <tr>
                                    <td colspan="2"> ĐĂT HÀNG</td>
                                    </tr>
                                    <tr>
                                        <td>Giá:</td>
                                        <td><?php echo number_format($chitietsp['dongia']).' VND';  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Số Lượng:</td>
                                        <td><input type="text" name="soluong" id="soluong" /></td>
                                    </tr>
                                    <tr>
                                        <td>Chọn Size:</td>
                                        <td>
                                            <select>
                                                <option>m</option>
                                                <option>l</option>
                                                <option>xl</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr><td colspan="2" align="center"><input type="submit" value="MUA" name="submitmua" /></td></tr>
                                </table>
                            </form>
                    
                    </div>
                  
                      

                    </div>

   