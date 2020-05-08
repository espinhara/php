<?php
    $host = "mysql:dbname=nome do seu db; host = localhost";
    $usuario = "usuario do seu db";
    $pass = "senha do seu db";

    try {
        
        $pdo = new PDO($host,$usuario,$pass);
        
    } catch (PDOExecption $e){
        
        echo "Falha: ". $e-> getMessage();
        
    }
    // pegando do form as variáveis para gravar no Banco de dados
    $usuario =addslashes( $_POST['user']);
    $email =addslashes ($_POST['email']);
    $senha = md5(addslashes ($_POST['senha']));
    $pdo -> query("INSERT INTO teste SET usuario = '$usuario',email = '$email', senha = '$senha'");
    // pegando o id do usuário e criptografando ele no banco de dadoa
    $id = $pdo->lastInsertId();
    $md5 = md5($id);
    // assunto do email que vai ser enviado
    $assunto = "Confirme seu cadastro";
    // vou deixar aqui a url que usei para maior compreensão
    // mas é só um exemplo. Esse terá qur ser o caminho do seu site
    // passando um variável na url para validar somente com o id cadastrado no db
    $link = "https://blockprogrammers.000webhostapp.com/confirma.php?h=". $md5;
    //link da validação 
    $mensagem = "Click aqui para confirmar seu cadastro ". $link;
    // seu site ou corporação 
    $header = "From: Blockprogrammers";
    // função que enviará o email.
    mail ($email, $assunto, $mensagem, $header);
?>
