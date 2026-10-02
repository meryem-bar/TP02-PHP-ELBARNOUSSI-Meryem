<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Exercice 7</title>
</head>
<body>

<h3>Table de multiplication de 7</h3>
<pre>
<?php
$nombre = 7;
for ($i = 1; $i <= 10; $i++) {
    echo $nombre . ' x ' . $i . ' = ' . ($nombre * $i);
    echo "\n";
}
?>
</pre>

<h3>Pyramide d'étoiles</h3>
<pre>
<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo "\n";
}
?>
</pre>

</body>
</html>
