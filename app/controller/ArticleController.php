<?php

namespace App\Controller;

use App\Controller\CategoryController;
use App\Controller\SecurityController;



class ArticleController extends AppController{

  public function __construct(){
    $this->loadModel('Article');
    $this->categoryController = new CategoryController;
    $this->securityController = new SecurityController($this);
  }
  /**
   * [retrieve the entire articles index and send to render]
   * @return [void]
   */
  public function home($category = null, $notification = false){
    $categories = $this->categoryController->fetchAllCategories();
    if($category){
      try{
        $filter_category = $this->categoryController->getCategoryId($category);
        $items = $this->modelName->queryArticlesByCategory($filter_category["id"]);
      }catch(Exception $err){
        $items = $this->modelName->queryArticles();
      }
    }else{
      $items = $this->modelName->queryArticles();
    }

    return $this->render('global.home',
      [
        "articles" => $items,
        "categories" => $categories,
        "notification" => $notification
      ]
    );
  }
  /**
   * [retrieve a specific article and send to render]
   * @return [void]
   */
  public function single($id){
    $item = $this->modelName->queryArticleById($id);
    return $this->render('global.single',
      [
        "article" => $item,
      ]
    );
  }
  /**
   * [used in rendering to print the excerpt from the article]
   * @param  [string] $text [the 'body' field of the article]
   * @return [void]
   */
  public function printExcerpt($text){
    if(strlen($text) <= 150){
      echo($text . "...");
    }else{
      $first_150 = substr($text, 0, 100);
      $at_last_space = substr($first_150, 0, (strrpos($first_150, ' ', 0)));
      $excerpt = substr($at_last_space, -1) == ',' ? substr($at_last_space, 0, strlen($at_last_space)-1) : $at_last_space;
      echo($excerpt . "...");
    }
  }

  /**
   * [used in rendering to print the excerpt from the article]
   * @param  [string] $text [the 'body' field of the article]
   * @return [void]
   */
  public function getCategory($category_id){
    $category = $this->categoryController->getCategoryById((int)$category_id);

    return $category["title"];
  }
}
