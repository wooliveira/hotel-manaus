<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    
    <title>Hotel Peace</title>
    <?php
    session_start();
        include_once("headLink.php");
    ?>
    <style>
        #teste:hover{
            color:blue
        }
        </style>
</head>
<body>
    <?php
       
        include_once("menu.php");
        include_once("dao/conexao.php");
                $consulta = "select reserva.Id, acomodacoes.Nome, acomodacoes.TipoQuarto, acomodacoes.NumeroCama, 
                acomodacoes.TipoVentilacao, acomodacoes.Valor, acomodacoes.Foto, reserva.data FROM usuario inner join reserva on usuario.Id = reserva.Id_usuario inner 
                join acomodacoes on reserva.Id_acomodacao = acomodacoes.Id where usuario.Id = 5";
                $categorias = mysqli_query($conecta,$consulta);

                if ( !$categorias ){
                    die("Falha na consulta!");
                }

    ?>
    <div class='container'>
        <div class='row'>
            <div class='offset-4 col-8' style="margin-top: 50px">
            <h3> Minhas reservas</h3>
            </div>
            <?php
                while($registro = mysqli_fetch_assoc($categorias)){
                    $dataa =  date('d/m/Y',strtotime($registro['data']));
                echo "
                <div class='col-3' style='margin-top:50px'><img src='images/".$registro['Foto']."' alt='' style='width:100%'></div>
                    <div class='col-3' style='margin-top:50px'>
                        <h4>Nome: ".$registro['Nome']."</h4>
                        <span>Tipo quarto: ".   $registro['TipoQuarto']."</span><br>
                        <span>Numero cama: ".$registro['NumeroCama']."</span><br>
                        <span>Tipo ventilacao: ".$registro['TipoVentilacao']."</span><br>
                        <span>Valor: ".$registro['Valor']."</span><br>
                        <span>Para o dia: ".$dataa."</span>
                        <form action='dao/CancelarReserva.php' >
                            <input type='hidden' value='".$registro['Id']."' name='id'>
                            <button class='btn btn-danger' href=''>Cancelar reserva</button>
                        </form>
                    </div>
                    ";
                }
            ?>
        </div>
    </div>
</body>
</html>