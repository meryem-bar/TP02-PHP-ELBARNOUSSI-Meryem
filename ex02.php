<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Exercice 2</title>
</head>
<body>

<?php
$nom = "Dupont";
$prenom = "Ali";
$age = 20;
$formation = "Informatique Appliquée";

$presentation = 'Je suis ' . $prenom . ' ' . $nom . ', j\'ai ' . $age . ' ans et je suis en ' . $formation . '.';
$presentation .= ' J\'apprends PHP.';

echo $presentation;
echo '<br><br>';

$note = 12;
$Note = 16;
echo 'note = ' . $note . '<br>';
echo 'Note = ' . $Note . '<br>';
?>

</body>
</html>