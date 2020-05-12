<?php

require_once "autoload.php";

 use vendor\search;

// require 'C:\xampp\vendor\search.php';

 $busca = new search;

 $resultado = $busca->getAddressFromZipCode('07077200');

 print_r($resultado);