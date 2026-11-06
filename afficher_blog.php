<?php
require_once 'config_blog.php';

if (!isset($_GET['ID']) || !ctype_digit($_GET['ID'])) {
    die('Billet introuvable.');
}
$id = (int) $_GET['ID'];

$stmt = $pdo->prepare(
    "SELECT ID, titre, contenu, categorie,
            DATE_FORMAT(date_billet, '%d/%m/%Y %H:%i') AS date_aff
     FROM billets_blog WHERE ID = ?"
);
$stmt->execute([$id]);
$billet = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$billet) {
    die('Billet introuvable.');
}

$stmt = $pdo->prepare(
    "SELECT nom, comment,
            DATE_FORMAT(date_comment, '%d/%m/%Y %H:%i') AS date_aff
     FROM commentaires_blog WHERE ID = ? ORDER BY date_comment"
);
$stmt->execute([$id]);
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

$smarty->assign('billet', $billet);
$smarty->assign('commentaires', $commentaires);
$smarty->display('afficher_blog.tpl');