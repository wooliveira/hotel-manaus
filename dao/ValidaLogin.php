<?php
    include_once("conexao.php");
    session_start();
    $email = $_POST['emailL'];
    $senha = $_POST['senhaL'];

    $sql = "SELECT *FROM usuario where Email = '$email' and Senha = '$senha'";
    
    $valida = mysqli_query($conecta,$sql);
    $rowcount=mysqli_num_rows($valida);

    if($rowcount > 0){
        while($registro = mysqli_fetch_assoc($valida)){
            $_SESSION['ID'] = $registro['Id'];
            $_SESSION['ADM'] = $registro['ADM'];
            $_SESSION['NOME'] = $registro['Nome'];
        }
        if($_SESSION['ADM'] == 1){
            header("location: ../adm/index.php");
        }else{
            header("location: ../index.php");
        }
    }else{
        header("location: ../index.php?msg=error");
    }

?>