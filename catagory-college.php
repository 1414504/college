<?php
$con = new mysqli("ap-cdbr-azure-east-c.cloudapp.net", "b1236d751c9714", "41e55854", "acsm_dd5dc4ba52b59d7");
                            if(mysqli_errno($con))
                            {
                                die(mysqli_error($con)." error connection failed.");
                            }
                            
                            $sql = "select * from collegeTable where lower(college_category)=lower('$category')";
                            
                            $result = $con->query($sql);
                            $con->close();
                            if(mysqli_num_rows($result)>0)
                            {                                
                                while($college = mysqli_fetch_array($result))
                                {
                                    ?>
                                        <div class = "row margin-top">
                        <div class="col-md-6">
                            <input value="<?php echo $college['college_name']; ?>" class="form-control">
                        </div>
                        
                    </div>
                    
                      <div class = "row margin-top">
                          <div class="col-md-6">
                            <input value="<?php echo $college['college_category']; ?>" class="form-control">
                        </div>
                        
                    </div>
                    
                      <div class = "row margin-top">
                          <div class="col-md-9">
                              <textarea class="form-control"> <?php echo $college['college_summary']; ?> </textarea>
                        </div>
                        
                    </div>
                    
                    <hr>
                    
                    
                    <?php
                                }
                            }
                            
                            
                    ?>