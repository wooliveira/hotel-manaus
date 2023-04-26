<?php
    $conecta = mysqli_connect("localhost","root","","hotel");

    if(mysqli_connect_errno()){
        die("Conexao falhou". mysqli_connect_errno());
    }


?>