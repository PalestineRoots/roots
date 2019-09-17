

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
	<form>
		
		      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="بحث ...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
	</form>


<?php include "includes/clients.php";?>
</div>




<?php include "includes/footer.php";?>
