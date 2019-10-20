<?php include "includes/modalsClients.php";?>

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

$query = "SELECT * FROM clients";
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
<td><img src="<?php echo "/roots/assets/verifications/".$user_image ?>" alt="Avatar" class="avatar" id="imageresource" data-toggle="modal" data-target="#imagemodal"></td>
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