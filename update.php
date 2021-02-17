<div class="maindiv">
<h2>Update Recoreds</h2>
<?php 


$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed...Try Again");

$id=$_GET['id'];
  $sqlquery = "SELECT * FROM student WHERE SID={$id}";
  $res = mysqli_query($conn, $sqlquery)  or die("Query Unsuccessful");

  // mysqli_close($conn);
  if (mysqli_num_rows($res) > 0) {
    while($row=mysqli_fetch_assoc($res)){
?>



<form action="updatedata.php" id="formid" style="display: flex;" method="POST">
<label>Name</label>
<input type="hidden" name="SID1"  value="<?php  echo $row['SID']; ?>">
<input type="text" name="name1" placeholder="Enter your name" value="<?php  echo $row['Name']; ?>">
<label>Email</label>
<input type="email" name="email1" placeholder="Enter your email" value="<?php  echo $row['Email']; ?>">
<label>Mobile</label>
<input type="text" name="mobile1" placeholder="Enter your Mobile" value="<?php  echo $row['Mobile']; ?>">
<label>Address</label>
<input type="text" name="addres1" placeholder="Enter your address" value="<?php  echo $row['Addres']; ?>">

<button style="background-color: green;" id="btn12">UPDATE</button>


</form>
<?php } } ?>
</div>

