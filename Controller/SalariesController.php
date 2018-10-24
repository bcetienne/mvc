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
      $salariesModel = new SalariesModel();
      $allSalaries = $salariesModel->getAllSalaries();
      $view->renderView(['controller' => substr(get_class($this), 11), 'method' => __FUNCTION__], $allSalaries);
    }

    public function add() {
      var_dump('add salaries');
    }

    public function edit() {
        $page = new Page();
        $view = new View();
        // Récupère la ligne qui porte pour titre, le nom de la fin de l'url
        $viewHtml = $page->getOneSalarie('title', __FUNCTION__)['content'];
        // Envoie à la vue les informations récupérées
        $view->renderview($viewHtml, ['{{TITLE}}' => 'Contact'], true);
//        var_dump('edit salaries');

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