<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>{{ trans('adminlte_lang::message.landingdescriptionpratt') }}</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>TecnoSoport</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!--<li class="active"><a href="#home" class="smoothScroll">{{ trans('Inicio') }}</a></li>
                    <li><a href="#desc" class="smoothScroll">{{ trans('adminlte_lang::message.description') }}</a></li>
                    <li><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a></li>
                    <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>-->
                    <li><a href="">Quienes Somos</a></li>
                    <li><a href="">Servicios</a></li>
                    <li><a href="">Apps</a></li>
                    <li><a href="">Ubicacion</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Iniciar Sesion</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">

                    <h1>MediaApp</h1>
                    <h3>La empresa TecnoSoport <a href="https://laravel.com/"></a> {{ trans('se esta dando a conocer con su proyecto') }}
                        {{ trans('ya que surgio de los problemas que vemos en los hospitales desde cualquier ambito.') }} <a href="https://almsaeedstudio.com/preview"></a> {{ trans('Este proyecto busca reducir de desde lo mas minimo de los problemas que surgen.') }}
                        <a href="http://getbootstrap.com/"></a>{{ trans('De igual forma MediaApp busca darle un avance tecnologico desde la aplicacion') }} <a href="http://blacktie.co/demo/pratt/"></a></h3>
                    <h3><a href="{{ url('/register') }}" class="btn btn-lg btn-success">{{ trans('Descargalo') }}</a></h3>
                </div>
                <div class="col-lg-2">
                    <!--<h5>{{ trans('adminlte_lang::message.amazing') }}</h5>
                    <p>{{ trans('adminlte_lang::message.basedadminlte') }}</p>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">-->

                </div>
                <div class="col-lg-8">
                    <img class="img-responsive" src="{{ asset('/img/im.png') }}" alt="">
                </div>
                <div class="col-lg-2">
                    <br>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                    <h5>{{ trans('Aplicacion Movil') }}</h5>
                    <p>{{ trans('') }} 
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->


    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h1>{{ trans('Soporte') }}</h1>
                <br>
                <br>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro011.png') }}" alt="">
                    <h3>{{ trans('Comunicacion') }}</h3>
                    <p>{{ trans('') }} 
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro022.png') }}" alt="">
                    <h3>{{ trans('Agenda') }}</h3>
                    <p>.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro033.png') }}" alt="">
                    <h3>{{ trans('Monitoreo') }}</h3>
                    <p></p>
                </div>
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1 class="centered">{{ trans('Nuevas Actualizaciones') }}</h1>
                <br>
                <br>
                <div class="col-lg-6 centered">
                    <img class="centered" src="{{ asset('/img/telefono.png') }}" alt="">
                </div>

                <div class="col-lg-6">
                    <h3>{{ trans('Sistema Operativo') }}</h3>
                    <br>
                    <!-- ACCORDION -->
                    <div class="accordion ac" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                
                                </a>
                            </div><!-- /accordion-heading -->
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <p>Ultima version compatible con el sistema operativo Android 4.4.4 hasta 6.0.1 y !Os 7.2. Considelarse la mejor empresa de marketing digital y diseño grafico, siendo la mejor opcion para nuestros clientes, no sólo por costos, tambien por medio de confianza,creatividad e innovacion que genera nuestro trabajo </p>

                                    <p>¿Que es una App? Es un programa que se instala en un dispositivo movil -ya sea telefono o tablet- y que se puede integrar a las caracteristicas del equipo como su camara o sistema de posicionamineto global (GPS). Ademas se puede actualizar para añadirle nuevas caracteristicas con el paso del tiempo. </p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                       <!-- <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    {{ trans('adminlte_lang::message.retina') }}
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div><!--><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                       <!-- <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                    {{ trans('adminlte_lang::message.support') }}
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div><!--><!-- /accordion-inner -->
                            <!--</div><!--><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                       
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>
                    </div><!-- Accordion -->
                </div>
            </div>
        </div><!--/ .container -->
    </div><!--/ #features -->


    <section id="showcase" name="showcase"></section>
    <div id="showcase">
        <div class="container">
            <div class="row">
                <h1 class="centered">{{ trans('Somos tu mejor opcion') }}</h1>
                <br>
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('/img/01.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/img/2.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/img/3.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/img/4.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/img/5.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div><!-- /container -->
    </div>


    <section id="contact" name="contact"></section>
    <div id="footerwrap">
        <div class="container">
            <div class="col-lg-5">
                <h3>{{ trans('Address') }}</h3>
                <p>
                    Col. Las tres cruces,<br/>
                    Maxcanu,Yucatan<br/>

                    
                </p>
            </div>

            <div class="col-lg-7">
                <h3>{{ trans('Comentarios') }}</h3>
                <!--<br>
                <form role="form" action="#" method="post" enctype="plain">
                    <div class="form-group">
                        <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                        <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                    </div>
                    <div class="form-group">
                        <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                        <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                    </div>-->
                    <div class="form-group">
                        <label>{{ trans('Escribir comentario') }}</label>
                        <textarea class="form-control" name="Message" rows="3"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-large btn-success">{{ trans('Enviar') }}</button>
                </form>
            </div>
        </div>
    </div>
    <div id="c">
        <div class="container">
            <p>
              
                <strong>Copyright &copy; 2018 <a href="http://acacha.org">TecnoSoport</a>
                <br/>
                 {{ trans('Siguenos en') }} <a href="https://almsaeedstudio.com/">TecnoSoport@gmail.com</a>
                <br/>
                  {{ trans('') }} 
            </p>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
