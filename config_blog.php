<?php
// config_blog.php
use Smarty\smarty;
require_once(__DIR__ . '/smarty/libs/smarty.class.php');

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/templates/');
$smarty->setCompileDir(__DIR__ . '/templates_c/');

// Connexion à la base de données MySQL
$host = 'localhost';
$dbname = 'blog';
$user = 'root';
$password = ''; // vide par défaut sous XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}