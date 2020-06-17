<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Listar usuários</title>
</head>
<body>
    <h1>Lista de usuários</h1>

    <ul>
        <?php
            foreach($usuarios as $usuario)  {
                echo '<li>' . $usuario['nome'] . '</li>';
            }
        ?>
    </ul>
</body>
</html>