<?php

function createSelectBox($optionCount)
{
  $out = '<select id="day" name="day">';
  for ($idx = 1; $idx <= $optionCount; $idx++) {
    if ($idx < 10) {
      $out .= '<option value="0' . $idx . '">0' . $idx . '</option>';
    } else {
      $out .= '<option value="' . $idx . '">' . $idx . '</option>';
    }
  }
  $out .= '</select>';
  return $out;
}
function createSelectBoxyear($optionCount)
{
  $out = '<select id="year" name="year">';
  for ($idx = 1950; $idx <= $optionCount; $idx++) {
    $out .= '<option value="' . $idx . '">' . $idx . '</option>';
  }
  $out .= '</select>';
  return $out;
}
function createtimehour()
{
  $out = '<select id="hours" name="hours">';
  for ($idx = 0; $idx <= 23; $idx++) {
    if ($idx < 10) {
      $out .= '<option value="0' . $idx . '">0' . $idx . '</option>';
    } else {
      $out .= '<option value="' . $idx . '">' . $idx . '</option>';
    }
  }
  $out .= '</select>';
  return $out;
}
function createtimeminutes()
{
  $out = '<select id="minutes" name="minutes">';
  for ($idx = 0; $idx <= 59; $idx++) {
    if ($idx < 10) {
      $out .= '<option value="0' . $idx . '">0' . $idx . '</option>';
    } else {
      $out .= '<option value="' . $idx . '">' . $idx . '</option>';
    }
  }
  $out .= '</select>';
  return $out;
}
function createtimesecond()
{
  $out = '<select id="second" name="second">';
  for ($idx = 0; $idx <= 59; $idx++) {
    if ($idx < 10) {
      $out .= '<option value="0' . $idx . '">0' . $idx . '</option>';
    } else {
      $out .= '<option value="' . $idx . '">' . $idx . '</option>';
    }
  }
  $out .= '</select>';
  return $out;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="teat12.css">
  <title>Calculater your Age</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>

<body>
  <div class="main1">
    <h1>Enter your Age:</h1>

    <form method="POST" id="formId">
      <?php

      echo createSelectBox(31);

      ?>
      <select id="month" name="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">Octomber</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>


      <?php

      echo createSelectBoxyear(2021);

      ?>
      <h3>TIME </h3>
      <?php

      echo createtimehour();
      echo createtimeminutes();
      echo createtimesecond();
      ?>

      <input id="btnID" type="submit" name="submit" value="Calculate Age">
    </form>
  </div>
  <div id="divIdmian">
  <h1>Current Age Diffrence</h1>
  <h2 id="adddate"></h2></div>
</body>
<script>
$("#btnID").on("click", function(e) {
     e.preventDefault();

     setInterval(()=>{
      let year = $("#year").val();
      console.log(year);
      let month = $("#month").val();
      let day = $("#day").val();
      let hours = $("#hours").val();
      let mintues = $("#minutes").val();
      let second = $("#second").val();

      let input = {
        year: year,
        month: month,
        day: day,
        hour: hours,
        mintues: mintues,
        second: second
      }
      $.ajax({
        url: "clock.php",
        type: "POST",
        data: input,
        success: function(data) {
          // console.log(data);
          $("#divIdmian").show();
          $("#adddate").html(data);
        }
 })
},1000)
})
</script>
</html>
