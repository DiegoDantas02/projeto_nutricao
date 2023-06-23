<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";
include "../includes/menu.php";

$id = $_GET["id"];

$nome = "";
$sql = "select * from t_cliente where id = $id";
$todos_os_alunos = mysqli_query($conexao, $sql);
while($um_aluno = mysqli_fetch_assoc($todos_os_alunos)):
$nome = $um_aluno["nome"];
endwhile;
?>
<h1>Editar Clientes <?php echo $id; ?></h1>

<form method="post" action="atualizar.php?id=<?php echo $id;?>">
    <!-- mostrar no input a variavel -->
    Nome: <input name="nome" value="<?php echo $nome;?>"> <br>
<br>
    Cidade: <input name="cidade" value="<?php echo $cidade;?>"> <br>
<br>
    Estado: <input name="estado" value="<?php echo $estado;?>"> <br>
<br>
    Peso: <input name="peso" value="<?php echo $peso;?>"> <br>
<br>
    Altura: <input name="altura" value="<?php echo $altura;?>"> <br>
<br>
    Data de Nascimento: <input name="data_nascimento" value="<?php echo $data_nascimento;?>"> <br>
<br>
    Sua Última Consulta: <input name="data_ultima_consulta" value="<?php echo $data_ultima_consulta;?>"> <br>
<br>
    <button type="submit">atualizar</button>
</form>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>