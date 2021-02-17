<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>learn PHP</title>
</head>
<style>
button{
  padding: 12px 20px ;
  margin-left: 20px ;
  font-weight: 600;
  font-size: 16px ;
  border: none;
  border-radius: 12%;
  color: white;
}

thead{
  background-color: black;
  border: 1px solid;
  color: whitesmoke;
}
tr,th,td{
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
<body>
  <?php

  // $arr=array("HII","JOnu","String","Tonu");
  // print $arr;
  // var_dump($arr);
  // echo "hello";


  for ($i = 1; $i <= 100; $i += 10) {

    for ($j = $i; $j < $i + 10; $j++) {
      echo $j;
    }
    echo "<br>";
  }
  echo "<br>";
  function teststr(&$ar)
  {
    $ar .= "Pratap Singh";
  }
  $tr = "Jonu ";
  teststr($tr);
  echo $tr;

  echo "<br>";

  $ar = ["red", "orange", "green"];
  foreach ($ar as $val) {
    echo $val . "<br>";
  }



  $marks = ["krisna" => ["physics" => 85, "English" => 78, "Hindi" => 89], "Rajesh" => ["physics" => 80, "English" => 75, "Hindi" => 90], "KAMAL" => ["physics" => 92, "English" => 87, "Hindi" => 93]];

  // echo "<pre>";
  // print_r($marks);
  // echo "</pre>";
  echo "<table border='1px' cellpadding='5px' cellspacing='0'>
  
<tr>
  <th>Std.NAME</th>
  <th>Physics</th>
  <th>English</th>
  <th>Hindi</th>
  </tr>


";

  foreach ($marks as $key => $val1) {
    echo "<tr>
     <td>$key</td>";

    foreach ($val1 as $val2) {
      echo "<td>$val2</td>";
    }
    echo "</tr>";
  }

  echo "</table>";

  $a = [12, 32, 45, 13, 43];
  $b = [21, 32, 43, 24, 15];

  $newarray = array_replace($a, $b);
  echo "<pre>";
  print_r($newarray);
  echo "</pre>";


  date_default_timezone_set("Asia/kolkata");
  $strStart = '2013-06-19 18:25';
  $strEnd   = '06/19/13 21:47';
  $dteStart = new DateTime($strStart);
  $dteEnd   = new DateTime($strEnd);
  $dteDiff  = $dteStart->diff($dteEnd);
  print $dteDiff->format("%H:%I:%S");



  $a = "Hello";
  echo "<pre>";
  print_r(str_split($a, 2));
  echo "</pre>";

  echo chunk_split($a, 2, "...");


  $strin = "Hello I am shaurya pratap singh";
  echo ucfirst($strin) . "<br>";
  echo ucwords($strin) . "<br>";
  echo strlen($a), "<br>";
  // echo count($strin);


  echo strpos($strin, "singh");
  echo "#FL0213350701 / 291939942 / 291959159";


  echo  strpbrk($strin, "si");
  echo "<br>";
  echo "<br>";
  echo "<br>";
  ?>
  

<form action="insertdata.php" id="formid" style="display: flex;" method="POST">
<label>Name</label>
<input type="text" name="name" placeholder="Enter your name">
<label>Email</label>
<input type="email" name="email" placeholder="Enter your email">
<label>Mobile</label>
<input type="text" name="mobile" placeholder="Enter your Mobile">
<label>Address</label>
<input type="text" name="addres" placeholder="Enter your address">

<button style="background-color: green;" id="btn12">Insert</button>


</form>





<?php
echo "<br>";
echo "<br>";
echo "<br>";
  $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed...Try Again");
  $sqlquery = "SELECT * FROM student";
  $res = mysqli_query($conn, $sqlquery)  or die("Query Unsuccessful");

  // mysqli_close($conn);
  if (mysqli_num_rows($res) > 0) {
  ?>
    <table cellpadding="7px" cellspacing='0'>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Address</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php
      while ($row = mysqli_fetch_assoc($res)) {

      ?>
        <tbody>
          <tr>
            <td><?php echo $row['SID']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Mobile']; ?></td>
            <td><?php echo $row['Addres']; ?></td>
<td>
  <a href="delete.php?id=<?php echo $row['SID']; ?>" ><button style="background-color: red;">DELETE</button></a>
  <a href="update.php?id=<?php echo $row['SID'];   ?>" ><button style="background-color: green;">UPDATE</button></a>

 </td>
          </tr>

        </tbody>
      <?php } ?>


    </table>
  <?php }
   else{
     echo "<h2>No Data Records Found </h2>";
    
   }

  mysqli_close($conn);
  echo "<br>";
  echo "<br>";
  echo "<br>";
  
  ?>
</body>
<script>




</script>

</html>