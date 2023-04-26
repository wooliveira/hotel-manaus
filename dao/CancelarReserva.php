<?php
include_once('conexao.php');
$id = $_GET['id'];

$sql = "DELETE FROM reserva WHERE Id = $id";

$delete = mysqli_query($conecta,$sql);

    if(!$delete){
        die("Erro ao cancelar");
    }else{
      header("location: ../MinhasReservas.php");
    }


?>