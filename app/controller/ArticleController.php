<?php

namespace App\Controller;




class ArticleController extends AppController{

  public function __construct(){
    $this->loadModel('Article');
  }
  /**
   * [retrieve the entire articles index and send to render]
   * @return [void]
   */
  public function home($category = null, $notification = false){

  
    return $this->render('global.home',
      []
    );
  }
  
}
