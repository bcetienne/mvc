<?php
    namespace  Helper;
    use Controller as Controller;
    use Helper as Helper;

    class Router
    {
        private function trimUri($uri) {
            if (substr_count($uri, '/') > 1) {
                $uriArray = explode('/', $uri);
                array_splice($uriArray, 0, 1);
                return $uriArray;
            } else {
                return substr($uri, 1);
            }
        }
        
        public function route() {
            return $this->trimUri($_SERVER['REQUEST_URI']);
        }

        /**
         * Redirect to a specific controller
         * 
         * @param string $url
         * @param array $parameters
         * @return false|bool $return
         */
        public function redirect($url, $parameters) {
            $controllerName = ucfirst($parameters['controller']) . 'Controller';
            // Extract and rename the route
            $routeExtraction = $this->route();
            if (!is_array($routeExtraction)) {
              $route = '/' . $routeExtraction;
            } else {
              foreach ($routeExtraction as $element) {
                $route .= '/' . $element;
              }
            }
            // TODO: Faire en sorte que si l'url n'est pas renseigné alors erreur.
            // Test si la route existe
            if ($url == $route) {
                // Test si le controleur existe
                if (file_exists('Controller/' . $controllerName . '.php')) {
                    $controllerTemp = 'Controller\\' . ucfirst($parameters['controller']) . 'Controller';
                    $controllerObject = new $controllerTemp();
                    unset($controllerTemp);
                    // Test si la méthode existe dans le controleur
                    if (method_exists($controllerObject, $parameters['action'])) {
                        $method = $parameters['action'];
                        // On appelle la méthode de la classe
                        $controllerObject->$method();
                    } else {
                        echo 'La méthode <b>' . $parameters['action'] . '</b> n\'existe pas, veuillez la créer dans la classe ' . $controllerName . ' puis réessayez.';
                    }
                } else {
                    echo 'Le controller <b>' . $controllerName . '.php</b> n\'existe pas, créez le puis réessayez ou changer l\'url de la route.';
                }
                exit;
            }
        }
    }