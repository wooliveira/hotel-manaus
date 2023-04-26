<?php
include_once("conexao.php");
session_start();

$idAcomodacao = $_REQUEST['id'];
$idUsuario =  $_SESSION['ID'];
if($_GET['data'] == ""){
    $data = date("Y-m-d");
}else{
    $data= $_GET['data'];
}
$consulta = "select * FROM reserva WHERE data = '$data' AND Id_acomodacao = $idAcomodacao";
$categorias = mysqli_query($conecta,$consulta);                
if(mysqli_num_rows($categorias) > 0){
   header("location:../index.php?mgs=email");
} else{

$sql = "INSERT INTO reserva (Id_usuario, Id_acomodacao, data) values($idUsuario, $idAcomodacao,' $data')";

$insert = mysqli_query($conecta,$sql);

    if(!$insert){
        die("Erro ao reservar");
    }else{
      header("location: ../MinhasReservas.php");
    }
}
?>