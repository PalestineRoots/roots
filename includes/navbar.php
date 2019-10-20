<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="/roots/users.php">
 <img id="logo" class="d-inline-block mr-1" alt="Logo" src="assets/navbarbrand.png"> 
  </a>
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
          <a class="dropdown-item" href="users.php">إدارة البطاقات</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="management.php">إدارة المستخدمين</a>
        </div>
      </li>
<?php }?>
</ul>
  <?php
    $user_firstname = $_SESSION['user_firstname'];
    $user_lastname = $_SESSION['user_lastname'];
    ?>
<span class="navbar-text">
<a style="color: skyblue; font-style: italic;"><?= $_SESSION['user_firstname']." ". $_SESSION['user_lastname'].": ".$_SESSION['user_role']?></a>
 </span>
 <span class="navbar-text">
  <a href="includes/logout.php" class= "nav-link" ><i class="fas fa-door-open"></i> تسجيل الخروج</a>
</span>

  </div>

  
</nav>