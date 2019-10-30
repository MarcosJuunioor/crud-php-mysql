<?php
include "conexao.php";
$conn = conectar();

$id = $_GET['id'];

$resultado = $conn->query("delete from pessoa where id = $id");

if($resultado){
  header("Location: /teste-mysql/bd/listar-pessoas.php");
}else{
  echo "erro ao deletar pessoa.";
}
 ?>
