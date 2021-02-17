<?php 
 $SID=$_POST['SID1'];
 $name=$_POST['name1'];
  $email =$_POST['email1'];

$mobile= $_POST['mobile1'];

 $address=$_POST['addres1'];

$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed...Try Again");
  $sqlquery = "UPDATE student SET  Name = '{$name}' , Email ='{$email}', Mobile = '{$mobile}', Addres = '{$address}' WHERE SID = {$SID}";
  $res = mysqli_query($conn, $sqlquery)  or die("Query Unsuccessful");


  header("Location: http://localhost/AJAX/task2/learn.php");
  mysqli_close($conn);

  ?>