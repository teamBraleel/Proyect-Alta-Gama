<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body id="bdy">
    <header id="inu">
        <nav class="navbar navbar-expand-lg" id="bdy">
            <img src="img/phone.png" alt="phone" id="img1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="bdy">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <i><h1 class="mt-4 ml-2" id="tit1"><strong><b>ALTA GAMA</b></strong></h1></i> 
                    </li>                   
                </ul>
            </div>
          </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-3">
                    <form action="<?php echo(base_url('public/usuarios/agregar'))?>" method="POST">
                    
                        <img src="img/userlog1.png" width="185" height="185" alt="User" id="img2">
                        <div class="form-group mt-2">
                            <label for="name1" id="colorti">Nombre</label>
                            <input type="text" class="form-control" id="nombreUser" name="nombreUser">
                        </div>
                        <div class="form-group">
                            <label for="email1" id="colorti">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo">
                        </div>
                        <div class="form-group">
                            <label for="pwd" id="colorti">Contraseña</label>
                            <input type="password" class="form-control" id="contraUser" name="contraUser">
                        </div>
                        <button type="submit" class="btn btn-block" id="btn1">Registrarse</button>
                        
                    </form>

                </div>           
            </div>
        </div>
    </main>
    <div class="container text-center mt-5 ">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CORREO</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($usuarios as $clave=>$valor):?>                       
                            <tr>
                                <td><?php echo($valor->idUser)?></td>
                                <td><?php echo($valor->nombreUser)?></td>
                                <td><?php echo($valor->correo)?></td>
                            </tr>
                            <td>
                                <button class="btn btn-primary" type="button" data-toggle="collapse"  href="#formulario<?php echo($valor->idUser)?>"  aria-expanded="false" aria-controls="collapseExample">
                                    ACTUALIZAR
                                </button>
                                </p>
                                <div class="collapse" id="formulario<?php echo($valor->idUser)?>">
                                    <form action="<?= base_url('public/usuarios/modificar'.$valor->idUser)?>" method="post" class="mt-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nombreUser2" name="nombreUser2" value="<?= $valor->nombreUser?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="correo2" name="correo2" value="<?= $valor->correo?>">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-block">Enviar</button>
                                    </form>
                                </div>
                                </td>
                                <td><a href="<?php echo(base_url('public/usuarios/eliminar'.$valor->idUser))?>" class="btn btn-danger">ELIMINAR</a></td>
                                <td><a href="<?php echo(base_url('public/altaGama'))?>" class="btn btn-outline-success">Iniciar sesion</a></td>
                            </tr>  
                        <?php endforeach?>
                    </tbody>         
                </table>
            </div>
        </div>
    </div>      

    <!--Footeer-->
    <footer id="foo">
        <div class="container-fluid" id="foo1">
            <div class="row">
                <div class="col-6 mt-5" id="col1">
                    <h2>Información</h2>
                    <h6>Medellín, Colombia</h6>
                    <h6>Página oficial de Alta Gama</h6>
                    <h6>Tel. 01-8000-####</h6>
                    <h6>Correo. braleelsoftware@gmail.com</h6>
                </div>
                <div class="col-5 mt-5" id="col2">
                    <h2>Programadores</h2>
                    <h6><v id="gmail">E</v>  elickdnr@gmail.com</h6>
                    <h6><v id="gmail">E</v>  bryansteventorresrestrepo3@gmail.com</h4>
                    <h6><v id="gmail">E</v>  Eduardoleonmejia2@gmail.com</h6>
                    <h6><v id="gmail">E</v>  brandonocampodsl@gmail.com</h6>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="foo2">
            <hr style="background-color: rgba(240, 248, 255, 0.144); height: 0px; width: 80%;">
            <p align="center"> Derechos reservados | Braleel software 2020 ©</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>