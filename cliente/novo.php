<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>


<h1> Tabela de Nutrição Novo Cliente </h1>
<p>  Insera as Caracteristicas do novo Cliente. </p>

<form action="inserir.php" method="post">

    Nome: <input name="nome"  required maxlegth="50"> <br>
    <input type="radio" name="sexo" value="masculino"> Masculino<br>
    <input type="radio" name="sexo" value="feminino"> Feminino<br>
    Cidade: <input name="cidade"  required maxlegth="50"> <br>
    Estado: <input name="estado"  required maxlegth="50"> <br>
    Peso: <input name="peso"  required maxlegth="50"> <br>
    Altura: <input name="cidade"  required maxlegth="50"> <br>
    Data de Nascimento: <input name="cidade" type="date" required maxlegth="50"> <br>
    Data da Última Consulta: <input name="" type="number" required maxlegth="50"> <br>

    <button type="submit" > Cadastrar </button>

</form>

 <?php
 include "../includes/rodape.php";

 ?>