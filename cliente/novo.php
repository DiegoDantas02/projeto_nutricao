<?php
include "../includes/cabecalho.php";
?>


<h1> Tabela de Nutrição </h1>
<p>  Insera suas Caracteristicas </p>

<form action="post" method="index.php">

    Nome: <input name="nome" type="text" required> <br>
    Cidade: <input name="cidade" type="text" required> <br>
    Estado: <input name="estado" type="text" required> <br>
    Peso: <input name="peso" type="float" required> <br>
    Altura: <input name="cidade" type="float" required> <br>
    Data de Nascimento: <input name="cidade" type="number" required> <br>
    Data da Última Consulta: <input name="" type="number" required> <br>

</form>

 <?php
 include "../includes/rodape.php";

 ?>