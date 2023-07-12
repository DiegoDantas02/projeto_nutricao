
<?php include "../includes/cabecalho.php"; include "../includes/conexao.php"; include "../includes/menu.php";?>
<br>

<head>
    <title>Cadastro de Usuário</title>
</head>
<br> <br>   
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <button type="submit"  action="login.php" method="post"> Cadastrar </button> 
    </form>

<?php include "../includes/rodape.php";?>