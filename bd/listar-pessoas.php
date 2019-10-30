<?php
include "conexao.php";

$conn = conectar();

$resultado = $conn->query("select * from pessoa");
if($resultado->num_rows > 0){
  echo "<table style='border:solid 1px black'>";
  while($pessoa = $resultado->fetch_assoc()){
    $id = $pessoa['id'];
    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];
    echo "
    <tr>
      <td style='border:solid 1px black'>".$pessoa['nome']."</td>
      <td style='border:solid 1px black'>".$pessoa['idade']."</td>
      <td style='border:solid 1px black'><a href='form-atualizacao-pessoa.php?id=$id&nome=$nome&idade=$idade'><button>atualizar</button></a></td>
      <td style='border:solid 1px black'><a href='deletar-pessoa.php?id=$id'><button>apagar</button></a></td>
    </tr>
    ";
  }
  echo "</table>";

}else{
  echo "<h2>Não há pessoas cadastradas.</h2>";
}


?>
