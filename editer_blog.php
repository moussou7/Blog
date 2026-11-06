<?php
require_once 'config_blog.php';

if (isset($_POST['titre'], $_POST['contenu'], $_POST['categorie'])) {
    $titre     = trim($_POST['titre']);
    $contenu   = trim($_POST['contenu']);
    $categorie = mb_substr(trim($_POST['categorie']), 0, 12);
    $annonce   = mb_substr(strip_tags($contenu), 0, 150);

    if ($titre !== '' && $contenu !== '') {
        $stmt = $pdo->prepare(
            "INSERT INTO billets_blog (titre, contenu, annonce, date_billet, categorie)
             VALUES (?, ?, ?, NOW(), ?)"
        );
        $stmt->execute([$titre, $contenu, $annonce, $categorie]);

        header('Location: afficher_blog.php?ID=' . $pdo->lastInsertId());
        exit;
    }
}

$smarty->assign('titre', 'Nouveau billet');
$smarty->display('edition_blog.tpl');