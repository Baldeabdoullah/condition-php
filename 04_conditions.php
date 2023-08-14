<?php
// conditions 

if (true) {

    echo "salut";
    echo '<br>';
    echo " applelle la conditions";
    echo '<br>';
    echo " applelle la conditions";
    echo '<br>';
    echo " applelle la conditions";
    echo '<br>';
    echo " applelle la conditions";
}


echo '<br>';
echo '<br>';

$age  = 10;

// if ($age > 21) {
//     echo "oui voue este eligible pour voter";
// } else {
//     echo "nom Voue ete encore mineure ";
// }


// $dte = date('H');
$dte = 53;

echo $dte;
echo "<br>";

// if ($dte < 4) {

//     echo "il la premiere heure de la journee";
// } else  if ($dte < 6) {
//     echo "c'est le petit";
// } else  if ($dte < 12) {
//     echo "c'est la matine";
// } else  if ($dte < 17) {
//     echo "c'est l'apres midi";
// } else  if ($dte < 23) {
//     echo "c'est le soir";
// } else {
//     echo "c'est premiere heure de la journee ";
// }

switch ($dte) {
    case $dte < 6:
        echo "c'est le petit matin";
        break;

    case $dte < 12:
        echo "c'est la matine";
        break;

    case $dte < 17:
        echo "c'est l'apres midi";
        break;

    case $dte < 23:
        echo "c'est le soir";
        break;

    default:
        echo " vous etre hors contexte";
}
