<form action="" method="POST"> 
                   

                    <div class = "row" style="margin-top: 10px;">
                        <div class="col-md-3"> college Name</div>
                        <div class="col-md-9"> 
                            <input name="college_name" type="text" class="form-control" required=""> </div>
                    </div>
                    
                      
                    
                    <div class = "row" style="margin-top:10px;">
                        <div class="col-md-3"> college summary</div>
                        <div class="col-md-9"> 
                            <textarea name="college_summary" class="form-control" required=""></textarea> </div>
                    </div>
                    
                      
                    
                    <div class = "row" style="margin-top: 10px;">
                        <div class="col-md-3"> college Category </div>
                        <div class="col-md-9"> 
                            <input name="college_category" type="text" class="form-control" required=""></div>
                    </div>
                    
                    
                    
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-2" style="float:right;">
                            <input type="submit" name="save_college" value="Submit" class="form-control">
                            
                        </div>
                        
                    </div>
 
 <?php echo $message; ?>
                

                   
                    </form>
