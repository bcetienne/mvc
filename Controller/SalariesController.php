<?php
  namespace Controller;

  /**
   * SalariesController
   */

  namespace Controller;

  class SalariesController 
  {
    public function index() {
      var_dump('index salaries');die;
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