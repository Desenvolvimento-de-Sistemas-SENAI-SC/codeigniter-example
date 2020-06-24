<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detalhar usuário</title>
</head>
<body>
    <h1>Usuário <?php echo $usuario['nome']; ?></h1>

    <p>
        E-mail: <strong><?php echo $usuario['email'] ?></strong>
    </p>
    <p>
        Senha: <strong><?php echo $usuario['hash_senha'] ?></strong>
    </p>

    <?php echo anchor('Usuario/index', 'Voltar') ?>

</body>
</html>