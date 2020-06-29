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
            <th>Opções</th>
        </tr>
        <?php
            foreach($usuarios as $usuario)  {
                echo '<tr>';
                echo '<td>' . $usuario['nome'] . '</td>';
                echo '<td>' . $usuario['email'] . '</td>';
                echo '<td>';
                echo anchor('Usuario/detalhes/'.$usuario['id'], 'Abrir');
                echo ' ';
                echo anchor('Usuario/deletar/'.$usuario['id'], 'Deletar');
                echo '</td>';
                echo '</tr>';
            }
        ?>
    </table>

    <p> 
            Adicionar 
            <?php
                echo anchor('Usuario/cadastrar', 'novo')
            ?>
            usuário
    </p>
</body>
</html>