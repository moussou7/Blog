<html>
<head>
<title>{$billet.titre|escape}</title>
{literal}
<style>
body { font-family: sans-serif; font-size: 12px; }
h1 { font-size: 20px; }
.commentaire { margin-bottom: 10px; }
</style>
<script>
function afficherFormulaire() {
    document.getElementById('form_commentaire').style.display = 'block';
}
</script>
{/literal}
</head>
<body>
<a href="index_blog.php">Mon blog</a>
<h1>{$billet.titre|escape}</h1>
<p>{$billet.date_aff}</p>
<p>{$billet.contenu|escape|nl2br}</p>
<p>Catégorie : {$billet.categorie|escape}</p>
<h3>Commentaires</h3>
{section name=i loop=$commentaires}
<div class="commentaire">
    <b>{$commentaires[i].nom|escape}</b> - {$commentaires[i].date_aff}<br />
    {$commentaires[i].comment|escape|nl2br}
</div>
{sectionelse}
<p>Aucun commentaire.</p>
{/section}
<a href="#" onclick="afficherFormulaire(); return false;">Ajouter un commentaire</a>
<div id="form_commentaire" style="display:none;">
<form method="post" action="commenter_blog.php">
<input type="hidden" name="ID" value="{$billet.ID}" />
<p>Nom : <input type="text" name="nom" /></p>
<p><textarea name="commentaire" rows="5" cols="40"></textarea></p>
<p><input type="submit" value="Envoyer" /></p>
</form>
</div>
</body>
</html>