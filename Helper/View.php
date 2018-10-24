<?php
  namespace Helper;

  /**
   * View
   */
  class View
  {
    private $viewDirectory = 'View/';
    private $elementsDirectory = 'View/Elements';

    private function loadView($controllerNameAndMethod, $modelDatas, $type = 'view')
    {
        $viewPath = $this->viewDirectory . explode('Controller', $controllerNameAndMethod['controller'])[0] . '/' . $controllerNameAndMethod['method'] . ".php";
        if (file_exists($viewPath)) {
          return file_get_contents($viewPath);
        }
    }

    public function renderView($controllerNameAndMethod, $modelDatas) {
      $view = $this->loadView($controllerNameAndMethod, $modelDatas);
      return $view;
    }

    public function renderEditView($values)
    {
        $template = $this->loadView('base');
        $editPage = file_get_contents($this->viewDirectory . '/edit.html');
        $renderHTML = str_replace('{{CONTENT}}', $editPage, $template);
        $renderHTML = str_replace('{{PAGE}}', $values['{{PAGE}}'], $renderHTML);
        $renderHTML = str_replace('{{TITLE}}', $values['{{PAGE}}'], $renderHTML);

        $renderHTML = str_replace('{{VALUE}}', $values['{{VALUE}}'], $renderHTML);
        $renderHTML = str_replace('{{MENU}}', '', $renderHTML);
        $renderHTML = str_replace('{{MY_NAME}}', '', $renderHTML);

        echo $renderHTML;
    }

    public function error404() {
        echo 'Erreur 404, page introuvable';
    }
  }