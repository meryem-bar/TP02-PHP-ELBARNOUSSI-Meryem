<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Exercice 9</title>
</head>
<body>

<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nbValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = '';
?>

<table border="1" cellpadding="5">
<tr><th>Étudiant</th><th>Note</th><th>Statut</th></tr>
<?php foreach ($notes as $etudiant => $note) : ?>
<tr>
    <td><?= $etudiant ?></td>
    <td><?= $note ?></td>
<td>
<?php 
if ($note >= 10) {
    echo 'Validé';
} else {
    echo 'Non validé';
}
?>
</td></tr>
<?php
    $somme += $note;
    if ($note >= 10) {
        $nbValides++;
    }
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }
endforeach;
?>
</table>

<?php $moyenne = $somme / count($notes); ?>

<p>Somme des notes : <?= $somme ?></p>
<p>Moyenne de la classe : <?= $moyenne ?></p>
<p>Nombre d'étudiants validés : <?= $nbValides ?></p>
<p>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</p>

</body>
</html>
