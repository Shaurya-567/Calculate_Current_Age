<?php 


$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed...Try Again");

$id=$_GET['id'];
  $sqlquery = "DELETE FROM student WHERE SID={$id}";
  $res = mysqli_query($conn, $sqlquery)  or die("Query Unsuccessful");

  header("Location: http://localhost/AJAX/task2/learn.php");
  mysqli_close($conn);
  // if (mysqli_num_rows($res) > 0) {
  //   while($row=mysqli_fetch_assoc($res)){
?>
