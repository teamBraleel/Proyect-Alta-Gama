<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Administración</title>
</head>
<body class="bg-dark">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5 text-light">ADMINISTRACIÓN DE PRODUCTOS</h1>
                <a class=" btn btn-outline-primary mt-3 mb-2"  id="enlaces" href="altaGama">Inicio <span class="sr-only">(current)</span></a>
            </div>
        </div>
    </div>
    <div class="container text-center mt-5 ">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>PRECIO</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($productos as $clave=>$valor):?>                       
                            <tr>
                                <td><?php echo($valor->idproduct)?></td>
                                <td><?php echo($valor->nombreProducto)?></td>
                                <td><?php echo($valor->precio)?></td>
                                <td>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"  href="#formulario<?php echo($valor->idproduct)?>"  aria-expanded="false" aria-controls="collapseExample">
                                        ACTUALIZAR
                                    </button>
                                </p>
                                <div class="collapse" id="formulario<?php echo($valor->idproduct)?>">
                                    <form action="<?= base_url('public/admi123/modificar'.$valor->idproduct)?>" method="post" class="mt-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nombreProducto2" name="nombreProducto2" value="<?= $valor->nombreProducto?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="precio2" name="precio2" value="<?= $valor->precio?>">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-block">Enviar</button>
                                    </form>
                                </div>
                                </td>
                                <td><a href="<?php echo(base_url('public/admi123/eliminar'.$valor->idproduct))?>" class="btn btn-danger">ELIMINAR</a></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>         
                </table>
            </div>
        </div>
    </div>      
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>