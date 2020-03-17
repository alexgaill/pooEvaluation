<?php

namespace App\Controller;

use App\Model\ArticleModel;

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

    return $this->render('global.home',
      ['articles' => $articles]
    );
  }
  
}
