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
                $consulta = "select * FROM acomodacoes WHERE status = 'ativo'";
                $categorias = mysqli_query($conecta,$consulta);

                if ( !$categorias ){
                    die("Falha na consulta!");
                }
                
    ?>


        <div class="rooms">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center magic_up" style="margin-top: 50px">
                        <div class="section_subtitle">Hotel de Luxo</div>
                        <div class="section_title"><h2>Escolha um quarto</h2></div>
                    </div>
                </div>
            </div>
            

                <!-- Room -->
                <?php
            while($registro = mysqli_fetch_assoc($categorias)){
            echo 
            
            "  <div class='row room_row magic_up'>
                <div class='col-lg-12 room_col'>
                <div class='room'>
                <img src='images/".$registro['Foto']."' alt='' style='width:100%'>
                                        <div class='room_content text-center'>
                                        <h4>Nome: ".$registro['Nome']."</h4>
                            <div class='room_price'><span>Valor: ".$registro['Valor']."</span><br></div>
                            <div class='room_type'><span>Tipo quarto: ".   $registro['TipoQuarto']."</span><br></div>
                            <div class='room_title'><span>Numero cama: ".$registro['NumeroCama']."</span><br></div>
                            <div class='room_text'><span>Tipo ventilacao: ".$registro['TipoVentilacao']."</span><br></div>
                             <br>";
                if(isset($_SESSION['ID'])){
                    echo"   <form action='dao/reservar.php' >
                                <input type='date' name='data'>
                                <input type='hidden' value='".$registro['Id']."' name='id'>
                                <button class='btn btn-outline-info ' href=''>Reservar</button>
                            </form>
                        ";
                }else{
                    echo"
                    <a  class='button_container room_button'><div class='button text-center'><span>Faça Login Para Reservar</span></div></a>";
                }
                echo "</div><br></div></div></div>";
            }
            ?>
               
           

            </div>
        </div>
    </div>
</body>
</html>