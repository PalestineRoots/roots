
<?php include "includes/header.php";?>
<?php include "includes/navbar.php";
if(!isset($_SESSION['user_role'])){
    header("Location: /roots");
}?>
<style type="text/css">
<?php include "includes/users.css";?> 
</style>
<br>
<hr>
<br>
<div class="container" align="right">
	<h2>إدارة المستخدمين</h2>
</div>
<br>
<hr>
<br>

<?php
addUser();
editUser();
deleteUser();
 include "includes/rootsusers.php";?>
</div>




<?php include "includes/footer.php";?>