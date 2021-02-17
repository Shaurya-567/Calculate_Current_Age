<?php


		// $d=$_POST['day'];
		// $m=$_POST['month'];
		// $y=$_POST['year'];
		 
		// $h=$_POST['hours'];
    // $i=$_POST['minutes'];
    // $s=$_POST['second'];
    extract($_POST);
    date_default_timezone_set("Asia/kolkata");
    // print_r($day);
    // print_r($month);
    // print_r($year);
    // print_r($hour);
    // print_r($mintues);
    // print_r($second);
		 
    $dob=$day.'-'.$month.'-'.$year." ".$hour.":".$mintues.":".$second;
		//  echo $dob;
		$bday=new DateTime($dob);
    // echo $bday;
		$t=date('d-m-Y');
			$newdob=new DateTime($dob);
      $newtoday=new DateTime('now');

$diffAge=$newdob->diff($newtoday);

echo $diffAge->format("%y Year %m Month %d Day %H Hours:%I Mintues:%S Second"); 
	

?>