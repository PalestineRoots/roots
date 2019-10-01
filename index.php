<?php include "includes/header.php";?>
<style type="text/css">
<?php include "includes/index.css";?>
</style>

<?php $login_status = login();

if($login_status == "Successful login") header("Location: users.php");

?>


<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span> <img src="assets/rootslogo.jpg" class="w-75" alt="Logo"> </span><br/>


        </div>
        <div class="card-body">
            <form class="myForm" action="" method="post">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="إسم المستخدم" autocomplete>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="كلمة المرور" autocomplete>
                </div>

                <div class="form-group">
                    <input type="submit" name="login" value="تسجيل الدخول" class="btn btn-outline-danger float-right login_btn">
                </div>

            </form>
        </div>
    </div>
</div>

<?php include "includes/footer.php";?>
