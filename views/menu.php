<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

  <!-- Site Metas -->
  <title>El Ovejo - Café Restarante</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />



  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
  <!-- Site Icons -->
  <link rel="apple-touch-icon" href="images/svg/LogoOvejoPng.png" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Site CSS -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/menu/menu-style.css" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- color -->
  <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

  <!-- Modernizer -->
  <script src="js/modernizer.js"></script>

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div id="loader">
    <div id="status"></div>
  </div>
  <div id="site-header">
    <header id="header" class="header-block-top">
      <div class="container">
        <div class="row">
          <div class="main-menu">
            <!-- navbar -->
            <nav class="navbar navbar-default" id="mainNav">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Barra de navegación</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="logo">
                  <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                    <img src="images/svg/cabecera.png" alt="" type="img/svg" class="logo1" />
                  </a>
                </div>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="./index">Inicio</a></li>
                  <li><a href="./index#about">Nosotros</a></li>
                  <li class="active"><a href="#menu">Menú</a></li>
                  <li><a href="./index#our_team">Equipo</a></li>
                  <li><a href="./index#gallery">Galería</a></li>
                  <li><a href="./index#reservation">Reservaciones</a></li>
                  <li><a href="./index#footer">Contáctanos</a></li>
                </ul>
              </div>
              <!-- end nav-collapse -->
            </nav>
            <!-- end navbar -->
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container-fluid -->
    </header>
    <!-- end header -->
  </div>
  <!-- en -->
  <div id="banner " class=" carta-menu">
    <h2 class="block-title color-white text-center carta-menu-tittle">
      Nuestra Carta</h2>
    <div class="seccion-carta">

      <div class="categoria-menu">
        <!-- Trigger the modal with a button -->

        <!-- Modal -->
       
        <div class="tittle-categoria block-title text-center">Platos de fondo</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product" data-toggle="modal" data-target="#1">Osobuco con rissoto parmesano<i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$14.900</div>
          </div>
          <div class="product-botton">
            <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
          </div>
          <div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_05.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Osobuco con rissoto parmesano</h4>
                  <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product" data-toggle="modal" data-target="#2">Lomo saltado <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$13.300</div>
          </div>
          <div class="product-botton">
            <p>Al más puro estilo de un lomo saltado bien peruano. Filete de vacuno salteado con verduras frescas, cebolla, tomates, guisada con su salsa de lomo y acompañada con arroz y papas fritas.</p>
          </div>
          <div class="modal fade" id="2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_06.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Lomo saltado</h4>
                  <p>Al más puro estilo de un lomo saltado bien peruano. Filete de vacuno salteado con verduras frescas, cebolla, tomates, guisada con su salsa de lomo y acompañada con arroz y papas fritas.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product" data-toggle="modal" data-target="#3">Dia 29 de ñoquis <i class="fas fa-images fa-sad-tear icons-2" id="icons-disabled" alt="no dispobible"> </i></div>
            <div class="price-product">$9.200</div>
          </div>
          <div class="product-botton">
            <p>Ñoquis hechos en casa acompañado con salsa boloñesa o pesto Liguria.</p>
          </div>
          <div class="modal fade" id="3" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_05.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Osobuco con rissoto parmesano</h4>
                  <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product" data-toggle="modal" data-target="#4">Tallarin saltado <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$11.300</div>
          </div>
          <div class="product-botton">
            <p>Tallarín bañado con salsa de lomo. Filete con res, tomate, cebolla, cilantro y cebollín.</p>
          </div>
          <div class="modal fade" id="4" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_05.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Osobuco con rissoto parmesano</h4>
                  <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Asado de lengua <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$9.800</div>
          </div>
          <div class="product-botton">
            <p>Tierna y suave lengua de res, acompañado con puré rustico de papas y salsa criolla.</p>
          </div>
          <div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_05.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Osobuco con rissoto parmesano</h4>
                  <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">A lo pobre <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$13.500</div>
          </div>
          <div class="product-botton">
            <p>Jugosa lámina de entraña a punto del cliente. Como su nombre lo dice, bien pobre en papas fritas de la casa acompñadas con cebolla caramelizada y la mejor salsa 2 huevos de campo.</p>
          </div>
          <div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_05.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Osobuco con rissoto parmesano</h4>
                  <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Raviolis de truchas <i class="fas fa-sad-tear icons-2" id="icons-disabled" alt="no dispobible"> </i></div>
            <div class="price-product">$11.800</div>
          </div>
          <div class="product-botton">
            <p>Rellenos de trchas de la zona, queso parmesano. Bañado en al pil pil de camarones.</p>
          </div>
          <div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_05.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Osobuco con rissoto parmesano</h4>
                  <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Spaguetti Ligura <i class="fas fa-sad-tear icons-2" id="icons-disabled" alt="no dispobible"> </i></div>
            <div class="price-product">$9.500</div>
          </div>
          <div class="product-botton">
            <p>Spaguetti al pesto, acompañado con milanesa de pollo y papas en crema de ají amarillo</p>
          </div>
          <div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_05.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Osobuco con rissoto parmesano</h4>
                  <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Cancato de trucha <i class="fas fa-sad-tear icons-2" id="icons-disabled" alt="no dispobible"> </i></div>
            <div class="price-product">$10.200</div>
          </div>
          <div class="product-botton">
            <p>Loganiza artesanal, acompañada de papas chilotas moradas salteadas en manequillas y especias del huerto.</p>
          </div>
          <div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_05.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Osobuco con rissoto parmesano</h4>
                  <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Escabeche de "Conejo" <i class="fas fa-sad-tear icons-2" id="icons-disabled" alt="no dispobible"> </i></div>
            <div class="price-product">$13.500</div>
          </div>
          <div class="product-botton">
            <p>Tierno conejo escabechado, Guisado con algunas verduras acompañada de papas nativas y arroz.</p>
          </div>
          <div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                  <img src="images/gallery_05.jpg" alt="" />
                </div>
                <div class="col-md-12 description">
                  <h4>Osobuco con rissoto parmesano</h4>
                  <p>Guido de 450g. de osobuco de ternera cocido lentamente por largas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>




      </div>

      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Sanguches y Hamburguesas</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Leufucade <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i> </i></div>
            <div class="price-product">$8.500</div>
          </div>
          <div class="product-botton">
            <p>Deliciosa hamburgesa de carne de res mezclada con prieta, lechuga hodropónica del huerto y tomates frescos, cebolla caramelizada, papa hilo, salsa bbq de la casa y mayonesa casera. En cápsula ahumada. En pan de papa.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Del bosque <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$8.500</div>
          </div>
          <div class="product-botton">
            <p>Hamburguesa 100% casera, lechuga hidropónica del huerto y tomates frescos, kétchup de murtas, queso de oveja fundido, aros de cebolla crudo, tocino y papa hilo. En pan de papa.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Cheeseburguer <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$8.900</div>
          </div>
          <div class="product-botton">
            <p>Hamburguesa 100% casera, lechuga hidropónica del huerto, tomate fresco, queso de oveja, queso mantecoso de la zona, cebolla caramelizada, tocino, papa hilo y pepinillos. Bañada en salsa de queso cheddar.</p>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">La gringa <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$8.900</div>
          </div>
          <div class="product-botton">
            <p>Hamburguesa 100% casera, lechuga hidropónica del huerto, omate fresco, queso cheddar, aros de cebolla morada cruda, tocinn, huevo de campo, salsa bbq y pepinillo, En pan de papa.</p>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">El ovejo <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$10.800</div>
          </div>
          <div class="product-botton">
            <p>Hambueguesa 100% de cordero, mayonesa shiracha, lechuga
              hidropónica, palta, queso de oveja, mermelada de cebolla,
              chimichurri, pepinillo, chips de papas nativas y mostaza antigua.</p>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Sanguche de lengua <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$7.300</div>
          </div>
          <div class="product-botton">
            <p>Estofado de Lechuga de res cocida lentamente, armada italiana o chacarera.</p>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Arcoiris a la chilena <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$7.300</div>
          </div>
          <div class="product-botton">
            <p>Fresca trucha de la zona, frita en tempura, y su buena chilena con ají verde encurtido.</p>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Barros luco <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$7.500</div>
          </div>
          <div class="product-botton">
            <p>El más clásico. Suave churrasco de res, acompañado con queso mantecoso de la zona.</p>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Churrasco Italiano <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$7.500</div>
          </div>
          <div class="product-botton">
            <p>Otro clásico de los clásicos. Fino corte de carne de res, mayonesa casera, tomate, palta.</p>
          </div>
        </div>

        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">La Mila <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$7.000</div>
          </div>
          <div class="product-botton">
            <p>Milanesa de pechuga de pollo, lechuga hidropónica, tomates frescos, crema de ají amarillo, encurtido de repollo morado y mayonesa. En pan de papa hecho en casa.</p>
          </div>
        </div>
      </div>


      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Platos fríos y entradas</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Trilogía de empanadas <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$6.500</div>
          </div>
          <div class="product-botton">
            <p>3 variedades de empanadas, 2 de marisco, 2 de conejo y 2 camarion queso, acompañadas de su crema de ají amarillo.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Ceviche de trucha <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$10.900</div>
          </div>
          <div class="product-botton">
            <p>Pescado de la zona preparado con leche de tigre. Acompañado de yuca frica, lechuga hodropónica, canchita y con su piel.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Ensalada del huerto <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$8.500</div>
          </div>
          <div class="product-botton">
            <p>Lechga hidropónica, pepino, palta, tomae cherry, palmitos, champiñones, zanahoria, trucha ahumada con vinagreta de yogurt de kéfir.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Ensalada Cuscus <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$8.000</div>
          </div>
          <div class="product-botton">
            <p>Queso de oveja, aros de cebolla, pimentón, aceituna, hierba buena, tomae cherry, pepinocuscus y quinoa.</p>
          </div>
        </div>
      </div>

      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Jugos y bebidas</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Bebida <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$1.500</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Jugos naturales <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$3.200</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Agua con gas <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$1.500</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Chicha morada <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$3.800</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
      </div>

      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Cerveza artesanal</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Heráldica: Botella 500cc. <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$4.600</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Schop artesanal Fucor 500cc.<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$4.600</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
      </div>

      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Sidra</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Llagar de barría 750cc.<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$6.600</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
      </div>

      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Pisco Sour</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Pisco Sour clásico<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$4.500</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Pisco Sour de arandano<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$5.800</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Pisco Sour Catedral<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$6.500</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
      </div>

      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Té y café</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Té<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$1.500</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Café Instantáneo<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$1.500</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Espresso<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$1.700</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Espresso doble<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$2.300</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Latte<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$2.850</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Americano<i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$2.500</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
      </div>

      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Vinos</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Erizo Merlot 750ml. <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$15.900</div>
          </div>
          <div class="product-botton">
            <p>Valle de cricó año 2016, 24 meses de guarda en barrica.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Chardonay Erizo <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$13.900</div>
          </div>
          <div class="product-botton">
            <p>Valle de casa blanca año 2017, 12 meses de guarda en barrica.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Sauvignon blanc Erizo <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$13.900</div>
          </div>
          <div class="product-botton">
            <p>Valle de casa blanca año 2019, acompañalo con ceviche de truza, arcoiris a la chilena.</p>
          </div>
        </div>
      </div>

      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Colaciones</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Menú del día <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$5.800</div>
          </div>
          <div class="product-botton">
            <p>Consultar con garzón la opción del día.</p>
          </div>
        </div>
      </div>



      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Postres</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Pie de limón <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$2.800</div>
          </div>
          <div class="product-botton">
            <p>Porción.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Tarta de manzana <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$2.800</div>
          </div>
          <div class="product-botton">
            <p>Porción.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Tiramisú <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$3.200</div>
          </div>
          <div class="product-botton">
            <p>Porción.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Torta de la casa <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$3.200</div>
          </div>
          <div class="product-botton">
            <p>Porción.</p>
          </div>
        </div>
      </div>

      <div class="categoria-menu">
        <div class="tittle-categoria block-title text-center">Piqueos</div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Papas de monte x2 <i class="fas fa-images icons-1" id="icons-enabled" alt="dispobible"> </i></div>
            <div class="price-product">$10.500</div>
          </div>
          <div class="product-botton">
            <p></p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Papas de monte x4 <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$19.900</div>
          </div>
          <div class="product-botton">
            <p>Papas fritas rústicas, aderezada con crema de ají amarillo, aceituna, queso mantecoso, pollo salteado, productos artesanales, longaniza, costillar de cerdo ahumado, lomo de cerdo cocido y ahumado, cebolla caramelizada y huevo de campo.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Alitas bravas <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$7.800</div>
          </div>
          <div class="product-botton">
            <p>6 alitas de pollo fritas, bañadas en salsa barbecure, acompañadas con yuca fría.</p>
          </div>
        </div>
        <div class="content-productos" id="product-modal">
          <div class="product-top row">
            <div class="name-product">Papas Cheddar <i class="fas fa-images icons-1" id="icons-enabled" alt="no dispobible"> </i></div>
            <div class="price-product">$8.900</div>
          </div>
          <div class="product-botton">
            <p>Papas fritas aderezada con ketchup de murta, crema de ají amarillo. Bañada en salsa de queso cheddar, tocino y cibollet.</p>
          </div>
        </div>


      </div>
    </div>






    <!-- end menu  -->

    <!-- end footer-news -->
    <div class="footer-box pad-top-70">
      <div class="container">
        <div class="row">
          <div class="footer-in-main">
            <div class="logo footer">
              <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                <img src="images/svg/cabecera.png" alt="" type="img/svg" class="logo1" />
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="footer-box-a">
                <h3>Ovejo Café - Restaurant</h3>
                <p>
                  Restaurante con amplia gastronomía (exótica y de autor), productos locales, Cervezas Artesanales.
                </p>
                <ul class="socials-box footer-socials pull-left">
                  <li>
                    <a href="https://www.facebook.com/profile.php?id=100091804303208" target="_black">
                      <div class="social-circle-border">
                        <i class="fa fa-facebook"></i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="social-circle-border">
                        <i class="fa fa-twitter"></i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/elovejorest/" target="_black">
                      <div class="social-circle-border">
                        <i class="fa fa-instagram"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- end footer-box-a -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="footer-box-b">
                <h3>NUestro menú</h3>
                <ul>
                  <li><a href="#">Menú invierno 2023</a></li>
                </ul>
              </div>
              <!-- end footer-box-b -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="footer-box-c">
                <h3>Nuestro contacto</h3>
                <p><a href="https://goo.gl/maps/ji5BV3t9GQ8VLzyTA" target="_black">
                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                    <span>Av. Pratt 474 Malalhue, 5160000 Lanco, Los Ríos</span>
                  </a>
                </p>
                <p><a href="tel:+56932803086">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <span> +56932803086 </span>
                  </a>
                </p>
                <p>
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span><a href="mailto:contacto@ovejocaferestobar.cl?Subject=Quiero%20informacion%20sobre%20Ovejo%20Café%20Restaurant">contacto@ovejocaferestobar.cl</a></span>

                </p>
              </div>
              <!-- end footer-box-c -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="footer-box-d">
                <h3>Horario de atención</h3>

                <ul>
                  <li>
                    <p>Lunes - Viernes</p>
                    <span> 12:30 hrs. - 23:00 hrs.</span>
                  </li>
                  <li>
                    <p>Sábado - Domingo</p>
                    <span> 12:30 hrs. - 20:00 hrs.</span>
                  </li>
                </ul>
              </div>
              <!-- end footer-box-d -->
            </div>
            <!-- end col -->
          </div>
          <!-- end footer-in-main -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
      <div id="copyright" class="copyright-main">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h6 class="copy-title">
                Copyright &copy; 2023 El Ovejo por
                <a href="#" target="_blank">Omar Olate Salas</a>
              </h6>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end copyright-main -->
    </div>
    <!-- end footer-box -->
  </div>
  <!-- end footer-main -->

  <a href="#" class="scrollup" style="display: none">Scroll</a>

  <!-- <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
  <!-- <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div> -->
  <!-- </section>  -->

  <!-- ALL JS FILES -->
  <script src="js/all.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>
  <script src="js/menu.js"></script>
</body>

</html>