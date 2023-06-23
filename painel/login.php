<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<br>




<h1 style="text-align: center; color:dark; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);"> Seja Bem-Vindo ao Seu Nutricionista Virtual </h1>
<br>

<h3 style="text-align: center;"> Já tem conta? Registre-se </h3>
<br>
<br>
<form method="post" action="validar.php">
    Usuario: <input  name="usuario" type="email" placeholder="Email" required>
    <br>
    <br>
    Senha: <input  name="senha" type="password" placeholder="senha" required maxlength="20">
    <br>
    <br>
    <br>
    <button type="submit"> Acessar Sistema</button>
   
</form>




<?php
include "../includes/rodape.php";
?>