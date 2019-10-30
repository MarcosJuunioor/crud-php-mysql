<?php
include "conexao.php";
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$conn = conectar();

$resultado = $conn->query("insert into pessoa (nome, idade) values ('$nome', $idade)") or die("Erro ao inserir registro de pessoa.");
if($resultado){
  header("Location: /teste-mysql");
}
$conn->close();

?>
