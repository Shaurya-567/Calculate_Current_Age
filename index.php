<?php
 
$currentValue= 0 ;

$input=[];

function getinputval($values){
  $o="";
  foreach($values as $value){
    $o.= $value;
  }
  return $o;
}

function calculatorinp($userimp){
  //format user input
  $arr=[];
  $char="";
  foreach($userimp as $num)
  {
    if(is_numeric($num) || $num =="."){
     $char .= $num;
    }
    else if(!is_numeric($num)){
      if(!empty($char)){
        $arr[]=$char;
        $char="";
      }
      $arr[]=$num;
    }
  }
  if(!empty($char)){
    $arr[]=$char;
  }
  $currentval=0;
  $action=null;
  for($i=0;$i<count($arr)-1;$i++){
 
    if(is_numeric($arr[$i])){
      if($action){
        if($action =="+"){
          $currentval+= $arr[$i];
        }
        else if($action =="-"){
          $currentval -= $arr[$i];
        }
        else  if($action =="*"){
          $currentval *= $arr[$i];
        }
        else if($action =="/"){
          $currentval /= $arr[$i];
        }
        $action=null;
      }else{
        if($currentval==0){
          $currentval=$arr[$i];
        }
      }
     
    } else{
     $action=$arr[$i];
    }
  }
  return $currentval;

}


if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['input'])){
    $input=json_decode($_POST['input']);
  }


  if(isset($_POST)){
    foreach($_POST as $key=>$value)
    {
     if($key =='equal')
     {
       $currentval=calculatorinp($input);
       $input=[];
       $input[]=$currentval;
     }
    elseif($key=="CE"){
      array_pop($input);

    }
    elseif($key=="C"){
      $input=[];
      $currentval=0;
    }
    elseif($key=="Back"){
      $lastpoint=count($input)-1;
      if(is_numeric($input[$lastpoint])){
        array_pop($input);
      }
    }

     elseif($key != 'input'){
       $input[] =$value;
     }
    }
  }

}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Calculator PHP </title>
</head>

<body>
<h1>MY Calculator</h1>
<div id="formId">

  <form method="post">
  <input type="hidden" name="input" value="<?php echo json_encode($input);?>">
   <p ><?php echo getinputval($input); ?></p>
   <input type="text" value="<?php  echo $currentValue;?>"/> 
   
   
   <table>
      <tr class="caltr">
        <td><input type="submit" name="CE" value="CE" /></td>
        <td><input type="submit" name="C" value="C" /></td>
        <td><button type="submit" name="Back" value="Back" >&#8592; </button></td>
        <td><button type="submit" name="divide" value="/"> &#247; </button></td>
      </tr>
      <tr class="caltr">
        <td><input type="submit" name="7" value="7" /></td>
        <td><input type="submit" name="8" value="8" /></td>
        <td><input type="submit" name="9" value="9" /></td>
        <td><input type="submit" name="multiply" value="*" /></td>
      </tr>
      <tr class="caltr">
        <td><input type="submit" name="4" value="4" /></td>
        <td><input type="submit" name="5" value="5" /></td>
        <td><input type="submit" name="6" value="6" /></td>
        <td><input type="submit" name="minus" value="-" /></td>
      </tr>
      <tr class="caltr">
        <td><input type="submit" name="1" value="1" /></td>
        <td><input type="submit" name="2" value="2" /></td>
        <td><input type="submit" name="3" value="3" /></td>
        <td><input type="submit" name="add" value="+" /></td>
      </tr>
      <tr class="caltr">
        <td><button type="submit" name="plusminus" value="plusminus" >&#177;</button></td>
        <td><input type="submit" name="zero" value="0" /></td>
        <td><input type="submit" name="." value="." /></td>
        <td><input type="submit" name="equal" value="=" /></td>
      </tr>

    </table>
  </form>
  </div>
</body>

</html>


