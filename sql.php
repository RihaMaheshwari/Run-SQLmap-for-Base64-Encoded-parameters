<?php
#enc = Base64 - {"name1":"test","name2":"test2","name3":"test3"}

# Enter your base64 payload below-
$_POST["enc"] = "eyJuYW1lMSI6InRlc3QiLCJuYW1lMiI6InRlc3QyIiwibmFtZTMiOiJ0ZXN0MyJ9IA==";

#Decodes
$decoded = base64_decode($_POST["enc"]);
#Convert into array
$ar = json_decode($decoded, true);
$ar[name1] = $_GET['inject'];
#$ar[name2] = $_GET['inject'];
#$ar[name3] = $_GET['inject'];
echo "</pre>";
#Encode the payload to JSON format
$en = json_encode($ar);
#Final Payload
$f = base64_encode($en);
echo $en;

#Enter URL here
$url = 'http://www.target.com?data='.$f;
echo $url;
$decode = file_get_contents('http://www.target.com?data='.$f);
echo $decode;
?>
