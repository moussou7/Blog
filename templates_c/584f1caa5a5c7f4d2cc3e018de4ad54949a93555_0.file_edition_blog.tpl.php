<?php
/* Smarty version 5.8.5, created on 2026-11-06 17:16:58
  from 'file:edition_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6aedfd7a64f557_14439130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '584f1caa5a5c7f4d2cc3e018de4ad54949a93555' => 
    array (
      0 => 'edition_blog.tpl',
      1 => 1793979710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6aedfd7a64f557_14439130 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp1\\htdocs\\Blog\\templates';
?><html>

  <head>
      
      
    <title><?php echo $_smarty_tpl->getValue('titre');?>
</title>

<style>
h1 { font-family: sans-serif; font-size: 20px; }
table.champs_saisie { font-family: sans-serif; font-size: 12px; }
table.champs_saisie td { vertical-align: top; }
</style>

</head>
<body>
<h1>Nouveau billet</h1>
<form method="post" action="editer_blog.php">
<table class="champs_saisie">
<tr><td>Titre :</td><td><input name="titre" type="text" /></td></tr>
<tr><td>Contenu :</td>
    <td><textarea name="contenu" rows="15" cols="40"></textarea></td></tr>
<tr><td>Catégorie :</td><td><input name="categorie" type="text" /></td></tr>
<tr><td></td><td><input name="submit" type="submit" value="Poster" /></td></tr>
</table>
</form>
</body>
</html><?php }
}
