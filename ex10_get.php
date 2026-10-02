<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Traitement GET</title>
</head>
<body>

<?php
if (!isset($_GET['nom']) || !isset($_GET['prenom']) || !isset($_GET['groupe'])) {
    echo "Aucune donnée reçue. Merci de remplir le formulaire.";
} else {
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);
    $groupe = trim($_GET['groupe']);

    if ($nom === '' || $prenom === '' || $groupe === '') {
        echo "Veuillez remplir tous les champs.";
    } else {
        $nomAffiche = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenomAffiche = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupeAffiche = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

        echo "Bienvenue $prenomAffiche $nomAffiche, du groupe $groupeAffiche !";
    }
}
?>

</body>
</html>
