@extends('layout')

@section('title')
    Titulo de Contacto
@endsection

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
                <h1 class="h-title">Contáctame</h1>
                <div class="h-subtitles">
                    <div class="h-subtitle typing-bread">
                        <p class="breadcrumbs">
                            <a href="/">Inicio</a> / Contacto
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

<!-- Section Contacts Info -->
<div class="section contacts" id="section-contacts-info">
    <div class="content">

        <!-- title -->
        <div class="title">
            <div class="title_inner">Información de Contacto</div>
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
            <div class="title_inner">Formulario de Contacto</div>
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