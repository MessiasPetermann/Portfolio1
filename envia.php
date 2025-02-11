<?php 

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['mensagem']);  

    $para = "messiasuct@gmail.com";
    $assunto = "Contato pelo Portfólio";

    $corpo = "Nome: ".$nome."\n". "E-mail: ".$email."\n". "Celular: ".$celular."\n"."Mensagem: ".$mensagem;
    
    $cabeca = "From: messiasuct@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Ma\iler: PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo "<script>alert('E-mail enviado com sucesso!');</script>";
    }else{
        echo "<script>alert('Falha ao enviar e-mail!');</script>";
    }

?>