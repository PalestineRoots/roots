

<?php include "includes/header.php";?>
<?php include "includes/navbar.php";
if(!isset($_SESSION['user_role'])){
    header("Location: /roots");
}?>
<style type="text/css">
<?php include "includes/users.css";?> 
</style>

<div class="container" align="center">
	<br>
	<h1>بطاقة الطالب العربي</h1>

<hr>
	<form action="users.php" method="get">
		
		      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="search" placeholder="بحث ...">
          <button class="btn search_icon" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </div>
	</form>


<?php
addClient();
editClient();
deleteClient();

if(isset($_GET['search'])){
	$client_tags = $_GET['search'];
	include "includes/results.php";
} else {
	include "includes/clients.php";
}

?>
</div>




<?php include "includes/footer.php";?>
