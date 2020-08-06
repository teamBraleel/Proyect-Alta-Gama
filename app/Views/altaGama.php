<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Bootstrap HTML5">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
    </head>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="css/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilosAG.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Alta Gama</title>
<body id="bodyX">
  <header id="inu" class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="img/phone.png" alt="phone" id="img1" class="ml-3">
            <i><h1 class="mt-1 ml-2 mr-5"><strong><b>ALTA GAMA</b></strong></h1></i> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link mt-3 ml-5 mr-5 "  id="enlaces" href="#inu2">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <hr id="palito">
              <li class="nav-item active">
                <a class="nav-link mt-3 ml-5 mr-5 mt-1 "  id="enlaces" href="#inu2">Productos<span class="sr-only">(current)</span></a>
              </li>
              <hr id="palito">
              <li class="nav-item active">
                <a class="nav-link mt-3 ml-5 mr-5 mt-1"  id="enlaces" href="programadores">Programadores<span class="sr-only">(current)</span></a>
              </li>
              <li>
                  <a class="btn btn-outline-dark ml-5 mt-3" href="productos">Registrar Producto</a>
                </li>
                <li>
                  <a class="btn btn-outline-dark ml-3 mt-3" href="usuarios">Registro</a>
                </li>
              </ul>
            </div>
          </nav>
  </header>
      <div class="row justify-content-center" id="inu2">
        <div class="col-11" id="carousel1">
        <div class="container-all">

            <input type="radio" id="1" name="image-slide" hidden/>
            <input type="radio" id="2" name="image-slide" hidden/>
            <input type="radio" id="3" name="image-slide" hidden/>
            <input type="radio" id="4" name="image-slide" hidden/>
            <div class="slide">

                <div class="item-slide">
                    <img src="img/lenovo.png" class="mt-5">
                </div>

                <div class="item-slide">
                    <img src="img/pc1.png">
                </div>

                <div class="item-slide">
                    <img src="img/diadema.png" class="mb-5">
                </div>

                <div class="item-slide">
                    <img src="img/monitor.png" class="mt-5">
                </div>

            </div>

            <div class="pagination">

                <label class="pagination-item" for="1">
                    <img src="img/lenovo.png">
                </label>
                
                <label class="pagination-item" for="2">
                    <img src="img/pc1.png">
                </label>
                <label class="pagination-item">
                    <img src="img/diadema.png" for="3">
                </label>               
                <label class="pagination-item">
                    <img src="img/monitor.png" for="4">
                </label>
            </div>

            </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
        <i><h2 class="text-center mt-1" class="pdTit"id="titPD"><strong><b>Productos destacados</b></strong></h2></i>
          <br>
          <hr class="verticalLine">
        </div>
      </div>
    </div>

    
    <div class="container mt-5">
        <div class="row">
          <div class="col-12 md-2">
            <div class="card-deck">
            <div class="card border-dark mb-3" style="max-width: 25rem;">
                <div class="card-header text-center"><img src="img/iphone11.jpg" width="100px" height="200" class="card-img-top" alt="...">
                  </div>
                <div class="card-body text-info">
                  <h5 class="card-title text-center">Iphone 11</h5>
                  <p class="card-text">El nuevo iPhone 11 tiene un sistema de dos camaras que te permite tomar fotos con ultra gran angular, capturar excelentes fotos nocturnas con el modo Noche y grabar videos con una calidad sorprendente.</p>
                  <small><div class="alert alert-success" role="alert">$951.00 USD</div></small>
                  <a href="#" class="btn btn-outline-primary producto" precio="951" titulo="Iphone 11" role="button">Comprar</a>
                  <div class="ec-stars-wrapper">
                    <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                    <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                    <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                    <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                </div>   
                </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 25rem;">
                <div class="card-header text-center"><img src="img/lenovo.png" width="150px" height="200px" alt="Imagen"></div>
                <div class="card-body text-info">
                  <h5 class="card-title text-center">Lenovo Legion Y740</h5>
                  <p class="card-text">
                    Cuenta con un Sistema Operativo Windows 10 Home Single Language 64; una pantalla de 39,6 cm (15,6")"Antirreflejos FHD 1920x1080.
                    <br>
                    Memoria 16.0GB PC4-21300 DDR4 SODIMM SODIMM 2666MHz y un Almacenamiento 1TB 7200+128GB SSD PCIe.
                  </p>
                  <small><div class="alert alert-success" role="alert">$2090.00 USD</div></small>
                  <a href="#" class="btn btn-outline-primary producto" precio="2090" titulo="Lenovo Legion Y740" role="button">Comprar</a>
                  <div class="ec-stars-wrapper">
                    <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                    <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                    <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                    <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                  </div>
                </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 25rem;">
                <div class="card-header text-center"><img src="img/diadema.png" width="180px" height="200px" alt="LOGO PHP"></div>
                <div class="card-body text-info">
                  <h5 class="card-title text-center">DIADEMA GAMER TECH JALTECH</h5>
                  <p class="card-text">Diadema GAMER para PS4, USB para LED 1 PLUG 3.5 MM para PS4Luz LED fija 
                    Microfono fijo alta definición Control de volumen Super BassDiseño ergonómico.</p>
                  <small><div class="alert alert-success" role="alert">$65.00 USD</div></small>
                  <a href="#" class="btn btn-outline-primary producto" precio="65" titulo="Diadema Gamer" role="button">Comprar</a>
                  <div class="ec-stars-wrapper">
                    <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                    <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                    <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                    <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                </div>
                </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 25rem;">
                <div class="card-header text-center"><img src="img/monitor.png" width="180px" height="200px" alt="LOGO PHP"></div>
                <div class="card-body text-info">
                  <h5 class="card-title text-center">Monitor Curvo MSI Full HD</h5>
                  <p class="card-text">Deslumbramiento 1 ms 1920 x 1080 Soporte para audífono inteligente FreeSync 24 «Gaming Curved Monitor (Optix MAG241C).</p>
                  <small><div class="alert alert-success" role="alert">$ 4,805.29</div></small>
                  <a href="#" class="btn btn-outline-primary producto" precio="4800" titulo="Monitor Gamer" role="button">Comprar</a>
                  <div class="ec-stars-wrapper">
                    <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                    <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                    <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                    <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="verticalLine">
      </div>
      
  <div class="container">
    <div class="row justify-content-center">
    <?php foreach($productos as $clave=>$valor): ?>
      <div class="card ml-5 mt-4" style="width: 18rem;">
        <img src="<?php echo($valor->imagen)?>" alt="<?php echo($valor->imagen)?>"></td>
        <div class="card-body">
          <h5 class="card-title"><?= $valor->nombreProducto?></h5>
          <small><div class="alert alert-success" role="alert">$<?= $valor->precio?>.00 USD</div></small>
          <a href="#" class="btn btn-outline-primary producto" precio="<?= $valor->precio?>" titulo="<?= $valor->nombreProducto?>" role="button">Comprar</a>
          <div class="ec-stars-wrapper">
            <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
            <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
            <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
            <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
            <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
          </div>
        </div>
      </div>
    <?php endforeach?>
    </div>
  </div>  
	<script src="js/minicart.js"></script>
	<script>
	  // configuración inicial del carrito 
	  paypal.minicart.render({
	  strings:{
	    button:'Pagar'
	   ,buttonAlt: "Total"
	   ,subtotal: 'Total:'
	   ,empty: 'No hay productos en el carrito'
	  }
	  });
	  // Eventos para agregar productos al carrito
	  
	   $('.producto').click(function(e){
	       e.stopPropagation();
		    paypal.minicart.cart.add({
			business: 'elickdnr@gmail.com', // Cuenta paypal para recibir el dinero
			item_name: $(this).attr("titulo"),
			 amount: $(this).attr("precio"),
			 currency_code: 'USD',
			
			});
	   });
	  
    </script>
    </div>
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




