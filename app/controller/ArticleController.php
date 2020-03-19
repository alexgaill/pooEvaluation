<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Model\CategorieModel;
use App\Model\CommentairesModel;

class ArticleController extends AppController{

  public function __construct(){
    $this->loadModel('Article');
  }

  /**
   * 
   */
  public function home(){

    $articleModel = new ArticleModel();
    $articles = $articleModel->queryArticles();
    
    $categorieModel = new CategorieModel();
    $categories = $categorieModel->queryAll();

    return $this->render('global.home',
      ['articles' => $articles,
      'categories' => $categories]
    );
  }

  public function single()
  {
      $articleModel = new ArticleModel();
      $article = $articleModel->queryArticleById($_GET["id"]);

      $comModel = new CommentairesModel();
      $commentaires = $comModel->find($_GET["id"]);

      return $this->render('global.single', [
        'article' => $article, 
        "commentaires" => $commentaires
        ]);
  }
  
  public function singleCat()
  {
    $categorieModel = new CategorieModel();
    $categorie= $categorieModel->find($_GET["id"]);

    $articleModel = new ArticleModel();
    $articles = $articleModel->queryArticlesByCategory($_GET["id"]);

      return $this->render('global.singleCat', [
        'categorie' => $categorie, 
        'articles' => $articles
        ]);
  }

  public function newCom()
  {
    $comModel = new CommentairesModel();
    $comModel->newOne([
      ':title' => $_POST["title"],
      ':content' => $_POST["content"],
      ':article_id' => $_POST["article_id"]
    ]);
    header("Location: index.php?page=single&id=".$_POST["article_id"]);
  }
}
