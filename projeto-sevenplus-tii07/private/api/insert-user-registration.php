<?php
// Recebendo todos os Campos do Fomulário via 'POST' da página user-registration.php ;
    $userName = $_POST["user-name"];
    $userEmail = $_POST["user-email"];
    $userPassword = $_POST["user-password"];
    $userConfPassword = $_POST["user-conf-passoword"];
 
    // Verificar se os Campos foram enviado e não estão vazios ;
    if(( (empty($userName)) || (empty($userEmail)) || (empty($userPassword)) || (empty($userConfPassword) )) ||
    ($userName === "") || ($userEmail === "") || ($userPassword === "") || ($userConfPassword === "")
 
    ){
        $resp = "ERRO - Campos Obrigatórios não preencidos !!";
       // exit;// <- comando para sair do Loop
    }
 
    // Verificar SE as senhas são IGUAIS ;
    if ($userPassword !== $userConfPassword) {
        $resp = "ERRO - Senhas não são Iguais !!";
        //exit;
    }else{
        /* criptografia para a Semha e Hash (confirmar senha)
 
        */
        $apiKei = "maçã";
 
        // usando o MD5
        //$apiKei = (md5($apiKei));// <= 'md5' Criptografa a palavra "maçã";
 
        // Criando variaveis para Criptografar ;
        $pass = (md5($userPassword));
        $login = (md5($userName));
        $loginEmail = (md5($userEmail));
 
        $passDB = (md5($apiKei.$loginEmail.$pass));
        $passHash = (md5($passDB.$apiKei.$login));
 
        $valorPass = '09';
        $valorHash = '08';
 
        $saltPass = $passDB;
        $saltHash = $passHash;
 
        // Criptografando a Senha ;
        $passDB = crypt($loginEmail, '$2b$'.$valorPass.'$'.$saltPass.'$');
 
        // Criptografando a Senha ;
        $passHash = crypt($login, '$2b$'.$valorHash.'$'.$saltHash.'$');
 
       // Redirecionar para uma pagina
       header("location:../../public_html/user-registration-sucess.php")

    }
 
?>
<?php
// echo "$passDB <br> $passHash";
 
echo "Senha Criptografada: $passDB com ". strlen($passDB) ." caracteres<br>";
echo "hash Criptografada: $passHash com ". strlen($passHash). "caracteres<br>";
 
?>
tem menu de contexto