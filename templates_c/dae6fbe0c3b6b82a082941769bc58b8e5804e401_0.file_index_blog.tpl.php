<?php
/* Smarty version 5.8.5, created on 2026-11-06 17:31:26
  from 'file:index_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.5',
  'unifunc' => 'content_6aee00dee531e7_61492161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dae6fbe0c3b6b82a082941769bc58b8e5804e401' => 
    array (
      0 => 'index_blog.tpl',
      1 => 1793982677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6aee00dee531e7_61492161 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp1\\htdocs\\Blog\\templates';
?><html>
<head>
    <title><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('titre'), ENT_QUOTES, 'UTF-8', true);?>
</title>

<style>
body { font-family: sans-serif; font-size: 12px; }
.billet { margin-bottom: 10px; }
</style>

</head>
<body>
    <a href="index_blog.php"><h1>Mon blog</h1></a>
    <p><a href="editer_blog.php">Nouveau billet</a></p>

    <?php
$__section_b_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('billets')) ? count($_loop) : max(0, (int) $_loop));
$__section_b_0_total = $__section_b_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_b'] = new \Smarty\Variable(array());
if ($__section_b_0_total !== 0) {
for ($__section_b_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_b']->value['index'] = 0; $__section_b_0_iteration <= $__section_b_0_total; $__section_b_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_b']->value['index']++){
?>
        <div class="billet">
            <h2><a href="afficher_blog.php?ID=<?php echo $_smarty_tpl->getValue('billets')[($_smarty_tpl->getValue('__smarty_section_b')['index'] ?? null)]['ID'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('billets')[($_smarty_tpl->getValue('__smarty_section_b')['index'] ?? null)]['titre'], ENT_QUOTES, 'UTF-8', true);?>
</a></h2>
            <small><?php echo $_smarty_tpl->getValue('billets')[($_smarty_tpl->getValue('__smarty_section_b')['index'] ?? null)]['date_aff'];?>
</small>
            <p><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('billets')[($_smarty_tpl->getValue('__smarty_section_b')['index'] ?? null)]['annonce'], ENT_QUOTES, 'UTF-8', true);?>
</p>
            <p>Catégorie : <a href="index_blog.php?categorie=<?php echo rawurlencode((string)$_smarty_tpl->getValue('billets')[($_smarty_tpl->getValue('__smarty_section_b')['index'] ?? null)]['categorie']);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('billets')[($_smarty_tpl->getValue('__smarty_section_b')['index'] ?? null)]['categorie'], ENT_QUOTES, 'UTF-8', true);?>
</a></p>
        </div>
        <hr>
    <?php }} else {
 ?>
        <p>Aucun billet pour le moment.</p>
    <?php
}
?>
</body>
</html><?php }
}
