<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Cadastro</h1>
        <form action="" method="post">
            <label for="">Nome</label>
            <input type="text" name="nome">

            <label for="">Email</label>
            <input type="email" name="email">

            <label for="idade">Idade:</label>
            <select name="idade" id="idade">
                <option value="-">-</option>
                <option value="18-20">18-20</option>
                <option value="21-24">21-24</option>
                <option value="25+">25+</option>
            </select>

            <label for="">CPF</label>
            <input type="text" name="cpf">

            <label for="">Senha</label>
            <input type="password" name="senha">

            <label for="">Confirmar Senha</label>
            <input type="password" name="ConfSenha">

            <input type="submit" value="Cadastrar" name="cadastro">
        </form>
        <a href="index.php">Voltar a tela de Login</a>
    </div>
</body>
</html>