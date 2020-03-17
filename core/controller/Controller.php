<?php
namespace Core\Controller;

class Controller{

  public function render($view, $params){
    $pathView = str_replace(".", "/", $view);

    ob_start();
    extract($params);
    require ROOT . '/app/view/' . $pathView . '.php';
    $content = ob_get_clean();
    require ROOT . '/app/view/' . $this->default . '.php';
  }

}
