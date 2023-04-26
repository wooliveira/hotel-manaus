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
    ?>
    <div class="col-10" style="; min-height: 650px;margin-top: 100px">
        <div class="row" style="padding: 70px 20% 0px 20%">
            <div class="offset-4">
                <h3>Cadastrar uma acomodação</h3>
            </div>
            <form action="../dao/CadastroAcomodacao.php" method="POST" style="width: 100%;padding-top: 50px">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                            placeholder="Digite o nome da acomodação">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Tipo do quarto</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="tipoquarto">
                            <option>Solteiro</option>
                            <option>Casal</option>
                            <option>Misto</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Número de camas</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="numerocamas">
                            <option>Solteiro</option>
                            <option>Casal</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Tipo de ventilação</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="tipoventilacao">
                            <option>Ventilador</option>
                            <option>Ar condicionado</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Valor da diaria</label>
                        <input type="text" class="form-control" id="valor" name="valor"
                            placeholder="Digite o valor da diaria">
                    </div>
                </div>
                <a href="index.php">Sair</a>
                <button type="submit" style="float: right;" class="btn btn-primary" id='salvar'>Salvar</button>

            </form>
        </div>
    </div>
    </div>
    </div>
</body>

</html>