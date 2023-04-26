<?php
include_once("conexao.php");
$nome = $_POST['nome'];
$tipoquarto = $_POST['tipoquarto'];
$numerocamas = $_POST['numerocamas'];
$tipoventilacao = $_POST['tipoventilacao'];
$valor = $_POST['valor'];

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


$sql = "INSERT INTO acomodacoes (Nome, TipoQuarto, NumeroCama, TipoVentilacao, Valor, Foto, status) values('$nome','$tipoquarto','$numerocamas',
'$tipoventilacao','$valor','$foto', 'ativo')";

$insert = mysqli_query($conecta,$sql);

    if(!$insert){
        die("Erro ao inserir");
    }else{
        header("location: ../adm/consulta.php");
       die();
    }
?>