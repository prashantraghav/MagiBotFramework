<?php if($msg!=null) echo $msg;?>
 <form  action="<?php echo BASE_URL."admin/home/save"?>" method="post" role="form">
                                        <div class="form-group">
                                        <label>Choose Product:</label>
                                        <select name="products">
                                        <option>Select</option>
                                        <option value="Cakes">Cakes</option>
                                        <option value="Chocolates">Chocolate</option>
                                        <option value="Brownies">Brownies</option>
                                        <option value="Tarts">Tarts</option>
                                         <option value="Truffles">Truffles</option>
                                        </select> 
                                   </div>  
                                    
                                        <div class="form-group">
                                            <label>Enter Category:</label>
                                          <input type="text" class="form-control" name="category" placeholder="category">
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Flavour:</label>
                                           <input type="text" class="form-control"name="flavour" placeholder="flavour">
                                        </div>
                                         <div class="form-group">
                                            <label>Enter Price</label>
                                           <input type="text"  class="form-control"name="price" placeholder="flavour">
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="upload_file">
                                        </div>

                                       
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>

