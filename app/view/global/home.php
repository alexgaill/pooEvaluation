
<section id="list_section">
  <ul>
    <?php foreach ($articles as $article): ?>
        <li><a href="index.php?page=single&id=<?= $article["article_id"] ?>"><?= $article["title"] ?></a></li>
    <?php endforeach?>
  </ul>
  <ul>
    <?php foreach ($categories as $categorie): ?>
        <li><a href="index.php?page=categorie&id=<?= $categorie["categorie_id"] ?>"><?= $categorie["name"] ?></a></li>
    <?php endforeach?>
  </ul>
</section>
