<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    // Criando a conexão
    $conn = new mysqli(HOST, USER, PASS, BASE);  
    
    // Verificando a conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
?>


