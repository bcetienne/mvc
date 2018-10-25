<?php
  require_once('./vendor/autoload.php');
  require_once('./Config/constants.php');
  $GLOBALS['config'] = require('./' . FILE_CONFIG . 'app.php');
  // Call routes
  require_once('./' . FILE_CONFIG . 'routes.php');
