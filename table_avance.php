<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Table avancée</title>
  <script src="tailwind.js" > </script>
</head>
<body class="bg-gradient-to-b from-white-70 via-white-50 to-red-200 animate-gradient p-[3%] text-2xl">
<h1 class="text-center text-5xl font-bold mb-10">Table Avancée</h1>
<div class="flex justify-center m-9 mb-20">
<form action="table_avance.php" method="POST" class="bg-white rounded-xl shadow-2xl p-8 ">
  <label class="text-gray-600">Nombre :</label>
  <br>
  <input type="number" name="nombre" placeholder="Entrez le nombre"  class="border border-gray-400 bg-gray-200 p-4 rounded-xl m-5 ml-0" required>
  <br>
 <label class="text-gray-600">Operateur: </label>
 <br>
  <select name="operateur" class="border border-gray-400 bg-gray-200 p-4 rounded-xl m-5 ml-0" required>
    <option value="addition">Addition +</option>
    <option value="soustraction">Soustraction -</option>
    <option value="multiplication">Multiplication *</option>
    <option value="division">Division ÷</option>
  </select>
 <br>
 <label class="text-gray-600">Nombre de debut de  table: </label>
 <br>
  <input type="number" name="nbdepart" placeholder="Entrez le nombre de depart" class="border border-gray-400 bg-gray-200 p-4 rounded-xl m-5 ml-0" required>
  <br>
  <label class="text-gray-600">Nombre de fin de la table:</label>
  <br>
  <input type="number" name="nbfinal" placeholder="Entrez le nombre de fin" class="border border-gray-400 bg-gray-200 p-4 rounded-xl m-5 ml-0" required>
  <br>
  <button type="submit" class="bg-gradient-to-r from-pink-500 to-red-600 w-full rounded-xl text-white p-[12px] font-bold shadow-lg shadow-red-500/50 hover:shadow-xl hover:from-white-600 hover:to-red-700 transform hover:scale-[1.02] transition-all duration-300 ease-in-out mt-10">Calculer</button>
</form>
</div>
<?php
$operateur;
$nombre;
$nbdepart;
$nbfinal;

function table($operateur, $nombre ,$nbdepart, $nbfinal){
if($nbdepart <= $nbfinal){
echo "<h1 class='text-4xl font-bold text-center'>Voici la table de " . $operateur . " du nombre " . $nombre . ".</h1><br>";
echo "<p class='text-center'>De " . $nbdepart . " à " . $nbfinal . " .</p><br>";
echo "<div class='flex justify-center'> <div class='grid grid-cols-1 border border-gray-300 border-3 p-6 rounded-xl'>";
	for ($i=$nbdepart ; $i<=$nbfinal ; $i++){
	if ($operateur=="+"  or $operateur =="addition"){
	echo "<div class='p-2 '>_" . $nombre . " + " . $i . " = " .  $nombre + $i  . "</div>";
	} elseif ($operateur=="-"  or $operateur =="soustraction"){
	echo  "<div class='p-2 '>_" . $nombre . " - " . $i . " = " .  $nombre - $i  . "</div>";
	}elseif ($operateur=="*"  or $operateur =="multiplication"){
	echo  "<div class='p-2 '>_" . $nombre . " x " . $i . " = " .  $nombre * $i   .  "</div>";
	}elseif ($operateur=="/"  or $operateur =="division"){
	if ($nbdepart != 0){
	echo  "<div class='p-2 '>_" . $nombre . " ÷ " . $i .  " = " .  $nombre / $i  . "</div>";
	}else{echo "<p class='text-red-700 text-3xl'>!!!On ne peut pas diviser un nombre par 0. Veulliez recommencer!!!</p>"; $nbfinal=0;};
	};
	};
	echo "</div></div>";
	}else{
	echo "<p class='text-red-700 text-3xl'>!!!Le nombre de depart doit être superieur au nombre de fin de la table!!</p>";
	};
	};
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $operateur = $_POST["operateur"];
  $nombre = $_POST["nombre"];
  $nbdepart= $_POST["nbdepart"];
  $nbfinal= $_POST["nbfinal"];
  table($operateur , $nombre , $nbdepart , $nbfinal);
};

?>
</body>
</html>