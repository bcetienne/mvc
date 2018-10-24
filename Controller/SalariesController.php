<?php
  namespace Controller;
  use Model\SalariesModel as SalariesModel;
  use Helper\View as View;

  /**
   * SalariesController
   */
  class SalariesController 
  {
    // Utilisé pour le dossier Salaries dans les vues (View/Salaries/...)
    private $BaseRoute = 'View/Salaries/';

    public function index() {
      $view = new View();
      
    }

    public function add() {
      var_dump('add salaries');
    }

    public function edit() {
      var_dump('edit salaries');
    }

    public function remove() {
      var_dump('remove salaries');
    }

    static function salaries()
    {
        $salaries = new Salaries();
        $view = new View();

        $viewHTML = $salaries->getOneSalarie();


    }
  }