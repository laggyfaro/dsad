<?php

require __DIR__ . '/vendor/autoload.php';

// 1. db connection here

app()->get('/', function () {
  echo 'Hello World';
});

app()->run();
