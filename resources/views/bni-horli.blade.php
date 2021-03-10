@extends('layout')

@section('title', 'Ismael Haro | BNI HORLI')

@section('meta_description', 'Contenido de HORLI Para Biografía de BNI')

@section('og_type'          , 'article')
@section('og_title'         , 'Ismael Haro | BNI HORLI')
@section('og_description'   , 'Soy Ismael Haro, Director de Pagina.MX y Capmega, profesional y experto en SEO, desarrollo web y Google Ads')
@section('og_url'           , 'https://ismaharo.com/bni/horli')
@section('og_published_time', '2021-02-23')
@section('og_modified_time' , '2021-02-23')
@section('og_image'         , 'https://ismaharo.com/images/experto-seo.png')

@section('main_content')


<!-- Section Started -->
<div class="section started section-title" id="section-started">

    <!-- background -->
    <div class="video-bg">
        <div class="video-bg-mask"></div>
        <div class="video-bg-texture" id="grained_container"></div>
    </div>

    <!-- started content -->
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="started-content">
                <h1 class="h-title">¡Bienvenido/a a mi HORLI!</h1>

                <div class="h-subtitles">
                    <div class="h-subtitle typing-bread">
                        <p class="breadcrumbs">
                            <a href="/">Inicio</a> / Horli BNI
                        </p>
                    </div>
                    <span class="typed-bread"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- mosue button -->
    <a href="#" class="mouse_btn" style="display: none;"><span class="icon fas fa-chevron-down"></span></a>

</div>

<!-- Section About -->
<div class="section about" id="section-about">

    <!-- title -->
    <div class="title">
        <div class="title_inner">
            <h2 class="title-white">¿Quién Soy Yo?</h2>
        </div>
    </div>

    <div class="content content-box">

        <!-- image -->
        <div class="image">
            <img class="profile-img" src="/images/experto-seo.jpg" alt="Experto SEO en México" />
        </div>

        <!-- desc -->
        <div class="desc">
            <div class="info-list block">
                <ul>
                    <li><strong><span class="fas fa-check"></span></strong> <span class="important-text">Nombre: Ismael Haro</span></li>
                    <li><strong><span class="fas fa-check"></span></strong> <span class="important-text">Carrera: Ingeniero En Ciencias De la Computación</span></li>
                    <li><strong><span class="fas fa-check"></span></strong> <span class="important-text">Ubicación: Puebla, Pue</span></li>
                    <li><strong><span class="fas fa-check"></span></strong> <span class="important-text">Negocio: Pagina.MX y Capmega</span></li>
                    <li><strong><span class="fas fa-check"></span></strong> <span class="important-text">Estado: Soltero</span></li>
                    <li><strong><span class="fas fa-check"></span></strong> <span class="important-text">Expertise: SEO, Google Ads, Desarrollo Web y Servidores</span></li>
                </ul>
            </div>
            <!--<div class="bts">
                <a href="/servicio-de-seo#section-contacts" class="btn hover-animated">
                    <span class="circle"></span>
                    <span class="lnk">Me Interesa El Servicio De SEO</span>
                </a>
            </div>-->
        </div>

        <div class="clear"></div>
    </div>
</div>


<!-- Works -->
<div class="section works" id="section-portfolio">
    <div class="content">

        <!-- title -->
        <div class="title">
            <div class="title_inner">
                <h2 class="title-white">Mis Empresas</h2>
            </div>
        </div>

        <!-- portfolio items -->
        <div class="box-items portfolio-items">

            <div class="box-item f-links"> <!-- add class "animate-to-page" if need animated transition to page and delete target="_blank" -->
                <div class="image">
                    <a href="https://pagina.mx" target="_blank" class="has-popup-link hover-animated">
                        <img src="/images/pagina.jpg" class="wp-post-image" alt="Pagina.MX Dominios, Hosting Web y Correos Corporativos" />
                        <span class="info circle">
                            <span class="centrize full-width">
                                <span class="vertical-center">
                                    <span class="icon fas fa-link"></span>
                                    <span class="desc">
                                        <span class="category">Pagina.MX</span>
                                        <span class="name">Dominios, Hosting Web y Correos Corporativos</span>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="box-item f-links"> <!-- add class "animate-to-page" if need animated transition to page and delete target="_blank" -->
                <div class="image">
                    <a href="https://capmega.com" target="_blank" class="has-popup-link hover-animated">
                        <img src="/images/capmega.jpg" class="wp-post-image" alt="Capmega Desarrollo de Software y SEO" />
                        <span class="info circle">
                            <span class="centrize full-width">
                                <span class="vertical-center">
                                    <span class="icon fas fa-link"></span>
                                    <span class="desc">
                                        <span class="category">Capmega</span>
                                        <span class="name">Desarrollo de Software y SEO</span>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</div>

<!-- Section Service -->
<div class="section service" id="section-services">
    <div class="content">

        <!-- title -->
        <div class="title">
            <div class="title_inner">
                <h2 class="title-white">HORLI</h2>
            </div>
        </div>

        <!-- service items -->
        <div class="service-items">

            <div class="service-col">
                <div class="service-item content-box">
                    <div class="icon"><span class="fas fa-code"></span></div>
                    <div class="name">
                        <h3 class="title-white">Habilidades</h3>
                    </div>
                    <div class="text">
                        Experto en SEO y Posicionamiento Orgánico
                        <br>
                        Experto en Google Ads
                        <br>
                        Programador y desarrollador web
                        <br>
                        Bilingue
                        <br>
                        Autodidacta
                    </div>
                </div>
            </div>

            <div class="service-col">
                <div class="service-item content-box">
                    <div class="icon"><span class="fas fa-chart-bar"></span></div>
                    <div class="name">
                        <h3 class="title-white">Objetivos</h3>
                    </div>
                    <div class="text">
                        Consolidar Pagina.MX como la mejor empresa de Hosting Web en México
                        <br>
                        Consolidar Capmega como la mejor empresa de desarrollo de software en México
                        <br>
                        Consolidarme como uno de los mejores expertos de SEO en México
                        <br>
                        Retirarme Joven y tener un viñedo
                    </div>
                </div>
            </div>

            <div class="service-col">
                <div class="service-item content-box">
                    <div class="icon"><span class="fas fa-project-diagram"></span></div>
                    <div class="name">
                        <h3 class="title-white">Logros e Intereses</h3>
                    </div>
                    <div class="text">
                        Consolidar clientes alrededor del mundo: México, USA, España, Chile, Colombia, Argentina, Uruguay, etc...
                        <br>
                        Tocar el piano y aprender una de mis canciones favoritas: "Firestone"
                        <br>
                        Campeón Nacional de Natación Estilo Pecho
                        <br>
                        Me interesa aprender todo sobre el vino
                    </div>
                </div>
            </div>

            <div class="service-col">
                <div class="service-item content-box">
                    <div class="icon"><span class="fas fa-eye"></span></div>
                    <div class="name">
                        <h3 class="title-white">Redes</h3>
                    </div>
                    <div class="text">
                        BNI
                        <br>
                        Alianzas estratégicas con Agencias de Marketing en México
                        <br>
                        Club Rotario
                        <br>
                        Comunidad de Instagram
                    </div>
                </div>
            </div>

        </div>

        <div class="clear"></div>
    </div>
</div>



<!-- Section Knowladge Skills -->
<div class="section skills" id="section-skills-know">
    <div class="content">

        <!-- title -->
        <div class="title">
            <div class="title_inner">
                <h2 class="title-white">
                    Esfera de Contactos
                </h2>
            </div>
        </div>

        <!-- skills -->
        <div class="skills list content-box">
            <ul>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://mercadiez.com" target="_blank">
                                Mercadiez
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://comarka.mx" target="_blank">
                                Comarka
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://www.lastmile.biz/" target="_blank">
                                Last Mile
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://arletex.mx" target="_blank">
                                Arletex
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://fiubags.mx" target="_blank">
                                FiuBags
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://cenet.mx" target="_blank">
                                Cenet
                            </a>
                        </span>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>


<!-- Section Knowladge Skills -->
<div class="section skills" id="section-skills-know">
    <div class="content">

        <!-- title -->
        <div class="title">
            <div class="title_inner">
                <h2 class="title-white">
                    Últimos 10 Clientes
                </h2>
            </div>
        </div>

        <!-- skills -->
        <div class="skills list content-box">
            <ul>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://labclinicos.com" target="_blank">
                                Laboratorios LCM
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://packland.com.mx" target="_blank">
                                Packland
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://mercadiez.com" target="_blank">
                                Mercadiez
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://comarka.mx" target="_blank">
                                Comarka
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://www.lastmile.biz/" target="_blank">
                                Last Mile
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://arletex.mx" target="_blank">
                                Arletex
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://fiubags.mx" target="_blank">
                                FiuBags
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://www.rumahcumbres.com/" target="_blank">
                                Rumah Cumbres
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://valverdedesignhouse.mx/" target="_blank">
                                Valverde Design House
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <span class="important-text">
                            <a href="https://saulhuerta.mx/" target="_blank">
                                Saúl Huerta Diputado Federal
                            </a>
                        </span>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>


<!-- Section Contacts Info -->
<div class="section contacts" id="section-contacts-info">
    <div class="content">

        <!-- title -->
        <div class="title">
            <div class="title_inner">Contacto</div>
        </div>

        <!-- contacts items -->
        <div class="service-items">

            <div class="service-col">
                <div class="service-item content-box">
                    <div class="icon"><span class="fab fa-instagram"></span></div>
                    <div class="name">Instagram</div>
                    <div class="text">
                        @isma.haro
                    </div>
                </div>
            </div>

            <div class="service-col">
                <div class="service-item content-box">
                    <div class="icon"><span class="fas fa-envelope"></span></div>
                    <div class="name">Email</div>
                    <div class="text">
                        <a href="mailto:isma@capmega.com">
                            isma@capmega.com
                        </a>
                    </div>
                </div>
            </div>

            <div class="service-col">
                <div class="service-item content-box">
                    <div class="icon"><span class="fas fa-map-marker-alt"></span></div>
                    <div class="name">Dirección</div>
                    <div class="text">
                        Calzada Zavaleta #1097, Santa Cruz Buena Vista, Puebla, México
                    </div>
                </div>
            </div>

            <div class="service-col">
                <div class="service-item content-box">
                    <div class="icon"><span class="fas fa-user-tie"></span></div>
                    <div class="name">El Mejor SEO de México</div>
                    <div class="text">¿Buscas posicionar tu sitio web?</div>
                </div>
            </div>

        </div>

        <div class="clear"></div>
    </div>
</div>

<!-- Section Contacts Form -->
<div class="section contacts" id="section-contacts">
    <div class="content">

        <!-- title -->
        <div class="title">
            <div class="title_inner title-green">¡Mándame Un Mensaje Y Aumenta Tus Ventas!</div>
        </div>

        <!-- form -->
        <div class="contact_form content-box">
            <form id="" action="/guardar-formulario" method="POST">
                @csrf
                <div class="group-val">
                    <input type="text" name="name" placeholder="Nombre" required />
                </div>
                <div class="group-val">
                    <input type="email" name="email" placeholder="Email" required/>
                </div>
                <div class="group-val ct-gr">
                    <textarea name="message" placeholder="Mensaje" required></textarea>
                </div>
                <div class="group-bts">
                    <button type="submit" class="btn hover-animated">
                        <span class="circle"></span>
                        <span class="lnk">Enviar Mensaje</span>
                    </button>
                </div>
            </form>
        </div>

    </div>
    <div class="clear"></div>
</div>

@endsection