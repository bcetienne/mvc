<?php
  namespace Helper;
  use Twig_Loader_Filesystem;
  use Twig_Environment;

  class InstTwig
  {
    static public function twig($view, $arg) {
      $loader = new Twig_Loader_Filesystem('View');
      $twig = new Twig_Environment($loader);
      echo $twig->render($view, $arg);
    }
  }