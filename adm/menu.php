
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
                                        
                                    
                                    <?php 
                                        if(isset($_SESSION['NOME'])){
                                            echo '  
                                            <li class=""><a href="../dao/sair.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Sair</span></div></a></li>

                                            ';
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





<div class="container-fluid">
    <div class="row">

        <div class="col-2" style="padding-top: 150px;background: #081123;min-height: 758px">
        <div class="sidebar-header">
            <h3 style="color:white"align="center" >Menu</h3>
        </div>
                <br>
             
        <ul class="list-unstyled components">
            <li class="active" style="padding-bottom:10px">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="color:white">Acomodações</a>
                <ul class="collapse list-unstyled" id="homeSubmenu" style="color:white; padding-left:10px">
                    <li>
                        <a href="cadastro.php" style="display: inherit; color: white">Cadastrar</a>
                    </li>
                    <li>
                        <a href="consulta.php" style="display: inherit; color: white">Consultar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="reservas.php" style="display: inherit;color: white">Consultar reservas</a>
            </li>
        </div>