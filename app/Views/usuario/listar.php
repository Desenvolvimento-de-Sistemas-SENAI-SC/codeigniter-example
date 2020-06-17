<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Listar usuários</title>
</head>
<body>
    <h1>Lista de usuários</h1>

    <table>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Visualizar</th>
        </tr>
        <?php
            foreach($usuarios as $usuario)  {
                echo '<tr>';
                echo '<td>' . $usuario['nome'] . '</td>';
                echo '<td>' . $usuario['email'] . '</td>';
                echo '<td><a href="detalhes/'. $usuario['id'].'">Abrir</a></td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>