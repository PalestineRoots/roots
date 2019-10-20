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
    $client_img = $_FILES['user_img']['name'];//to catch image
    $client_img_temp= $_FILES['user_img']['tmp_name'];//to catch the image temp location

    $client_tags = $client_firstname.", ".$client_lastname.", ".$client_major.", ".$client_id.", ";

    move_uploaded_file($client_img_temp,"assets/verifications/$client_img");
    
    $query = "INSERT INTO `clients`(`client_id`, `client_firstname`, `client_lastname`, `client_email`, `client_major`, `client_qr`, `client_image`, `client_tags`) VALUES ('{$client_id}','{$client_firstname}','{$client_lastname}','{$client_email}','{$client_major}','{$client_qr}','{$client_img}','{$client_tags}')";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("No Q. ".mysqli_error($connection));
    }
    header("Location: users.php");
    }
}

function editClient(){
  global $connection;
  if (isset($_POST['existinguser'])) {
    $client_firstname = $_POST['firstname'];
    $client_lastname = $_POST['lastname'];
    $client_major = $_POST['user_major'];
    $client_id = $_POST['user_id'];
    $client_email = $_POST['user_email'];
    $client_qr = $_POST['user_qr'];
    $query = "UPDATE `clients` SET client_id='{$client_id}', client_firstname='{$client_firstname}', client_lastname='{$client_lastname}', client_email='{$client_email}', client_major='{$client_major}', client_qr='{$client_qr}', client_image='test' WHERE client_id={$client_id}";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("No Q. ".mysqli_error($connection));
    }
    header("Location: users.php");
    }
}

function deleteClient(){

  global $connection;
  if(isset($_POST['deleteexistinguser'])){
    $delete_id = $_POST['delete_id'];
    $delete_firstname = $_POST['delete_firstname'];
    $words = split("[ ]+", $delete_firstname);
    $query = "DELETE FROM clients WHERE client_id={$delete_id}";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("No Q. ".mysqli_error($connection));
    }
    header("Location: users.php");
    }
  }

  function addUser(){
  global $connection;
  if (isset($_POST['newrootsuser'])) {
    $user_firstname = $_POST['rootsuser_firstname'];
    $user_lastname = $_POST['rootsuser_lastname'];
    $user_email = $_POST['rootsuser_email'];
    $user_password = $_POST['rootsuser_password'];
    $user_role = $_POST['rootsuser_role'];
    $query = "INSERT INTO `users`(`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_role`, `user_randsalt`) VALUES (' ','{$user_firstname}','{$user_lastname}','{$user_email}','{$user_password}','{$user_role}','test')";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("No Q. ".mysqli_error($connection));
    }
    header("Location: management.php");
    }
}

function editUser(){
  global $connection;
  if (isset($_POST['existingrootsuser'])) {
    $user_id = $_POST['rootsuser_id'];
    $user_firstname = $_POST['rootsuser_firstname'];
    $user_lastname = $_POST['rootsuser_lastname'];
    $user_email = $_POST['rootsuser_email'];
    $user_password = $_POST['rootsuser_password'];
    $user_role = $_POST['rootsuser_role'];
    $query = "UPDATE users SET user_id='{$user_id}', user_firstname='{$user_firstname}', user_lastname='{$user_lastname}', user_email='{$user_email}', user_password='{$user_password}', user_role='{$user_role}', user_randsalt='test' WHERE user_id={$user_id}";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("No Q. ".mysqli_error($connection));
    }
    header("Location: management.php");
    }
}

function deleteUser(){

  global $connection;
  if(isset($_POST['deleteexistingrootsuser'])){
    $deleteuser_id = $_POST['deleteroots_id'];
    $query = "DELETE FROM users WHERE user_id={$deleteuser_id}";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("No Q. ".mysqli_error($connection));
    }
    header("Location: management.php");
    }
  }
?>