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
      $path = $begin . __FUNCTION__ . '.html.twig';
      // End todo
      // TODO: Url dynamique
      $instanceTwig->twig($path, ['allSalaries' => $allSalaries, 'menuName' => 'Ajouter un salarié', 'menuUrl' => URL_SALARIES_ADD]);
    }

    /**
     * Ajout d'un salarié
     */
    public function add() {
        $salariesModel = new SalariesModel();
        $instanceTwig = new Twig();
      // Si l'utilisateur est envoyé
      if (isset($_POST['formFirstname']) && isset($_POST['formLastname']) && isset($_POST['formEmail']) && isset($_POST['formSalary'])) {
        $salariesModel->addSalarie($_POST);
        header('Location: /');
      } else {
        // Sinon afficher le formulaire d'ajout
        $begin = explode('Controller', substr(get_class($this), 11))[0] . '/';
        $path = $begin . __FUNCTION__ . '.html.twig';
        $instanceTwig->twig($path, ['menuName' => 'Retour à la liste', 'menuUrl' => URL_SALARIES_HOME, 'POST' => $_POST]);
      }
    }

    /**
     * Modification d'un salarié
     * NON TRAVAILLE - FONCTIONNE PAS
     */
    public function edit() {
        $salariesModel = new SalariesModel();
        $instanceTwig = new Twig();
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