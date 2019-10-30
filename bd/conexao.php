<?php
function conectar(){
  $conn = new mysqli("localhost", "root", "Yecgaa123", "teste");

  if($conn->connect_error){
    die($conn->connect_error);
  }

  return $conn;
}

 ?>
