<!DOCTYPE html>
<html>

<head>
  <meta charset="Arial">
  <title>Table php</title>
</head>
<body>

<?php
	function table($operateur, $nombre){
	for ($i=1; $i<=10; $i++){
	if ($operateur=="+"  or $operateur =="addition"){
	echo $nombre . "+" . $i . "=" .  $nombre + $i  . "<br>";
	} elseif ($operateur=="-"  or $operateur =="soustraction"){
	echo $nombre . "-" . $i . "=" .  $nombre - $i  . "<br>";
	}elseif ($operateur=="*"  or $operateur =="multiplication"){
	echo $nombre . "*" . $i . "=" .  $nombre * $i   .  "<br>";
	}elseif ($operateur=="/"  or $operateur =="division"){
	echo $nombre . "/" . $i . "=" .  $nombre / $i  . "<br>";
	};
	};
	};
	
	table("/",3);
?>

</body>
</html>
