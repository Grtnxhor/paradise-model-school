<?php
session_start();
	
	$id 				= rand(0, 9999);
	$_SESSION['id'] 	= $id;


    $t  		= "info@paradisemodelschool.com.ng";
    $from 		= $_POST['email'];
    $fname		= $_POST['name'];
    $message 	= $_POST['msg'];

    $header = "From: $fro";
	$header = "From: " . $fro . "\r\n";
	$header .= "Reply-To: ". $fro . "\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subjec = "Paradise - Website Mesage";

    $log = 'https://paradisemodelschool.com.ng/img/favicon2.ico';
    $ur  = 'https://paradisemodelschool.com.ng';

	$bod = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Paradise Model School</title></head><body style='text-align: center;'>";
	$bod .= "<section style='margin: 30px; margin-top: 50px ; background: gold; color: black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
	$bod .= "<img style='margin-top: 35px' src='{$log}' alt='Paradise Model School'>";
	$bod .= "<h1 style='margin-top: 45px; color: white; background: black; width: 100%'>Contact Notification</h1>
		<br/>";
	$bod .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hello sir!</p>";
	$bod .= "<p style='margin-left: 45px; text-align: left; font-size: 17px;'>Someone contacted you from the website</p>
		<br/>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Full Name: <b>{$fname}</b></p>";
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Email Address: <b>{$from}</b></p>";
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Message Sent: <b>{$message}</b></p> <br/>";	
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
    header("location: ./submitted");
?>