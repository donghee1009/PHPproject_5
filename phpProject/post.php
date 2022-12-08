<?php
    include 'dbconnection.php';
    $connect=dbconn();

    @$userid=$_POST['id'];
    @$userpw=$_POST['password'];

    $query="INSERT into singup(id, password) values('$userid','$userpw')";
    mysqli_query($connect, "set names utf8");
    mysqli_query($connect, $query);
 ?>

 <script>
 windows.alert('DB로 전송 완료 !');
 location.href='9_matRegister.php' // php 연결
 </script>
