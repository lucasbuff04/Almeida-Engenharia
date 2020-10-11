<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    exit(var_dump($email));
    
    $to = "contatolucasbuff@hotmail.com";
    $subjet = "Contato - Site Almeida Engenharia";
    $body = "Nome: ".$nome. "\r\n".
            "email: ".$email. "\r\n".
            "Mensagem ".$mensagem;
    $header = "from:lucas.swagbrasil@hotmail.com". "\r\n"."reply-to:".$email."\r\n"."x=Mailer:PHP/".phpversion();

    if(mail($to, $subjet, $body,$header)){

        echo("Email enviado com sucesso!");

    } else{
        echo("O Email não pode ser enviado");
    }
}

?>