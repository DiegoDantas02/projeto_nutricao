<?php
include "../includes/conexao.php";
$id = $_GET["id"];

$sql = "delete from t_cliente where id =  $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("Location: selecionar.php");
?>