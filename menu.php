<header class="header">
        <div class="header_content">

            <!-- Logo -->
            <div class="logo_container d-flex flex-column align-items-center justify-content-center">
                <div class="logo">
                    <a href="index.php" class="text-center">
                        <div class="logo_subtitle">Hotel</div>
                        <div class="logo_title">Manaus</div>
                        <div class="logo_stars">
                            <ul class="d-flex flex-row align-items-start justfy-content-start">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_inner d-flex flex-row align-items-center justify-content-start">
                            <nav class="main_nav">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <?php 
                                        if(isset($_SESSION['NOME'])){
                                           echo  "
                                            <li class=''><a href=''><div class='nav_item d-flex flex-column align-items-center justify-content-center'><span>bem vindo ".$_SESSION['NOME']."</span></div></a></li>


                                           ";
                                        }            
                                    ?>
                                    <li class=""><a href="index.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Início</span></div></a></li>
                                    <li><a href="reserva.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center id="teste"><span>Faça sua reserva aqui</span></div></a></li>
                                        
                                    
                                    <?php 
                                        if(isset($_SESSION['NOME'])){
                                            echo '  
                                            <li class=""><a href="MinhasReservas.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Minhas Reservas</span></div></a></li>

                                            <li class=""><a href="dao/sair.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Sair</span></div></a></li>

                                            ';
                                        }else{
                                            echo '<li><a href="cadastro.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Cadastrar</span></div></a></li>
                                            <li><a href="#"><div class="nav_item d-flex flex-column align-items-center justify-content-center" data-toggle="modal" data-target="#exampleModal"><span>Entrar</span></div></a></li></a>';
                                        }
                                        ?>
                                    
                                    
                                </ul>
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


        
    </nav>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="dao/ValidaLogin.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="emailL" name='emailL' placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Senha</label>
                        <input type="password" class="form-control" id="senhaL" name='senhaL' placeholder="Digite sua senha">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary"  data-dismiss="modal"  style="float: left">Sair</button>
                        <button class="btn-primary btn"  type="submit" style="float: right;">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_GET['msg']) == "error"){
        
        echo '<div class="modal fade show" id="erro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2> Usuario ou senha invalida!!!</h2>
                </div>
            </div>
        </div>
    </div>';
    echo '<script>$("#erro").modal("toggle");</script>';
    }
?>