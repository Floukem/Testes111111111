<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $para = $email
    $assunto = "Obrigado por participar da conferência de primavera! :)"

    $corpo = "Olá,".$nome."\n"."eee";

    $cabeca = "From: skai@sgroup.sk.br"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso!")
    }
    else {
        echo("Houve um erro ao enviar o e-mail!");
    }

?>