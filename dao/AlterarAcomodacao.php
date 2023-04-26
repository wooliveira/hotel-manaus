<?php
include_once("conexao.php");
$nome = $_POST['nome'];
$tipoquarto = $_POST['tipoquarto'];
$numerocamas = $_POST['numerocamas'];
$tipoventilacao = $_POST['tipoventilacao'];
$valor = $_POST['valor'];
$id = $_GET['i'];

if($tipoquarto == "Solteiro"){
    if($numerocamas == "Solteiro"){
        $foto = "solteiro2.jpg";
    }else{
        $foto = "solteiro1.jpg";
    }
}else if($tipoquarto == "Casal"){
    if($numerocamas == "Solteiro"){
        $foto = "casal1.jpg";
    }else{
        $foto = "casal2.jpg";
    }
}else if($tipoquarto == "Misto"){
    if($numerocamas == "Solteiro"){
        $foto = "misto1.jpg";
    }else{
        $foto = "misto2.jpg";
    }
}


$sql = "UPDATE `acomodacoes` SET Nome = '".$nome."', TipoQuarto = '".$tipoquarto."', NumeroCama = '".$numerocamas."', 
TipoVentilacao = '".$tipoventilacao."', Valor = '".$valor."', Foto= '".$foto."' WHERE Id = $id ";

$insert = mysqli_query($conecta,$sql);

    if(!$insert){
        die("Erro ao alterar");
    }else{
        header("location: ../adm/consulta.php");
       die();
    }
?>