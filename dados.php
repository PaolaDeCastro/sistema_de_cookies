<?php
date_default_timezone_set("America/Sao_Paulo");

if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(!empty($_POST["nome"]) && !empty($_POST["avaliacao"])){

        $nome = $_POST["nome"];
        $avali = $_POST["avaliacao"];

        $expiracao = time() + (60 * 60 * 24 * 30);

        setcookie("cliente_nome", $nome, $expiracao);
        setcookie("avaliacao_cliente", $avali, $expiracao);

        if(isset($_COOKIE["cliente_nome"])){
            echo "<h3>Olá novamente, $nome</h3";
        }else{
            echo "<h3>Obrigado pela sua primeira avaliação, $nome</h3>";
        }


    }
}

echo "<p> Você nos deu <strong>$avali</strong> estrelas!</p>";
echo "<p>Avaliado em: " . date("d/m/Y H:i:s") . "</p>";



?>