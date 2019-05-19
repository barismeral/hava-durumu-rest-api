<?php

header("Content-Type: application/json");

include './api.php';

$api = new API();

if($_GET){


  echo $api->getHavaDurumu((string)$_GET['id']);

}
else{

   echo $api->getTumIller();

}

?>