<?php
  namespace Controller;
  use Model\SalariesModel as SalariesModel;
  use Helper\View as View;
  use Helper\InstTwig as Twig;

  /**
   * SalariesController
   */
  class SalariesController 
  {
    // Utilisé pour le dossier Salaries dans les vues (View/Salaries/...)
    private $BaseRoute = 'View/Salaries/';
    private $SalariesRoute = 'Salaries/';

    /**
     * Page d'accueil des salariés
     */
    public function index() {
      $view = new View();
      $salariesModel = new SalariesModel();
      $instanceTwig = new Twig();
      // Retrieve all salaries
      $allSalaries = $salariesModel->getAllSalaries();
      // TODO: Faire que les deux lignes de dessous soient automatiques (cf pour la première, la seconde var private)
      $begin = explode('Controller', substr(get_class($this), 11))[0] . '/';
      $path = $begin . __FUNCTION__ . '.php';
      // End todo
      $instanceTwig->twig($path, ['allSalaries' => $allSalaries]);
    }

    public function add() {
      $view = new View();
      $salariesModel = new SalariesModel();
      $instanceTwig = new Twig();

      // Si l'utilisateur est ajouté
      if ($_POST) {
      } else {
        // Sinon afficher le formulaire d'ajout
      }

    }

    public function edit() {
        $view = new View();
        $salariesModel = new SalariesModel();
        // Récupère la ligne qui porte pour titre, le nom de la fin de l'url
        $viewHtml = $page->getOneSalarie('title', __FUNCTION__)['content'];
        // Envoie à la vue les informations récupérées
        $view->renderview($viewHtml, ['{{TITLE}}' => 'Contact'], true);
//        var_dump('edit salaries');

    }

    public function remove() {
      $view = new View();
      $salariesModel = new SalariesModel();
    }

    static function salaries()
    {
        $salaries = new Salaries();
        $view = new View();

        $viewHTML = $salaries->getOneSalarie();

    }
  }