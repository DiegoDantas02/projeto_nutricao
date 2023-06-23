<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1>
    <a href="../img/chapeuformatura.png"> Painel Selecionar </a>
</h1>

<p>
    <a href="novo.php"> Adicionar cliente </a>
</p>
<h2>Listagem de clientes</h2>

<table border="1">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Telefone</td>
        <td>E-mail</td>
        <td>Data de nascimento</td>
        <td>Ações</td>

    </tr>
    <?php
    $sql = "select * from t_cliente";
    $todos_os_cliente = mysqli_query($conexao, $sql);
    while ($um_cliente = mysqli_fetch_assoc($todos_os_cliente)) :
    ?>
        <tr>
            <td><?php echo $um_cliente['id'] ?></td>
            <td>
                <img src="<?php echo $um_cliente['foto']; ?>" alt="excluir" width="50px" height="60px">


            <td><?php echo $um_cliente['nome'] ?></td>
            <td><?php echo $um_cliente['sobrenome'] ?></td>
            <td><?php echo $um_cliente['telefone'] ?></td>
            <td><?php echo $um_cliente['email'] ?></td>
            <td><?php echo $um_cliente['data_nascimento'] ?></td>


            <td style="text-decoration: none;">
                <a href="visualizar.php?id=<?php echo $um_cliente["id"]; ?>" title="Ver Completo">Visualizar</a>

                <a href="editar.php?id=<?php echo $um_cliente["id"]; ?>" title="Editar Os dados ">Editar</a>

                <a href="deletar.php?id=<?php echo $um_cliente["id"]; ?>" title="Excluir dados do cliente">Excluir</a>
                <img src="../img/trash.png" width="24" title="Excluir cliente">
            </td>
        </tr>
    <?php
    endwhile;
    ?>
</table>
<br><br><br>
<?php
include "../includes/rodape.php";
?>