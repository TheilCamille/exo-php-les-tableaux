<?php

//exo 1

$array = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");

var_dump($array);

//exo 2

echo "</br>";
var_dump($array[2]);

//exo 3

echo "</br>";
var_dump($array[4]);

//exo 4

$array['7']='Août';
echo "</br>";
var_dump($array);

//exo 5

$haut_de_France = array(
	02 => "Aisne",
	59 => "Nord",
	60 => "Oise",
	62 => "Pas de Calais",
	80 => "Somme",
	);
echo "</br>";
var_dump($haut_de_France);

//exo 6

echo "</br>";
var_dump($haut_de_France[59]);

//exo 7

$haut_de_France['51'] = "Marne";
echo "</br>";
var_dump($haut_de_France);

//exo 8
echo "</br>";
for ($mois = 0; $mois < 12; $mois++)
	{
		echo $array[$mois] . "</br>";
	}

//exo 9

echo "</br>";
foreach($haut_de_France as $departement){
	echo $departement . "</br>";
}

//exo 10 

echo "</br>";
foreach($haut_de_France as $departement => $element)
{
	echo "Le département ".$element." a le numéro[' .$departement. ']</br>";
}