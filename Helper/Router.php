<?php
    namespace  Helper;
    require_once ('./vendor/autoload.php');

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
            var_dump($this->trimUri($_SERVER['REQUEST_URI']));
        }
    }