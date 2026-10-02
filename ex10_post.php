<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Traitement POST</title>
</head>
<body>

<?php
if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['groupe'])) {
    echo "Aucune donnée reçue. Merci de remplir le formulaire.";
} else {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

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
