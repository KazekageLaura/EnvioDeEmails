<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Emails</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<form action="index.php" method="POST"> 
    
        <input type="text" name="nome" placeholder="Nome completo" required />
        <input type="text" name="assunto" placeholder="Assunto" required/>
        <input type="text" name="email"placeholder="E-mail" required/>
        <input type="submit" name="enviar" value="Enviar"/>

    </form>
    <?php
    $para = "uteste191@gmail.com"; //para onde vamos enviar
    $nome=$_REQUEST['nome'];
    $assunto = $_REQUEST['assunto'];
    $corpo = $_REQUEST['email'];//corpo do email texto
    $headers = "From:uteste191@gmail.com"; //cabeçalho

    if(mail($para, $nome, $corpo, $headers)){
        echo "Email enviado com sucesso!";
    }
    else{
        echo "Falha no envio do Email...";
    }

    ?>

</body>
</html>