<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar';
            $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
            $descricao = mysqli_real_escape_string($conn, $_POST["descricao"]);
            $preco = mysqli_real_escape_string($conn, $_POST["preco"]);
            $quantidade = mysqli_real_escape_string($conn, $_POST["quantidade"]);
        

            $sql = "INSERT INTO usuarios (nome, descricao, preco, quantidade) 
            VALUES ('$nome', '$descricao', '$preco', '$quantidade')";
    

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar. Erro: " . $conn->error . "');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            

        
        case 'editar';
            $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
            $descricao = mysqli_real_escape_string($conn, $_POST["descricao"]);
            $preco = mysqli_real_escape_string($conn, $_POST["preco"]);
            $quantidade = mysqli_real_escape_string($conn, $_POST["quantidade"]);
            
            $sql = "UPDATE usuarios SET 
                        nome='{$nome}',
                        descricao='{$descricao}',
                        preco='{$preco}',
                        quantidade='{$quantidade}'
                    WHERE
                        id=".$_REQUEST["id"];


            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível editar. Erro: " . $conn->error . "');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        case 'excluir';

            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível excluir. Erro: " . $conn->error . "');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }