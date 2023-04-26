<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Peace</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-grid.css">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-grid.min.css"> -->
    <script src="../js/jque.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <?php
        include_once("index.php");
        include_once("../dao/conexao.php");

        $consulta = "select * FROM acomodacoes Where Id = ".$_REQUEST['i'];
        $categorias = mysqli_query($conecta,$consulta);

        while($registro = mysqli_fetch_assoc($categorias)){
            $nome = $registro['Nome'];
            $tipoquarto = $registro['TipoQuarto'];
            $numerocamas = $registro['NumeroCama'];
            $tipoventilacao = $registro['TipoVentilacao'];
            $valor = $registro['Valor'];
        }

    ?>
    <div class="col-10" style="; min-height: 650px">
        <div class="row" style="padding: 70px 20% 0px 20%">
            <div class="offset-4">
                <h3>Cadastrar uma acomodação</h3>
            </div>
            <form action="../dao/AlterarAcomodacao.php?i=<?php echo $_REQUEST['i']?>" method="POST" style="width: 100%;padding-top: 50px">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>"
                            placeholder="Digite o nome da acomodação">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Tipo do quarto</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="tipoquarto">
                        <?php 
                            $tipoquarto == "Solteiro" ? $tipo1 = "selected" : $tipo1 = "";
                            $tipoquarto == "Casal" ? $tipo2 = "selected" : $tipo2 = "";
                            $tipoquarto == "Misto" ? $tipo3 = "selected" : $tipo3 = "";
                            echo"<option ".$tipo1.">Solteiro</option>
                            <option ".$tipo2.">Casal</option>
                            <option ".$tipo3.">Misto</option>";
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Número de camas</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="numerocamas">
                        <?php 
                            $numerocamas == "Solteiro" ? $cama1 = "selected" : $cama1 = "";
                            $numerocamas == "Casal" ? $cama2 = "selected" : $cama2 = "";
                            echo"<option ".$cama1.">Solteiro</option>
                            <option ".$cama2.">Casal</option>";
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Tipo de ventilação</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="tipoventilacao">
                        <?php 
                            $tipoventilacao == "Ventilador" ? $ventila1 = "selected" : $ventila1 = "";
                            $tipoventilacao == "Ar condicionado" ? $ventila2 = "selected" : $ventila2 = "";
                            echo "<option  ".$ventila1.">Ventilador</option>
                            <option  ".$ventila2.">Ar condicionado</option>";
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Valor da diaria</label>
                        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $valor; ?>"
                            placeholder="Digite o valor da diaria">
                    </div>
                </div>
                <a href="index.php">Sair</a>
                <button type="submit" style="float: right;" class="btn btn-primary" id='salvar'>Alterar</button>

            </form>
        </div>
    </div>
    </div>
    </div>
</body>

</html>