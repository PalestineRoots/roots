<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="users.php">جذور</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
 <?php

 if($_SESSION['user_role'] == 'Admin' || $_SESSION['user_role'] == 'Root'){
 ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          خيارات ادارة
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">إدارة البطاقات</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">إدارة المستخدمين</a>
        </div>
      </li>
<?php }?>
</ul>
 <span class="navbar-text">
	<a href="includes/logout.php" class= "nav-link" ><i class="fas fa-door-open"></i> تسجيل الخروج</a>
</span>

    


  </div>
</nav>