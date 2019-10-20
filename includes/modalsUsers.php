<!--Adding new root user Modal -->
<div class="modal fade" id="addrootuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">إضافة مستخدم</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="management.php" method="post" >
   <div class="form-group">
                        <div class="row">
                        <div class="col">
                         <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                            <input type="text" name="rootsuser_firstname" id="rootsuser_firstname" class="form-control" placeholder="الأسم الشخصي" required></div>
                          </div>
                            <div class="col">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                            <input type="text" name="rootsuser_lastname" id="rootsuser_lastname" class="form-control" placeholder="العائلة" required></div>
                          </div>  
                        </div>
                        </div>

                             <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
                            <input type="email" name="rootsuser_email" class="form-control" placeholder="somebody@example.com" required autocomplete>
                        </div>
                      </div>

                           <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
                            <input type="password" name="rootsuser_password" class="form-control" placeholder="كلمة السر" required>
                        </div>
                      </div>
                                  <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-md"></i></span>
            </div>
                     <input type="text" name="rootsuser_role" class="form-control" placeholder="الدور" required>
                            <!-- <select name="rootsuser_role" size="2" class="form-control browser-default custom-select" required>
                              <option value="" disabled selected>Choose role</option>
                              <option value="Admin">Admin</option>
                              <option value="Manager">Manager</option>
                            </select> -->
                        </div>
                      </div>
      </div>
      <div class="modal-footer">
         <button name="newrootsuser" type="submit" class="btn btn-success mr-auto">إضافة</button>
        <button type="button" class="btn btn-secondary " data-dismiss="modal">إغلاق</button>
       
      </div>
      </form>
    </div>
  </div>
</div>

<!-- End of adding root user Modal-->


 <!--Editing existing root user Modal -->
<div class="modal fade" id="editrootsuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">تعديل</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="management.php" method="post" >

   <div class="form-group">
                        <div class="row">
                        <div class="col">
                         <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                            <input type="text" name="rootsuser_firstname" id="rootsuser_firstname" class="form-control" required></div>
                          </div>
                            <div class="col">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                            <input type="text" name="rootsuser_lastname" id="rootsuser_lastname" class="form-control" required></div>
                          </div>  
                        </div>
                        </div>
            <div class="form-group">
                           <div class="input-group mb-3">
                            <input type="text" name="rootsuser_id" id="rootsuser_id" class="form-control" hidden="true">
                        </div>
                      </div>

                             <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
                            <input type="email" name="rootsuser_email" id="rootsuser_email" class="form-control" required>
                        </div>
                      </div>

                           <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
                            <input type="password" name="rootsuser_password" class="form-control" placeholder="كلمة السر" required>
                        </div>
                      </div>
                                  <div class="form-group">
                           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-md"></i></span>
            </div>
                     <input type="text" name="rootsuser_role" id="rootsuser_role" class="form-control" required>
                            <!-- <select name="rootsuser_role" size="2" class="form-control browser-default custom-select" required>
                              <option value="" disabled selected>Choose role</option>
                              <option value="Admin">Admin</option>
                              <option value="Manager">Manager</option>
                            </select> -->
                        </div>
                      </div>

      </div>
      <div class="modal-footer">
         <button name="existingrootsuser" type="submit" class="btn btn-primary mr-auto">تعديل</button>
        <button type="button" class="btn btn-secondary " data-dismiss="modal">إغلاق</button>
       
      </div>
      </form>
    </div>
  </div>
</div>

<!-- End of editing existing root user Modal-->

 <!--Delete root user Modal -->

<div class="modal fade" id="deleterootsuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">حذف مستخدم/ة</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form role="form" action="management.php" method="post" >
         <div class="form-group">
                              <div class="row">
                              <div class="col">
                               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                                  <input readonly type="text" name="deleteroots_firstname" id="deleteroots_firstname" class="form-control" value="" required></div>
                                </div> 
                              </div>
                              </div>
                  <div class="form-group">
                                 <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                  </div>
                                  <input readonly type="text" name="deleteroots_id" id="deleteroots_id" class="form-control" value="" required>
                              </div>
                            </div>

            
            <div class="form-group modal-footer">
               <button name="deleteexistingrootsuser" type="submit" class="btn btn-danger mr-auto">حذف</button>
              <button type="button" class="btn btn-secondary " data-dismiss="modal">إغلاق</button>
             
            </div>

            </form>
            </div>
          </div>
        </div>
      </div>
<!-- End of deleting root Modal-->