<?php
    $host = "mysql:dbname= ;nome do seu db host = localhost";
    $usuario = "nome do usuário do db";
    $pass = "senha do seu db";
    
    try {
        
        $pdo = new PDO($host,$usuario,$pass);
        
    } catch (PDOExecption $e){
        
        echo "Falha: ". $e-> getMessage();
        
    }
    //aqui vamos pegar a variavrl h q
    //colocamos na url como o id do 
    //usuário em md5 e verificar se não está vazia.
    $h = $_GET['h'];
    if (!empty($h)) {
      $pdo -> query("UPDATE teste SET 
        status = '1' WHERE MD5 (id)= '$h'
        ");
        echo "<h1>Cadastro confirmado com sucesso!!!";
    }
?>
