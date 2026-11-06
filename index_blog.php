<?php
require_once 'config_blog.php';

$requete = "SELECT ID, titre, annonce, categorie,
                   DATE_FORMAT(date_billet, '%d/%m/%Y %H:%i') AS date_aff
            FROM billets_blog";

if (isset($_GET['categorie']) && $_GET['categorie'] !== '') {
    $categorie = mb_substr(trim($_GET['categorie']), 0, 12);
    $stmt = $pdo->prepare($requete . " WHERE categorie = ? ORDER BY date_billet DESC");
    $stmt->execute([$categorie]);
    $titre = 'Mon blog - ' . $categorie;
} else {
    $stmt = $pdo->query($requete . " ORDER BY date_billet DESC");
    $titre = 'Mon blog';
}

$billets = $stmt->fetchAll(PDO::FETCH_ASSOC);

$smarty->assign('titre', $titre);
$smarty->assign('billets', $billets);
$smarty->display('index_blog.tpl');