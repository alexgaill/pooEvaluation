<div class="container">
    <h1><?= $categorie["name"] ?></h1>

    <ul>
    <?php foreach ($articles as $article): ?>
        <li><a href="index.php?page=single&id=<?= $article["article_id"] ?>"><?= $article["title"] ?></a></li>
    <?php endforeach?>
  </ul>
</div>