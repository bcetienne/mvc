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

    /**
     * Ajout d'un salarié
     */
    public function add() {
      $instanceTwig = new Twig();
      var_dump($_POST);
      // Si l'utilisateur est envoyé
      if (isset($_POST['formFirstname']) && isset($_POST['formLastname']) && isset($_POST['formEmail']) && isset($_POST['formSalary'])) {
        var_dump($_POST);die;
      } else {
        // Sinon afficher le formulaire d'ajout
        $begin = explode('Controller', substr(get_class($this), 11))[0] . '/';
        $path = $begin . __FUNCTION__ . '.php';
        $instanceTwig->twig($path, []);
      }
    }

    /**
     * Modification d'un salarié
     * NON TRAVAILLE - FONCTIONNE PAS
     */
    public function edit() {
        $salariesModel = new SalariesModel();
        $instanceTwig = new Twig();
        // Récupère la ligne qui porte pour titre, le nom de la fin de l'url
        $viewHtml = $page->getOneSalarie('title', __FUNCTION__)['content'];
        // Envoie à la vue les informations récupérées
        $view->renderview($viewHtml, ['{{TITLE}}' => 'Contact'], true);
//        var_dump('edit salaries');

    }

    /**
     * Suppression d'un salarié
     * NON TRAVAILLE - FONCTIONNE PAS
     */
    public function remove() {
      $salariesModel = new SalariesModel();
      $instanceTwig = new Twig();
    }
  }