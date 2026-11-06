<?php
require_once 'config_blog.php';

if (!isset($_POST['ID'], $_POST['nom'], $_POST['commentaire'])
    || !ctype_digit($_POST['ID'])) {
    die('Données incorrectes.');
}

$id          = (int) $_POST['ID'];
$nom         = mb_substr(trim($_POST['nom']), 0, 50);
$commentaire = trim($_POST['commentaire']);

if ($nom === '' || $commentaire === '') {
    die('Le nom et le commentaire sont obligatoires.');
}

// Vérifier que le billet existe
$stmt = $pdo->prepare("SELECT ID FROM billets_blog WHERE ID = ?");
$stmt->execute([$id]);
if (!$stmt->fetch()) {
    die('Billet introuvable.');
}

// Ajouter le commentaire
$stmt = $pdo->prepare(
    "INSERT INTO commentaires_blog (nom, comment, ID) VALUES (?, ?, ?)"
);
$stmt->execute([$nom, $commentaire, $id]);

header('Location: afficher_blog.php?ID=' . $id);
exit;