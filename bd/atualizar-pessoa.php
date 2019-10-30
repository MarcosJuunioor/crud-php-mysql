<?php
include "conexao.php";
$conn = conectar();

$id = $_GET['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
echo $id." ".$nome." ".$idade;
$resultado = $conn->query("update pessoa
              set nome = '$nome',
                  idade = $idade
              where id = $id");

if($resultado){
  header('Location: /teste-mysql');

}else{
  echo "erro ao atualizar pessoa.";
}




 ?>
