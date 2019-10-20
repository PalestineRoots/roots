
 <!--Adding new student Modal -->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
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
                            <input type="file" name="user_img" class="form-control" placeholder="رصورة" required>
                            
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
      <div class="modal-header">
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
      <div class="modal-header">
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

<!-- Show image modal -->
<div class="modal fade" id="resultsimagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body table-dark imagestyle">
         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img id="resultsimagepreview" class="img-fluid img-thumbnail" >
      </div>

    </div>
  </div>
</div>
<!-- End of show image modal-->

  <div class="row table-responsive">
           <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">طلاب</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                     <button type="button" class="btn btn-success " data-toggle="modal" data-target="#adduser"><i class="fas fa-users"></i>  إضافة طالب/ة</button>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">الإسم</th>
      <th scopr="col">رقم الهوية</th>
      <th scope="col">البريد الإلكتروني</th>
      <th scope="col">تخصص</th>
      <th scope="col">QR Code</th>
      <th scope="col">صورة</th>
      <th scope="col" colspan="2"><div align="center"><i class="fas fa-cog"></i></div></th>
    </tr>
  </thead>
  <tbody>
    <?php

$query = "SELECT * FROM clients WHERE client_tags LIKE '%$client_tags%'";
$result = mysqli_query($connection,$query);
         if(!$result){
die("No Q. ".mysqli_error($connection));
}


$countrows = mysqli_num_rows($result);// count the number of rows in the returned query
  if($countrows == 0 ){
                       echo "<tr><td><h4>No Results</h4></td></tr>";
                   }
                   else {
$count = 0;
while($row = mysqli_fetch_assoc($result)){
$user_id = $row['client_id'];
$user_firstname = $row['client_firstname'];
$user_lastname = $row['client_lastname'];
$user_email = $row['client_email'];
$user_major = $row['client_major'];
$user_qr = $row['client_qr'];
$user_image = $row['client_image'];
         $count++;

?>
<tr>
<th scope="row"><?= $count?></th>
<td><?= $user_firstname." ".$user_lastname?></td>
<td><?= $user_id?></td>
<td><?= $user_email?></td>
<td><?= $user_major?></td>
<td><?= $user_qr?></td>
<?php
 if($user_image!=NULL){
 ?>
<td><img src="<?php echo "/roots/assets/verifications/".$user_image ?>" alt="Avatar" class="avatartwo" id="resultsimageresource" data-toggle="modal" data-target="#resultsimagemodal"></td>
<?php }?>
<?php
 if($user_image==NULL){
 ?>
<td></td>
<?php }?>
<td align="center"><button type="button" class="btn btn-sm btn-primary editbtn" data-toggle="modal" data-target="#edituser" ><i class="fas fa-edit"></i></button></td>
<!--  <button data-toggle="modal" data-target="#edituser<?=$user_id?>" class="btn btn-sm btn-primary"></button> -->
<td align="center"><button type="button" class="btn btn-sm btn-danger deletebtn" data-toggle="modal" data-target="#deleteuser" ><i class="fas fa-trash-alt"></i></button></td>
</tr>


        </div>


<?php }}?>

</tbody>
</table>