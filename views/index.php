<?php 
$peticionAjax=false;
require_once "./controllers/index.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"
    />

    <!-- Site Metas -->
    <title>El Ovejo - Café Restarante</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color -->
    <link
      id="changeable-colors"
      rel="stylesheet"
      href="css/colors/orange.css"
    />

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
                  <button
                    type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#navbar"
                    aria-expanded="false"
                    aria-controls="navbar"
                  >
                    <span class="sr-only">Barra de navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class="logo">
                    <a
                      class="navbar-brand js-scroll-trigger logo-header"
                      href="#"
                    >
                      <img
                        src="images/svg/cabecera.png"
                        alt=""
                        type="img/svg"
                        class="logo1"
                      />
                    </a>
                  </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#banner">Inicio</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#menu">Menú</a></li>
                    <li><a href="#our_team">Equipo</a></li>
                    <li><a href="#gallery">Galería</a></li>
                    <li><a href="#reservation">Reservaciones</a></li>
                    <li><a href="#footer">Contáctanos</a></li>
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
    <!-- end site-header -->

    <div id="banner" class="banner full-screen-mode parallax">
      <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="banner-static">
            <div class="banner-text">
              <div class="banner-cell">
                <h1>
                  Café - Restaurante <br /><span
                    class="typer"
                    id="some-id"
                    data-delay="200"
                    data-delim=":"
                    data-words="El Ovejo:El Ovejo:El Ovejo"
                    data-colors="red"
                  ></span
                  ><span
                    class="cursor"
                    data-cursorDisplay="_"
                    data-owner="some-id"
                  ></span>
                </h1>
                <h2>Amplia gastronomía</h2>
                <p>
                  Productos locales, cervezas artesanales, postres y a comer!
                </p>
                <div class="book-btn">
                  <a
                    href="./menu"
                    class="table-btn hvr-underline-from-center"
                    >Ver menú</a
                  >
                </div>
                <a href="#about">
                  <div class="mouse"></div>
                </a>
              </div>
              <!-- end banner-cell -->
            </div>
            <!-- end banner-text -->
          </div>
          <!-- end banner-static -->
        </div>
        <!-- end col -->
      </div>
      <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div
              class="wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.1s"
            >
              <h2 class="block-title">Quienes somos?</h2>
              <h3>El Ovejo Café - Restaurante</h3>
              <p>
                Más detalles de quienes somos, como surgió la idea del local, por ejemplo
              </p>

              <p>
                Aquí también podemos poner el origen del nombre, o en realidad, todo lo que nos ayude a tener mas contacto con nuestros clientes
              </p>

              <p>
                Y así tambien poder tener cercanía con ellos.
              </p>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div
              class="wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.1s"
            >
              <div class="about-images">
                <img
                  class="about-main"
                  src="images/imagenes-ovejo/logo.jpg"
                  alt="About Main Image"
                />
                <!-- <img
                  class="about-inset"
                  src="images/imagenes-ovejo/plato1.jpg"
                  alt="About Inset Image"
                /> -->
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>

    <div class="special-menu pad-top-100 parallax">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div
              class="wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.1s"
            >
              <h2 class="block-title color-white text-center">
                Diversos platos exóticos
              </h2>
              <h5 class="title-caption text-center">
              Estamos orgullosos de ofrecerte una experiencia gastronómica única que te transportará a tierras lejanas y te permitirá descubrir nuevos y emocionantes sabores.
              </h5>
            </div>
            <div class="special-box">
              <div id="owl-demo">
                <div class="item item-type-zoom">
                  <a href="#" class="item-hover">
                    <div class="item-info">
                      <div class="headline">
                        PLATOS DE FONDO
                        <div class="line"></div>
                        <div class="dit-line">
                        Nuestra selección de Platos de Fondo es una experiencia culinaria excepcional que te dejará satisfecho y complacido.
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="item-img">
                    <img src="images/special-menu-1.jpg" alt="sp-menu" />
                  </div>
                </div>
                <div class="item item-type-zoom">
                  <a href="#" class="item-hover">
                    <div class="item-info">
                      <div class="headline">
                        SANGUCHES Y HAMBURGUESAS
                        <div class="line"></div>
                        <div class="dit-line">
                        Sumérgete en el mundo de los sabores irresistibles con nuestra amplia variedad de Sanguches y Hamburguesas.
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="item-img">
                    <img src="images/special-menu-2.jpg" alt="sp-menu" />
                  </div>
                </div>
                <div class="item item-type-zoom">
                  <a href="#" class="item-hover">
                    <div class="item-info">
                      <div class="headline">
                        PLATOS FRÍOS Y ENTRADAS
                        <div class="line"></div>
                        <div class="dit-line">
                        Es el comienzo perfecto para una comida memorable. Disfruta de la frescura y la creatividad culinaria en cada porción y déjate cautivar por la diversidad y el encanto de nuestras propuestas frías y entradas.
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="item-img">
                    <img src="images/special-menu-3.jpg" alt="sp-menu" />
                  </div>
                </div>
                <div class="item item-type-zoom">
                  <a href="#" class="item-hover">
                    <div class="item-info">
                      <div class="headline">
                        PIQUEOS
                        <div class="line"></div>
                        <div class="dit-line">
                        Desde opciones clásicas hasta creaciones innovadoras, nuestros Piqueos son el complemento perfecto para cualquier ocasión. Nuestros Piqueos son la opción perfecta para disfrutar de una comida relajada y llena de sabor.
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="item-img">
                    <img src="images/special-menu-1.jpg" alt="sp-menu" />
                  </div>
                </div>
                <div class="item item-type-zoom">
                  <a href="#" class="item-hover">
                    <div class="item-info">
                      <div class="headline">
                        POSTRES
                        <div class="line"></div>
                        <div class="dit-line">
                        Déjate tentar por nuestra irresistible selección de Postres que endulzarán tu paladar y te brindarán un final perfecto para tu experiencia gastronómica.
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="item-img">
                    <img src="images/special-menu-2.jpg" alt="sp-menu" />
                  </div>
                </div>
              </div>
            </div>
            <!-- end special-box -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end special-menu -->

    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div
              class="wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.1s"
            >
              <h2 class="block-title text-center">Nuestra Carta</h2>
              <p class="title-caption text-center">
              Bienvenido a "Nuestra Carta", el corazón y el alma de nuestra propuesta gastronómica. Aquí encontrarás una cuidadosa selección de platos inspirados en la pasión por la cocina y en la búsqueda constante de sabores extraordinarios.
              </p>
            </div>
            <div class="tab-menu">
              <div class="slider slider-nav">
                <div class="tab-title-menu">
                  <h2>ENTRADAS</h2>
                  <p><i class="flaticon-canape"></i></p>
                </div>
                <div class="tab-title-menu">
                  <h2>PLATOS DE FONDO</h2>
                  <p><i class="flaticon-dinner"></i></p>
                </div>
                <div class="tab-title-menu">
                  <h2>TÉ Y CAFÉ</h2>
                  <p><i class="flaticon-desert"></i></p>
                </div>
                <div class="tab-title-menu">
                  <h2>JUGOS Y BEBIDAS</h2>
                  <p><i class="flaticon-coffee"></i></p>
                </div>
              </div>
              <div class="slider slider-single">
                <div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-01.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>TRILOGÍA DE EMPANADAS</h3>
                        <p>
                        3 variedades de empanadas, 2 de marisco, 2 de conejo y 2 camarion queso, acompañadas de su crema de ají amarillo.
                        </p>
                      </div>
                      <span class="offer-price">$6.500</span>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-02.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>CHEVICHE DE TRUCHA</h3>
                        <p>
                        Pescado de la zona preparado con leche de tigre. Acompañado de yuca frica, lechuga hodropónica, canchita y con su piel.
                        </p>
                      </div>
                      <span class="offer-price">$10.900</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-03.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>ENSALADA DEL HUERTO</h3>
                        <p>
                          Lechga hidropónica, pepino, palta, tomae cherry, palmitos, champiñones, zanahoria, trucha ahumada con vinagreta de yogurt de kéfir.
                        </p>
                      </div>
                      <span class="offer-price">$8.500</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-03.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>ENSALADA CUSCUS</h3>
                        <p>
                        Queso de oveja, aros de cebolla, pimentón, aceituna, hierba buena, tomae cherry, pepinocuscus y quinoa.
                        </p>
                      </div>
                      <span class="offer-price">$8.000</span>
                    </div>
                  </div>
                  <!-- end col -->
                </div>
                <div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-04.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>OSOBUCO CON RISOTO PARMESANO</h3>
                        <p>
                        Guido de 450g. de osobuco de ternera cocido lentamente por algnas horas para cortar con la cuchara, acompañada dcon un rissoto a la parmesana con champiñones.
                        </p>
                      </div>
                      <span class="offer-price">$14.500</span>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-05.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>LOMO SALTADO</h3>
                        <p>
                        Al más puro estilo de un lomo saltado bien peruano. Filete de vacuno salteado con verduras frescas, cebolla, tomates, guisada con su salsa de lomo y acompañada con arroz y papas fritas.
                        </p>
                      </div>
                      <span class="offer-price">$13.300</span>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-06.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>DÍA 29 DE ÑOQUIS</h3>
                        <p>
                        Ñoquis hechos en casa acompañado con salsa boloñesa o pesto Liguria.
                        </p>
                      </div>
                      <span class="offer-price">$9.200</span>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-06.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>TALLARÍN SALTADO</h3>
                        <p>
                        Tallarín bañado con salsa de lomo. Filete con res, tomate, cebolla, cilantro y cebollín.
                        </p>
                      </div>
                      <span class="offer-price">$11.300</span>
                    </div>
                  </div>
                  <!-- end col -->
                </div>
                <div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-07.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>ESPRESSO</h3>
                        <p>
                        </p>
                      </div>
                      <span class="offer-price">$1.700</span>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-08.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>ESPRESSO DOBLE</h3>
                        <p>
                        </p>
                      </div>
                      <span class="offer-price">$2.300</span>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-09.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>LATTE</h3>
                        <p>
                        </p>
                      </div>
                      <span class="offer-price">$2.850</span>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-09.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>AMERICANO</h3>
                        <p>
                        </p>
                      </div>
                      <span class="offer-price">$2.500</span>
                    </div>
                  </div>
                  <!-- end col -->
                </div>
                <div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-10.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>BEBIDAS</h3>
                        <p>
                        </p>
                      </div>
                      <span class="offer-price">$1.500</span>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-09.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>JUGOS NATURALES</h3>
                        <p>
                        </p>
                      </div>
                      <span class="offer-price">$3.200</span>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-08.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>AGUA CON GAS</h3>
                        <p>
                        </p>
                      </div>
                      <span class="offer-price">$1.500</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="offer-item">
                      <img
                        src="images/menu-item-thumbnail-07.jpg"
                        alt=""
                        class="img-responsive"
                      />
                      <div>
                        <h3>CHICHA MORADA</h3>
                        <p>
                        </p>
                      </div>
                      <span class="offer-price">$3.800</span>
                    </div>
                  </div>
                  <!-- end col -->
                </div>
                
              </div>
            </div>
            <!-- end tab-menu -->
          </div>
          <!-- end col -->
        </div>
        
        <!-- end row -->
      </div>
      <div class="book-btn pagina-btn">
                  <a
                    href="./menu"
                    class="table-btn hvr-underline-from-center"
                    >Ver menú</a
                  >
                </div>
      <!-- end container -->
    </div>
    <!-- end menu -->

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div
              class="wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.1s"
            >
              <h2 class="block-title text-center">Nuestro Equipo</h2>
              <p class="title-caption text-center">
              En Ovejo Restaurant, nos enorgullece contar con un equipo de profesionales apasionados y talentosos que están comprometidos en ofrecerte una experiencia excepcional. Conocemos la importancia de un servicio cálido y amigable, por lo que nuestro equipo está dedicado a brindarte una atención personalizada y de calidad en cada visita.
              </p>
            </div>
            <div class="team-box">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="sf-team">
                    <div class="thumb">
                      <a href="#"><img src="images/staff-01.jpg" alt="" /></a>
                    </div>
                    <div class="text-col">
                      <h3>John Doggett</h3>
                      <p>
                        Nullam quis ante. Etiam sit amet orci eget eros faucibus
                        tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                        Donec sodales sagittis magna. Aenean commodo ligula.
                      </p>
                      <ul class="team-social">
                        <li>
                          <a href="#"
                            ><i class="fa fa-facebook" aria-hidden="true"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"
                            ><i class="fa fa-twitter" aria-hidden="true"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"
                            ><i class="fa fa-linkedin" aria-hidden="true"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-6">
                  <div class="sf-team">
                    <div class="thumb">
                      <a href="#"><img src="images/staff-02.jpg" alt="" /></a>
                    </div>
                    <div class="text-col">
                      <h3>Jeffrey Spender</h3>
                      <p>
                        Nullam quis ante. Etiam sit amet orci eget eros faucibus
                        tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                        Donec sodales sagittis magna. Aenean commodo ligula.
                      </p>
                      <ul class="team-social">
                        <li>
                          <a href="#"
                            ><i class="fa fa-facebook" aria-hidden="true"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"
                            ><i class="fa fa-twitter" aria-hidden="true"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"
                            ><i class="fa fa-linkedin" aria-hidden="true"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-6">
                  <div class="sf-team">
                    <div class="thumb">
                      <a href="#"><img src="images/staff-03.jpg" alt="" /></a>
                    </div>
                    <div class="text-col">
                      <h3>Monica Reyes</h3>
                      <p>
                        Nullam quis ante. Etiam sit amet orci eget eros faucibus
                        tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                        Donec sodales sagittis magna. Aenean commodo ligula.
                      </p>
                      <ul class="team-social">
                        <li>
                          <a href="#"
                            ><i class="fa fa-facebook" aria-hidden="true"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"
                            ><i class="fa fa-twitter" aria-hidden="true"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"
                            ><i class="fa fa-linkedin" aria-hidden="true"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- end col -->
              </div>
              <!-- end row -->
            </div>
            <!-- end team-box -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end team-main -->

    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div
              class="wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.1s"
            >
              <h2 class="block-title text-center">Nuestra Galería</h2>
              <p class="title-caption text-center">
              Desde las creaciones culinarias más sofisticadas hasta los platos caseros reconfortantes, nuestras imágenes reflejan la diversidad y la calidad de nuestra propuesta gastronómica. Cada fotografía fue tomada con cuidado para mostrar la presentación impecable de nuestros platos, resaltando los colores, las texturas y los ingredientes frescos que los componen.
              </p>
            </div>
            <div class="gal-container clearfix">
              <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#1">
                    <img src="images/gallery_01.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="1" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_01.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 1 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#2">
                    <img src="images/gallery_02.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="2" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_02.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 2 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#3">
                    <img src="images/gallery_03.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="3" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_03.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 3 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#4">
                    <img src="images/gallery_04.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="4" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_04.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 4 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#5">
                    <img src="images/gallery_05.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="5" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_05.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 5 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#9">
                    <img src="images/gallery_06.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="9" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_06.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 6 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#10">
                    <img src="images/gallery_07.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="10" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_07.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 7 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#11">
                    <img src="images/gallery_08.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="11" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_08.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 8 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#12">
                    <img src="images/gallery_09.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="12" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_09.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 9 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                <div class="box">
                  <a href="#" data-toggle="modal" data-target="#13">
                    <img src="images/gallery_10.jpg" alt="" />
                  </a>
                  <div class="modal fade" id="13" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                          <img src="images/gallery_10.jpg" alt="" />
                        </div>
                        <div class="col-md-12 description">
                          <h4>This is the 10 one on my Gallery</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end gal-container -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end gallery-main -->


    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
      <div class="container">
        <div class="row">
          <div class="form-reservations-box">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div
                class="wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.1s"
              >
                <h2 class="block-title text-center">Reservar una mesa</h2>
              </div>
              <h4 class="form-title">Formulario de reserva</h4>
              <p>Con nuestro sistema de reserva en línea, es fácil y conveniente asegurar tu mesa para garantizar que puedas disfrutar de una comida sin contratiempos. Simplemente completa el formulario de reserva con la fecha, hora y el número de comensales, y nos encargaremos de asegurar tu mesa para que puedas relajarte y disfrutar de tu visita.</p>

              <form
                id="contact-form"
                method="post"
                class="reservations-box"
                name="contactform"
                action="mail.php"
              >
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-box">
                    <input
                      type="text"
                      name="form_name"
                      id="form_name"
                      placeholder="Name"
                      required="required"
                      data-error="Firstname is required."
                    />
                  </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-box">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      placeholder="Correo electéonico"
                      required="required"
                      data-error="e-mail es requerido."
                    />
                  </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-box">
                    <input
                    value="+56 "
                      type="tel"
                      name="phone"
                      id="phone"
                      placeholder="contact no."
                    />
                  </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-box">
                    <select
                      name="no_of_persons"
                      id="no_of_persons"
                      class="selectpicker"
                    >
                      <option selected disabled>No. Of persons</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-box">
                    <input
                      type="text"
                      name="date-picker"
                      id="date-picker"
                      placeholder="Date"
                      required="required"
                      data-error="Date is required."
                    />
                  </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-box">
                    <input
                      type="text"
                      name="time-picker"
                      id="time-picker"
                      placeholder="Time"
                      required="required"
                      data-error="Time is required."
                    />
                  </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-box">
                    <select
                      name="preferred_food"
                      id="preferred_food"
                      class="selectpicker"
                    >
                      <option selected disabled>preferred food</option>
                      <option>Indian</option>
                      <option>Continental</option>
                      <option>Mexican</option>
                    </select>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-box">
                    <select name="occasion" id="occasion" class="selectpicker">
                      <option selected disabled>Occasion</option>
                      <option>Wedding</option>
                      <option>Birthday</option>
                      <option>Anniversary</option>
                    </select>
                  </div>
                </div>
                <!-- end col -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="reserve-book-btn text-center">
                    <button
                      class="hvr-underline-from-center"
                      type="submit"
                      value="SEND"
                      id="submit"
                    >
                      Solicitar reserva
                    </button>
                  </div>
                </div>
                <!-- end col -->
              </form>
              <!-- end form -->
            </div>
            <!-- end col -->
          </div>
          <!-- end reservations-box -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end reservations-main -->

    <div id="footer" class="footer-main">
      <div class="footer-news pad-top-100 pad-bottom-70 parallax">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div
                class="wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.1s"
              >
                <h2 class="ft-title color-white text-center">Suscríbete</h2>
                <p>Y recibe nuestras ofertas en tu e-mail</p>
              </div>
              <form>
                <input type="email" placeholder="Correo electrónico" />
                <a href="#" class="orange-btn"
                  ><i class="fa fa-paper-plane-o" aria-hidden="true"></i
                ></a>
              </form>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end footer-news -->
      
      
      <!-- end footer-news -->
    <div class="footer-box pad-top-50">
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
    <!-- validador de numero de telefono  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>
