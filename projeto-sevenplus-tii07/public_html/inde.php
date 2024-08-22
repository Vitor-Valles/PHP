<?php 
    $pageName = "Entre e curta";
    include("inc/head.inc.php");
?>
<main>
    <h1>Login</h1>
    <form method="post" action="#">
        <label>Usuário: </label><br>
        <input type="text" name="user-name" required.><br>
        <labe>Senha; </label><br>
        <input type="text" name="user-password" required><br><!-- depois modifica o type para password -->
        <input type="submit" value="Entre e curta">
    </form>
    <hr>
    <p>
        <a href="#">Recuperar a senha</a>
        <a href="user-registration.php">Cadastro de usuário</a>
    </p>
</main>
<?php 
    include ("inc/footer.inc.php");
?>