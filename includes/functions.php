<?php
include "db.php";



// check query 
function confirmQ($result){
    
    global $connection;
    if(!$result){
        die("No Q. ".mysqli_error($connection));
    }
}

function login(){
    

global $connection;
if(isset($_POST['login'])){
    
   $username =  $_POST['username'];
   $password =  $_POST['password'];
    
    $username = mysqli_real_escape_string($connection,$username);
    $db_password =  mysqli_real_escape_string($connection,$password);
    
    
    $query = "SELECT * FROM users WHERE user_email = '{$username}' ";
    $result = mysqli_query($connection, $query);
     if(!$result){
        die("No Q. ".mysqli_error($connection));
    }

    if(mysqli_num_rows($result)!=0){
    while($row = mysqli_fetch_assoc($result)){
        $user_id = $row['user_id'];
        $user_email = $row['user_email']; 
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_password = $row['user_password'];  
        $user_role = $row['user_role'];  
    }

    $password = crypt($password,$user_password ); // the password crypt.
    
    if($username === $user_email && $password === $user_password){
        
      $_SESSION['user_role'] = $user_role;
      $_SESSION['user_password'] = $user_password;
      $_SESSION['user_email'] = $user_email;
      $_SESSION['user_id'] = $user_id;
      $_SESSION['user_firstname'] = $user_firstname;
      $_SESSION['user_lastname'] = $user_lastname;


  }else{
       
    return "Password doesn't match email";
    }

    }else{
      
       return "This email is not registered yet";
     }

     return "Successful login";
}
} 


function addClient(){
  global $connection;
  if (isset($_POST['newuser'])) {
    $client_firstname = $_POST['firstname'];
    $client_lastname = $_POST['lastname'];
    $client_major = $_POST['user_major'];
    $client_id = $_POST['user_id'];
    $client_email = $_POST['user_email'];
    $client_qr = $_POST['user_qr'];
    $query = "INSERT INTO `clients`(`client_id`, `client_firstname`, `client_lastname`, `client_email`, `client_major`, `client_qr`, `client_image`) VALUES ('{$client_id}','{$client_firstname}','{$client_lastname}','{$client_email}','{$client_major}','{$client_qr}','test')";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("No Q. ".mysqli_error($connection));
    }
    header("Location: users.php");
    }
}

?>