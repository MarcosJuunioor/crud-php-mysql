<?php
include "conexao.php";
$conn = conectar();

$id = $_GET['id'];
$nome = $_GET['nome'];
$idade = $_GET['idade'];

echo "
<form method='post' action='atualizar-pessoa.php?id=$id'>
  <input type='text' name='nome' value='$nome'><br>
  <input type='number' name='idade' value='$idade'><br>
  <input type='submit' value='atualizar'>
</form>

";




 ?>
