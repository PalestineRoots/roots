<?php include "includes/modalsUsers.php";?>

<div class="container" align="center">
  <div class="panel panel-default panel-table">
  <div class="panel-heading">
    <div class="row">
    <div class="col col-xs-6">
      <h3 class="panel-title" align="right">قائمة المستخدمين</h3>
    </div>
    <div class="col col-xs-6 text-right">
      <button type="button" class="btn btn-success " data-toggle="modal" data-target="#addrootuser" align="left">إضافة مستخدم/ة <i class="fas fa-users"></i></button>
    </div>
  </div>
</div>
<div class="panel-body">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">رقم المستخدم</th>
      <th scope="col">الإسم</th>
      <th scope="col">البريد الإلكتروني</th>
      <th scope="col">الدور</th>
      <th scope="col" colspan="2"><div align="center"><i class="fas fa-cog"></i></div></th>
    </tr>
  </thead>
  <tbody>
<?php 
 if($_SESSION['user_role'] == 'Admin'){
  $query = "SELECT * FROM users WHERE user_role='Manager'";
 }else{
  $query = "SELECT * FROM `users` WHERE user_role!='Root' ORDER BY user_role";  
 }


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
$user_id = $row['user_id'];
$user_firstname = $row['user_firstname'];
$user_lastname = $row['user_lastname'];
$user_email = $row['user_email'];
$user_role = $row['user_role'];
$count++;

?>
<tr>
<td><?= $user_id?></td>
<td><?= $user_firstname." ".$user_lastname?></td>
<td><?= $user_email?></td>
<td><?= $user_role?></td>
 <?php
 if($_SESSION['user_role'] == 'Root'|| $_SESSION['user_role'] == 'Admin'){
 ?>
<td align="center"><button type="button" class="btn btn-sm btn-primary editrootsbtn" data-toggle="modal" data-target="#editrootsuser" ><i class="fas fa-edit"></i></button></td>
<!--  <button data-toggle="modal" data-target="#edituser<?=$user_id?>" class="btn btn-sm btn-primary"></button> -->
<td align="center"><button type="button" class="btn btn-sm btn-danger deleterootsbtn" data-toggle="modal" data-target="#deleterootsuser" ><i class="fas fa-trash-alt"></i></button></td>
<?php }?>


</tr>


  </div>
</div>
</div>
</div>
</div>


<?php }}?>
  </tbody>
</table>
</div>