<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Model\CategorieModel;

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

      return $this->render('global.single', ['article' => $article]);
  }
  
}
