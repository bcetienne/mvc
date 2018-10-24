<?php
  use Helper\Router as Router;

  // Retrieve route from URL
  $router = new Router();

  if ($_SERVER['REQUEST_URI'] == '/') {
    header('Location: /salaries');
  }
  
  // Make all routes needed
  $router->redirect('/salaries', ['controller' => 'Salaries', 'action' => 'index']);
  $router->redirect('/salarie/add', ['controller' => 'Salaries', 'action' => 'add']);
  $router->redirect('/salarie/edit', ['controller' => 'Salaries', 'action' => 'edit']);
  $router->redirect('/salarie/remove', ['controller' => 'Salaries', 'action' => 'remove']);