<?php 
    $pageName = "Entre e curta";
    include("inc/head.inc.php");
?>
<main>
    <h1>Cadastro de Usuário</h1>
    <form method="post" action=".. /private/api/insert-user-registration.php">
        <label>Usuário: </label><br>
        <input type="text" name="user-name" required.><br>
        <labe>Email: </label><br>
        <input type="text" name="user-email" required><br>
        <label>Senha: </label><br>
        <input type="text" name="user-password" required><br><!-- depois modifica o type para password -->
        <labe>Confirmar Senha: </label><br>
        <input type="text" name="user-conf-password" required><br>
        <input type="submit" value="Cadastrar">
    </form>
    <hr>
    <p>
        <a href="#">Recuperar a senha</a>
        <a href="inde.php">Cadastro de usuário</a>
    </p>
</main>
<?php 
    include ("inc/footer.inc.php");
?>