<?php
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->safeLoad();

  define('ROOT', 'http://localhost/multi-tutors');
?>