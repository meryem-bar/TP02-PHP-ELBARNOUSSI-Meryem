<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Exercice 8</title>
</head>
<body>

<h3>Partie 1 : nombres pairs de 0 à 20</h3>
<?php
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo '<strong>' . $i . '</strong>';
    } else {
        echo $i;
    }
    echo ' ';
    $i += 2;
}
?>

<h3>Partie 2 : while contre do-while</h3>
<?php
$compteur = 5;
$executionsWhile = 0;
while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}
echo 'while : ' . $executionsWhile . ' exécution(s)<br>';

$compteur = 5;
$executionsDoWhile = 0;
do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);
echo 'do-while : ' . $executionsDoWhile . ' exécution(s)<br>';
?>

<h3>Partie 3 : continue et break</h3>
<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        continue;
    }
    if ($i >= 16) {
        break;
    }
    echo $i . ' ';
}
?>

</body>
</html>
