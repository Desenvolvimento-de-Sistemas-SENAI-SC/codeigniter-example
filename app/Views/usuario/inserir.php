
<?php echo \Config\Services::validation()->listErrors(); ?>

<form action="<?php site_url('Usuario/cadastrar') ?>" method="post">

    <h1>Cadastro de usuário</h1>

    <label for="nome">Nome: </label>
    <input type="text" name="nome"> <br>

    <label for="email">E-mail: </label>
    <input type="email" name="email"> <br>

    <label for="hash_senha">Senha: </label>
    <input type="password" name="hash_senha"> </br>

    <label for="confirmacao">Repetir: </label>
    <input type="password" name="confirmacao"> </br>

    <input type="submit" value="Cadastrar">


</form>
