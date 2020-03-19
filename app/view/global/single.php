<h1><?= $article["title"]?></h1>

<p><?= $article["description"]?></p>
<p><?= $article["created_at"]?></p>

<div class="mt-2">
    <form action="index.php?page=newCom" method="POST">
        <div class="form-group">
            <label for="title">Titre du commentaires</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="content">Contenu du commentaires</label>
            <textarea name="content" id="content"></textarea>
        </div>
        <input type="hidden" name="article_id" value="<?= $article["article_id"]?>">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
<div class="container">
        <?php foreach($commentaires as $com): ?>
            <div class="jumbotron mt-3">
                <h3><?= $com["title"]?></h3>
                <p><?= $com["content"]?></p>
                <p>Mis en ligne le <?= $com["created_at"]?></p>
            </div>
        <?php endforeach ?>
</div>



