<?php

    namespace  Helper;

    require_once ('./vendor/autoload.php');

    use Controller\sectionController as sectionController;

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
            $sectionController = new sectionController();
            $sectionController->home();
            $uri = $this->trimUri($_SERVER['REQUEST_URI']);

//            include ('./view/layout/base.php');
            if (gettype($uri) === 'array') {
                if (method_exists($sectionController, $uri[0])) {
                    $sectionController::admin($uri[0]);
                } else {
                    $sectionController::code404();
                }
            }
        }
    }