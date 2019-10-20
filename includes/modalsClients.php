 <!--Adding new student Modal -->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header table-dark">
        <h5 class="modal-title" id="exampleModalLongTitle">إضافة طالب</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="users.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
                        <div class="row">
                        <div class="col">
                         <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="الأسم الشخصي" required></div>
                          </div>
                            <div class="col">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="العائلة" required></div>
                          </div>  
                        </div>
                        </div>
            <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            </div>
                            <input type="text" name="user_id" class="form-control" placeholder="123456789" required>
                        </div>
                      </div>

                             <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
                            <input type="email" name="user_email" class="form-control" placeholder="somebody@example.com" required>
                        </div>
                      </div>

                           <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
            </div>
                            <input type="text" name="user_major" class="form-control" placeholder="تخصص" required>
                        </div>
                      </div>
                                  <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-link"></i></span>
            </div>
                            <input type="text" name="user_qr" class="form-control" placeholder="رابط ال QR" required>
                        </div>
                      </div>

                           <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-image"></i></span>
            </div>
                            <input type="file" name="user_img" class="form-control" placeholder="رصورة" >
                            
                    <img id='img-upload'/>
                        </div>
                      </div>

      </div>
      <div class="modal-footer">
         <button name="newuser" type="submit" class="btn btn-success mr-auto">إضافة</button>
        <button type="button" class="btn btn-secondary " data-dismiss="modal">إغلاق</button>
       
      </div>
      </form>
    </div>
  </div>
</div>

<!-- End of adding student Modal-->
  

 <!--Editing existing student Modal -->
<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header table-dark">
        <h5 class="modal-title" id="exampleModalLongTitle">تعديل</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="users.php" method="post" enctype="multipart/form-data">

   <div class="form-group">
                        <div class="row">
                        <div class="col">
                         <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                            <input type="text" name="firstname" id="user_firstname" class="form-control" required></div>
                          </div>
                            <div class="col">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                            <input type="text" name="lastname" id="user_lastname" class="form-control" required></div>
                          </div>  
                        </div>
                        </div>
            <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            </div>
                            <input type="text" name="user_id" id="user_id" class="form-control" value="" required>
                        </div>
                      </div>

                             <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
                            <input type="email" name="user_email" id="user_email" class="form-control" value="" required>
                        </div>
                      </div>

                           <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
            </div>
                            <input type="text" name="user_major" id="user_major" class="form-control" value="" required>
                        </div>
                      </div>
                                  <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-link"></i></span>
            </div>
                            <input type="text" name="user_qr" id="user_qr" class="form-control" value="" required>
                        </div>
                      </div>

                                                        <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-image"></i></span>
            </div>
                            <input type="text" name="user_image" id="user_image" class="form-control" value="" required>
                        </div>
                      </div>

      </div>
      <div class="modal-footer">
         <button name="existinguser" type="submit" class="btn btn-primary mr-auto">تعديل</button>
        <button type="button" class="btn btn-secondary " data-dismiss="modal">إغلاق</button>
       
      </div>
      </form>
    </div>
  </div>
</div>

<!-- End of editing existing student Modal-->

 <!--Delete student Modal -->

<div class="modal fade" id="deleteuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header table-dark">
        <h4 class="modal-title" id="exampleModalLongTitle">حذف طالب/ة</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form role="form" action="users.php" method="post" >
         <div class="form-group">
                              <div class="row">
                              <div class="col">
                               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                                  <input readonly type="text" name="delete_firstname" id="delete_firstname" class="form-control" value="" required></div>
                                </div> 
                              </div>
                              </div>
                  <div class="form-group">
                                 <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                  </div>
                                  <input readonly type="text" name="delete_id" id="delete_id" class="form-control" value="" required>
                              </div>
                            </div>

            
            <div class="form-group modal-footer">
               <button name="deleteexistinguser" type="submit" class="btn btn-danger mr-auto">حذف</button>
              <button type="button" class="btn btn-secondary " data-dismiss="modal">إغلاق</button>
             
            </div>

            </form>
            </div>
          </div>
        </div>
      </div>
<!-- End of deleting student Modal-->

<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body table-dark imagestyle">
         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img id="imagepreview" class="img-fluid img-thumbnail" >
      </div>

    </div>
  </div>
</div>