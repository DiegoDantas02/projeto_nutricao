<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<br>




<h1 style="text-align: center; color:dark; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);"> Seja Bem-Vindo ao Seu Nutricionista Virtual </h1>
<br>

<h3 style="text-align: center; "> Já tem conta? <a href="../painel/cadastro_usuario.php">Registre-se</a ></h3>
<br>
    <h2>Login</h2>
    <form method="POST" action="validar.php">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Entrar">
    </form>
</body>
</html>





<?php
include "../includes/rodape.php";
?>