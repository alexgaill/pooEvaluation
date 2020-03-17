<?php

use App\Controller\ArticleController;

/**
**  ROUTING
**/

// HOME PAGE
if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])){
  $result = new ArticleController();
  if(isset($_GET["category"])){
    $result->home($_GET["category"]);
  }else{
    $result->home();
  }
}
