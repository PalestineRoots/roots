<?php 
ob_start();
session_start();
include "functions.php";
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

<style type="text/css">
	@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
</style>

<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">

<!-- Load font awesome icons -->
<script src="https://kit.fontawesome.com/aecbee0b9e.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
 <script>
      $(document).ready(function (){
        $('.editbtn').on('click',function () {
          $tr = $(this).closest('tr');
          var data = $tr.children("td").map(function (){
            return $(this).text();
          }).get();
          console.log(data);
          var fullname = data[0].split(" ");
          $('#user_firstname').val(fullname[0]);
          $('#user_lastname').val(fullname[1]);
          $('#user_id').val(data[1]);
          $('#user_email').val(data[2]);
          $('#user_major').val(data[3]);
          $('#user_qr').val(data[4]);
          $('#user_image').val(data[5]);
        });
      });
</script>

<script>
	
      $(document).ready(function (){
        $('.deletebtn').on('click',function () {
          $tr = $(this).closest('tr');
          var data = $tr.children("td").map(function (){
            return $(this).text();
          }).get();
          console.log(data);
          $('#delete_firstname').val(data[0]);
          $('#delete_id').val(data[1]);
        });
      });
</script>

<title></title>
</head>
<body>
