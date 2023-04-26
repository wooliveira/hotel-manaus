<?php
include_once("conexao.php");
$id = $_GET['i'];

$sql = "UPDATE `acomodacoes` SET status = 'desativado' WHERE Id = $id";

$insert = mysqli_query($conecta,$sql);

    if(!$insert){
        die("Erro ao deletar");
    }else{
        header("location: ../adm/consulta.php");
       die();
    }
?>