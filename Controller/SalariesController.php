<?php
  /**
   * SalariesController
   */

  namespace Controller;

  use \Model\SalariesModel;

  class SalariesController 
  {
    static function salaries()
    {
        $salaries = new Salaries();
        $view = new View();

        $viewHTML = $salaries->getOneSalarie();


    }
  }