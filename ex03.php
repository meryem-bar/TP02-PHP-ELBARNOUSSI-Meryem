<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Exercice 3</title>
</head>
<body>

<?php
const TAUX_TVA = 20;
const DEVISE = "MAD";

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * (TAUX_TVA / 100);
$totalTTC = $totalHT + $montantTVA;

$totalTTC += 15;
?>

<h3>Récapitulatif de la commande</h3>
<p>Total HT : <?php echo $totalHT; ?> <?= DEVISE ?></p>
<p>TVA (<?= TAUX_TVA ?>%) : <?php echo $montantTVA; ?> <?= DEVISE ?></p>
<p>Total TTC (avec livraison) : <?php echo $totalTTC; ?> <?= DEVISE ?></p>

<?php
if (defined('TAUX_TVA')) {
    echo '<p>La constante TAUX_TVA est bien définie.</p>';
}
?>

</body>
</html>
