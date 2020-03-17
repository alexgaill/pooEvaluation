<?php

use App\Controller\ArticleController;

/**
**  ROUTING
**/

// HOME PAGE
if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])){
  $result = new ArticleController();
  $result->home();
}

// SINGLE PAGE
if ((isset($_GET["page"]) && $_GET["page"] == 'single' && isset($_GET["id"]))){
  $result = new ArticleController();
  $result->single();
}
