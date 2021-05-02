<?php
$name = $_POST["user"];
$min = $_POST["min"];
$max = $_POST["max"];
$ip_addr = $_SERVER["REMOTE_ADDR"];
$proj = $_POST["project"];
$today = date("Y-m-d H:i:s");
$rec = $today . ' ' . $min . ' ' . $max . ' ' . $name . ' ' . $ip_addr . "\n";
$rec2 = $min . ' ' . $max . "\n";

$fname = "record.txt";
$fname2 = "canvas.txt";

if(file_exists($fname))
	$fp = fopen($fname, "a");
else
	$fp = fopen($fname, "w");


if(file_exists($fname2))
	$fp2 = fopen($fname2, "a");
else
	$fp2 = fopen($fname2, "w");

fwrite($fp, $rec);
fwrite($fp2, $rec2);

fclose($fp);
fclose($fp2);
echo "Data is Recorded";
?>

