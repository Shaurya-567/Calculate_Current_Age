<?php 
 $name=$_POST['name'];
 $email =$_POST['email'];
 $mobile= $_POST['mobile'];
 $address=$_POST['addres'];

$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed...Try Again");
  $sqlquery = "INSERT INTO student(Name,Email,Mobile,Addres) VALUES('{$name}','{$email}','{$mobile}','{$address}')";
  $res = mysqli_query($conn, $sqlquery)  or die("Query Unsuccessful");


  header("Location: http://localhost/AJAX/task2/learn.php");
  mysqli_close($conn);
?>
