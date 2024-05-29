<?php
$servidor = 'http://'.$_SERVER['SERVER_NAME']; // Para ver onde o servidor aonde o site esta Hospedado.
$urlBase = $_SERVER ['REQUEST_URI']; // Para ver o nome do arquivo dentro do servidor (no caso o local).
$acao = htmlspecialchars($_SERVER['PHP_SELF']); // A mesma coisa do de cima mas com mais caracteres.

$urlAcao = $servidor.$acao;
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Obter o palpite do jogador via formulário
    $palpite = $_POST['palpite'];
    // Verificar se o jogador passou o valor entre 0 até 10
    if (($palpite !== null) && ($palpite >= 0) && ($palpite <= 10)) {
        $valSorteado = rand(0, 10);
        // Comparar o palpite com o numero sorteado usando uma estrutura switch
        switch (TRUE) {
            case $palpite < $valSorteado:
                $resp = "Muito baixo!<br> TENTE DE NOVO!!!";
                break;
            case $palpite > $valSorteado:
                $resp = "Muito alto!<br> TENTE DE NOVO!!!";
                break;
            default:
                $resp = "Parabéns!<br>Jogue de novo!!!";
        }
    } else {
        $resp = "Por Favor insira um número valido entre 0 e 10";  
    }
}
$tenta = 1; // Inicializa $tenta
if ($_SERVER['REQUEST_METHOD'] == "POST" && $palpite != $valSorteado) {
    while ($palpite != $valSorteado) {
        $palpite = rand(0, 10); // Gera um novo palpite a cada iteração
        $tenta++; // Incrementa $tenta a cada iteração
    }
}
echo "Número de tentativas: $tenta";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de adivinhação</title>
</head>
<body>
    <h1>Jogo de adivinhação</h1>
    <p>Tente adivinhar um número entre 0 e 10!</p>
    <form method="post" action="<?php echo $urlAcao?>">
        <label>Seu palpite:</label>
        <input type="number" name="palpite" id="palpite" required>
        <input type="submit" value="Enviar Palpite">
    </form>
    <h2>
        <?php
            if ($_SERVER['REQUEST_METHOD'] =="POST"){
                echo $resp;
            }
        ?>
    </h2>
    <!-- 
         Tambem pode ser usado  < ?=$urlAcao? > 
    -->
    <!-- < ?php
        echo "Endereço do servidor PHP $servidor<br>";
        echo "Endereço de url pasta mais arquivo $urlBase<br>"; 
        echo "Endereço de url pasta mais arquivo $acao<br>";
        echo "URL completa $urlAcao<br>";
    ?> -->
</body>
</html>
