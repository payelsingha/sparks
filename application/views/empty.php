              <!-- The Modal -->
              <div class="modal" id="myEdit">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Modal Heading</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <form action="<?php echo base_url() ?>Welcome/business_data_insert"  method="post">
                      <?php 
                         if(isset($user_data))
                         {
                           foreach($user_data as $row)
                           {
                             ?>
                            
                               <div>
                                  <label for="uname">Business Name</label>
                                  <input name="BusinessName" type="text" class="form-control" value="<?php echo $row->BusinessName; ?>" placeholder="Enter username"  required>
                                </div>
                                <div>
                                  <label for="uname">Contact name</label>
                                  <input name="Contact_name" type="text" class="form-control" value="<?php echo $row->Contact_name; ?>" placeholder="Enter username"  required>
                                </div>
                                <div>
                                  <label for="uname">Contact Email</label>
                                  <input name="Contact_Email" type="text" class="form-control" value="<?php echo $row->Contact_Email; ?>" placeholder="Enter username"  required>
                                </div>
                                <div>
                                  <label for="uname">Contact phone</label>
                                  <input name="Contact_phone" type="text" class="form-control" value="<?php echo $row->Contact_phone; ?>" placeholder="Enter username" required>
                                </div>
                                <div>
                                  <label for="uname">Type</label>
                                  <input name="Type" type="text" class="form-control" value="<?php echo $row->Type; ?>" placeholder="Enter username" required>
                                </div>
                                <div>
                                  <label for="uname">Introducer</label>
                                  <input name="Introducer" type="text" class="form-control" value="<?php echo $row->Introducer; ?>" placeholder="Enter username" required>
                                </div>
                                <div>
                                  <label for="uname">Introducer By</label>
                                  <input name="Introducer_By" type="text" class="form-control" value="<?php echo $row->Introducer_By; ?>" placeholder="Enter username" required>
                                </div>
                                <div>
                                  <label for="uname">Registration Date</label>
                                  <input name="Registration_Date" type="text" class="form-control" value="<?php echo $row->Registration_Date; ?>" placeholder="Enter username" required>
                                </div>
                              </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>"/>
                            <input name='update' value="Update" type="submit" class="btn btn-primary"/>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            <?php
                           }
                         }
                         else{
                           ?>
                           <?php
                         }
                      ?>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>




    <!-- The Modal -->
    <div class="modal" id="myEdit">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Modal Heading</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      Modal body..
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>
