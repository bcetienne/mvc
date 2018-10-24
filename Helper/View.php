<?php
  namespace Helper;

  use Model\SalariesModel as SalariesModel;
  /**
   * View
   */
  class View
  {
      private function loadView($viewName, $type = 'view')
      {
          $viewPath = $this->viewDirectory . 'layout/' . $viewName . ".html";
          if (file_exists($viewPath)) {
              return file_get_contents($viewPath);
          }
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
  }