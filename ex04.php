<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Exercice 4</title>
</head>
<body>

<?php
$a = 42;
$b = "42";
$c = 15.8;
$d = true;
$e = false;
$f = null;
?>

<h3>var_dump des six variables</h3>
<pre>
<?php
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
?>
</pre>

<?php
$b_int = (int) $b;
$c_int = (int) $c;
$a_str = (string) $a;
?>

<h3>Conversions</h3>
<p>(int) "42" = <?php echo $b_int; ?>, type : <?php echo gettype($b_int); ?></p>
<p>(int) 15.8 = <?php echo $c_int; ?>, type : <?php echo gettype($c_int); ?></p>
<p>(string) 42 = <?php echo $a_str; ?>, type : <?php echo gettype($a_str); ?></p>

<h3>Affichage de true et false</h3>
<p>echo true : <?php echo true; ?></p>
<p>echo false : <?php echo false; ?></p>
<pre>
<?php
var_dump(true);
var_dump(false);
?>
</pre>

<h3>Conversions en booléen</h3>
<pre>
<?php
var_dump((bool) 0);
var_dump((bool) "0");
var_dump((bool) "PHP");
var_dump((bool) []);
?>
</pre>

</body>
</html>
