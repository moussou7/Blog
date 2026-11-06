<html>
<head>
    <title>{$titre|escape}</title>
{literal}
<style>
body { font-family: sans-serif; font-size: 12px; }
.billet { margin-bottom: 10px; }
</style>
{/literal}
</head>
<body>
    <a href="index_blog.php"><h1>Mon blog</h1></a>
    <p><a href="editer_blog.php">Nouveau billet</a></p>

    {section name=b loop=$billets}
        <div class="billet">
            <h2><a href="afficher_blog.php?ID={$billets[b].ID}">{$billets[b].titre|escape}</a></h2>
            <small>{$billets[b].date_aff}</small>
            <p>{$billets[b].annonce|escape}</p>
            <p>Catégorie : <a href="index_blog.php?categorie={$billets[b].categorie|escape:'url'}">{$billets[b].categorie|escape}</a></p>
        </div>
        <hr>
    {sectionelse}
        <p>Aucun billet pour le moment.</p>
    {/section}
</body>
</html>