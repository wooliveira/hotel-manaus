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
    <div class='col-10' style="padding: 50px; min-height: 650px;margin-top: 100px">

        <table class="table">
            <thead class="thead-light" style="width:100%">
                <tr>
                    <th scope="col" style="width:30%">Nome</th>
                    <th scope="col" style="width:15%">Tipo do quarto</th>
                    <th scope="col" style="width:15%">Número de camas</th>
                    <th scope="col" style="width:15%">Tipo de ventilação</th>
                    <th scope="col" style="width:15%">Valor da diária</th>
                    <th scope="col" style="width:10%">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("../dao/conexao.php");
                $consulta = "select * FROM acomodacoes WHERE status = 'ativo'";
                $categorias = mysqli_query($conecta,$consulta);

                if ( !$categorias ){
                    die("Falha na consulta!");
                }
                while($registro = mysqli_fetch_assoc($categorias)){
                    echo "<tr>
                        <td>".$registro['Nome']."</td>
                        <td>".$registro['TipoQuarto']."</td>
                        <td>".$registro['NumeroCama']."</td>
                        <td>".$registro['TipoVentilacao']."</td>
                        <td>".$registro['Valor']."</td>
                        <td><a href='alterar.php?i=".$registro['Id']."'>Alterar</a>
                        <a href='../dao/ExcluirAcomodacao.php?i=".$registro['Id']."'>Excluir</a></td>
                    </tr>";}
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
</body>

</html>