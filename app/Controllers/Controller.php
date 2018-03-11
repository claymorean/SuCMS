<?php
namespace App\Controllers;

use App\Views\View;
/**
* Controller
*/
class Controller
{
    protected $view;
    
    public function __construct(){
    }

    public function __destruct(){
      $view = $this->view;
      if ( $view instanceof View ) {
        extract($view->data);
        require $view->view;
      }
  }
}