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
    <div class='col-10' style="padding: 50px;margin-top:100px; min-height: 650px;">
            <form action="" method="post">
                <div class="form-group row">
                    <label for="staticEmail" class="col-3 col-form-label">Escolha a data para filtrar</label>
                    <div class="col-3">
                        <input type="date" class="form-control" id="staticEmail"
                        name='data'>
                    </div>
                    <input type="submit" value="Buscar" class="btn btn-secondary">
                </form>
                
        <table class="table" style='margin-top:30px'>
            <thead class="thead-light" style="width:100%">
                <tr>
                    <th scope="col" style="width:10%"></th>
                    <th scope="col" style="width:15%">Acomodação</th>
                    <th scope="col" style="width:15%">Usuário</th>
                    <th scope="col" style="width:15%">Valor</th>
                    <th scope="col" style="width:15%">Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("../dao/conexao.php");
                $consulta = "select acomodacoes.Nome nomeaco, usuario.Nome nomeusu, acomodacoes.Valor, acomodacoes.Foto, reserva.data FROM usuario inner join reserva on usuario.Id = reserva.Id_usuario inner 
                join acomodacoes on reserva.Id_acomodacao = acomodacoes.Id ";
                if(isset($_POST['data'])){
                    $data = $_POST['data'];
                    if($data == ""){

                    }else{
                    $consulta .= "where reserva.data = '$data'";
                    }
                }
                $categorias = mysqli_query($conecta,$consulta);

                if ( !$categorias ){
                    die("Falha na consulta!");
                }
                while($registro = mysqli_fetch_assoc($categorias)){
                    echo "<tr>
                        <td> <img src='../images/".$registro['Foto']."' alt='' style='width:100%'> </td>
                        <td>".$registro['nomeaco']."</td>
                        <td>".$registro['nomeusu']."</td>
                        <td>".$registro['Valor']."</td>
                        <td>".$registro['data']."</td>
                    </tr>";}
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
</body>

</html>