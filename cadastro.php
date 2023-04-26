<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    
    
    <title>Hotel Peace</title>
    <?php
        include_once("headLink.php");
    ?>
    <style>
        #teste:hover {
            color: blue
        }
    </style>
    <script>
        function minhasenha() {
            var senha = document.getElementById('senha').value;
            var senha2 = document.getElementById('senha2').value;
            console.log(senha);
            console.log(senha2);
            if (senha === senha2) {
                document.getElementById("spansenha").style.visibility = "hidden";
                $("#salvar").removeClass("disabled");

            } else {
                document.getElementById("spansenha").style.visibility = "visible";
                $("#salvar").addClass("disabled");
            }
        }

    </script>
</head>

<body>
    <?php
        include_once("menu.php");
    ?>
    <div class="container" style="margin-top: 70px">
        <div class="row" style="padding: 70px 10% 0px 10%;margin-right:100px">
             <div class="col-md-12 offset-md-1">
            <form action="dao/CadastroUsuario.php" method="POST" style="width: 100%">
             
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu cpf">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Numero de contato</label>
                        <input type="text" class="form-control" id="contato" name="contato"
                            placeholder="Digite seu numero de contato">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha"
                            placeholder="Digite sua senha" onkeyup="minhasenha()">
                        <span id='spansenha' style='visibility: hidden'> Senhas não conhecidem</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Confirmar senha</label>
                        <input type="password" class="form-control" id="senha2" name="senha2"
                            placeholder="Confirme sua senha" onkeyup="minhasenha()">
                    </div>
                </div>
                <a href="index.php">Sair</a>
                <button type="submit" style="float: right;" class="btn btn-primary" id='salvar' >Salvar</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>