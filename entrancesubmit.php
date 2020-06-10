<?php
session_start();
include("dashboard/admin/functions/init.php");

$d = date("Y");
$x = $d + 1;
$y = $d."/".$x;
$f = rand(0, 99999);

$c = curl_init();
$rep = curl_exec($c);
$er = curl_error($c);

if($er){
		  // there was an error contacting the rave API
		  header("Location: ./error");
		  die('Curl returned error: ' . $er);
	}

$_SESSION['ent'] = $y;

$surname 	= clean($_POST['sur']);
$name 		= clean($_POST['name']);
$other		= clean($_POST['oth']);
$dob 	 	= clean($_POST['dob']);
$gender 	= clean($_POST['gender']);
$email 		= clean($_POST['email']);
$dis 		= clean($_POST['dis']);
$parent		= clean($_POST['parent']);
$rela 	 	= clean($_POST['rel']);
$occ 	 	= clean($_POST['occ']);
$res 		= clean($_POST['resadd']);
$tel1		= clean($_POST['tel1']);
$tel2 	 	= clean($_POST['tel2']);
$add1 	 	= clean($_POST['add1']);
$add2 		= clean($_POST['add2']);
$schlst		= clean($_POST['schlst']);
$clscomp 	= clean($_POST['clscomp']);

$entid 		= "PMS/Entrance/$f";
$entyr 		= $y;

$new = $surname." ".$name." ".$other;

$sql = "INSERT INTO entrance(`id`, `entyr`, `ent_id`, `surname`, `otherName`, `lastName`, `dob`, `gender`, `disablity`, `parent`, `parent_rel`, `parent_occ`, `parent_res`, `parent_tel`, `parent_tel2`, `parent_offadd1`, `parent_offadd2`, `schlst`, `classcomp`, `Active`, `email`)";
$sql.= " VALUES('1', '$entyr', '$entid', '$surname', '$name', '$other', '$dob', '$gender', '$dis', '$parent', '$rela', '$occ', '$res', '$tel1', '$tel2', '$add1', '$add2', '$schlst', '$clscomp', '0', '$email')";
$result = query($sql);
confirm($result);


	$to 		= $email;
    $from 		= "info@paradisemodelschool.com.ng";

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Paradise - Entrance";

    $logo = 'https://paradisemodelschool.com.ng/img/favicon2.ico';
    $url  = 'https://paradisemodelschool.com.ng';
    $link = 'https://entrance.paradisemodelschool.com.ng/';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Paradise Model School</title></head><body style='text-align: center;'>";
	$body .= "<section style='margin: 30px; margin-top: 50px ; background: gold; color: black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
	$body .= "<img style='margin-top: 35px' src='{$logo}' alt='Paradise Model School'>";
	$body .= "<h1 style='margin-top: 45px; color: white; background: black; width: 100%'>Entrance Examination {$y}</h1>
		<br/>";
	$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Dear <b>{$new},</b></p>";
	$body .= "<p style='margin-left: 45px; text-align: left; font-size: 17px;'>You`ve enrolled for the {$y}Entrance Examination into Paradise Model School, Iyesi.</p>
		<br/>";	
	$body .= "<p style='margin-left: 45px; text-align: left;'>Your Entrance ID is .: <span style='color: blue'>{$entid}</span></p>
		<br/>";
	$body .= "<p style='margin-left: 45px; text-align: left;'>The date for your exam shall be communicated to you later</p>
		<br/>";	
	$body .= "<p style='margin-left: 45px; text-align: left; color: yellow;'><a style='color:' href='{$link}'>Click here to login to your dashboard.</a></p>";	
	$body .= "<p style='margin-left: 45px; text-align: left;'>For Support, call: +2348169664313</p>";	
	$body .= "<p style='margin-left: 45px; text-align: left;'>or write to: info@paradisemodelschool.com.ng</p>
		<br/>";	
	$body .= "<p style='margin-left: 45px; text-align: left;'>Best Regards</p>";	
	$body .= "<p style='margin-left: 45px; text-align: left; padding-bottom: 50px;'><i>Paradise School ICT </i></p>";	
	$body .= "<h1 style='margin-top: 45px; color: white; background: black; width: 100%'><i>Paradise Schools... Making Stars!</i></h1>
		<br/>";
	$body .= "</section>";	
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);



    	$a = urlencode('Greatnessabolade@outlook.com'); //Note: urlencodemust be added forusernameand
		$b = urlencode('securemelikekilode'); // passwordas encryption code for security purpose.
		$c = "Hello Sir!  A pupil enrolled for an Entrance Examination. kindly check your email for details or check out this activity on your admin dashboard by using the link.: https://admin.paradisemodelschool.com.ng";
		$d = "Paradise";
		$e = "08169664313, 08116014616, 08103171902, 07062594230";
		$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$e;

		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$resp = curl_exec($ch);
		curl_close($ch);



	$t 		= "info@paradisemodelschool.com.ng";
    $fro 	= "hello@doteightinc.com";

    $header = "From: $fro";
	$header = "From: " . $fro . "\r\n";
	$header .= "Reply-To: ". $fro . "\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subjec = "Paradise - Entrance";

    $log = 'https://paradisemodelschool.com.ng/img/favicon2.ico';
    $ur  = 'https://paradisemodelschool.com.ng';
    $lin = 'https://admin.paradisemodelschool.com.ng/';

	$bod = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Paradise Model School</title></head><body style='text-align: center;'>";
	$bod .= "<section style='margin: 30px; margin-top: 50px ; background: gold; color: black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
	$bod .= "<img style='margin-top: 35px' src='{$log}' alt='Paradise Model School'>";
	$bod .= "<h1 style='margin-top: 45px; color: white; background: black; width: 100%'>Entrance Examination {$y} Notification</h1>
		<br/>";
	$bod .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hello sir!</p>";
	$bod .= "<p style='margin-left: 45px; text-align: left; font-size: 17px;'>Someone registered for {$y}Entrance Examination from the website</p>
		<br/>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>kindly check your dashboard to review this activity.</p>
		<br/>";
	$bod .= "<p style='margin-left: 45px; text-align: left; color: yellow;'><a style='color:' href='{$lin}'>Click here to login to your dashboard.</a></p>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>For Support, call: +2348103171902</p>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>or write to: hello@doteightinc.com</p>
		<br/>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Best Regards</p>";	
	$bod .= "<p style='margin-left: 45px; text-align: left; padding-bottom: 50px;'><i>Greatness Abolade (Founder, DotEightInc) </i></p>";	
	$bod .= "<h1 style='margin-top: 45px; color: white; background: black; width: 100%'><i>Paradise Schools... Making Stars!</i></h1>
		<br/>";
	$bod .= "</section>";	
	$bod .= "</body></html>";

    $sen = mail($t, $subjec, $bod, $header);


    header("location: ./exam");
 	
?>