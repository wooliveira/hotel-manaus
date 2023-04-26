<?php
include_once("conexao.php");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['contato'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario (Nome, CPF, Email, Telefone, Senha, ADM) values('$nome','$cpf','$email',
'$telefone','$senha',0)";

$insert = mysqli_query($conecta,$sql);

    if(!$insert){
        die("Erro ao inserir");
    }else{
    	echo "<script>alert('Usuario cadastrado com sucesso.');</script>";
       echo "<script>location.href='../index.php'</script>";
    }
?>