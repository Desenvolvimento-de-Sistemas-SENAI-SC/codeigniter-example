
<?php echo \Config\Services::validation()->listErrors(); ?>

<form action="<?php site_url('Usuario/editar') ?>" method="post">

    <h1>Editar usuário</h1>

    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

    <label for="nome">Nome: </label>
    <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>"> <br>

    <label for="email">E-mail: </label>
    <input type="email" name="email" value="<?php echo $usuario['email']; ?>"> <br>

    <input type="submit" value="Editar">

</form>
