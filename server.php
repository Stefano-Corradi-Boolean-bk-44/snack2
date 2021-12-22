<?php


require_once __DIR__ . "/db.php";


$name = $_GET['name'];

$namesUp = [];

foreach($names as $name){
  $namesUp[] = strtoupper($name);
}

if(in_array(strtoupper($name), $namesUp)){
  echo 'OK';
}else{
  echo 'KO';
}