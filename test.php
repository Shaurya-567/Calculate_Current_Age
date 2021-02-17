<?php

$cookie="User";
$cooikesval="Shaurya";
setcookie($cookie,$cooikesval);
setcookie($cookie,"");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

   if(!isset($_COOKIE[$cookie]))
   {
     echo "Cookies is not Set";
   }
   else{
     echo "Cookies Name is ".$cookie." And it's value='".$_COOKIE[$cookie]."'";
   }
?>
  
</body>
</html>