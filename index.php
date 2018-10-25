<?php
  require_once('./vendor/autoload.php');
  $GLOBALS['config'] = require('./Config/app.php');
  // Call routes
  require_once('./Config/routes.php');
