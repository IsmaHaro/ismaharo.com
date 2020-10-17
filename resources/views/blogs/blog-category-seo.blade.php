@extends('layout')

@section('title', 'Posicionamiento SEO | Experto SEO Isma Haro')

@section('meta_description' , 'Todo sobre posicionamiento SEO, las mejores técnicas y el mejor contenido')
@section('og_type'          , 'article')
@section('og_title'         , 'Posicionamiento SEO | Experto SEO Isma Haro')
@section('og_description'   , 'Todo sobre posicionamiento SEO, las mejores técnicas y el mejor contenido')
@section('og_url'           , 'https://ismaharo.com/posicionamiento-seo')
@section('og_published_time', '2020-10-17')
@section('og_modified_time' , '2020-10-17')
@section('og_image'         , 'https://ismaharo.com/images/posicionamiento-seo/posicionamiento-seo.png')

@section('main_content')
<!-- Section Started -->
<div class="section started layout-creative" id="section-started">

    <!-- background -->
    <div class="video-bg">
        <div class="video-bg-mask"></div>
        <div class="video-bg-texture" id="grained_container"></div>
    </div>

    <!-- started content -->
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="started-content">
                <h1 class="h-title">
                    Todo Sobre Posicionamiento SEO y WEB en Google
                </h1>
                <div class="h-subtitles">
                    <div class="h-subtitle typing-subtitle" style="display: none;">
                        <p>Aprende <strong>las mejores técnicas</strong></p>
                        <p>Consigue <strong>resultados</strong></p>
                        <p>Obtén <strong>más tráfico</strong></p>
                    </div>
                    <span class="typed-subtitle"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- mosue button -->
    <a href="#" class="mouse_btn" style="display: none;"><span class="icon fas fa-chevron-down"></span></a>

</div>

<!-- Works -->
<div class="section works" id="section-portfolio">
    <div class="content">

        <!-- portfolio items -->
        <div class="box-items portfolio-items">

            <div class="box-item f-links"> <!-- add class "animate-to-page" if need animated transition to page and delete target="_blank" -->
                <div class="image">
                    <a href="/posicionamiento-seo/como-hacer-que-mi-pagina-web-aparezca-en-google" class="has-popup-link hover-animated">
                        <img src="/images/posicionamiento-seo/como-hacer-que-mi-página-web-aparezca-en-google.png" class="wp-post-image" alt="Como Hacer Que Mi Pagina Web Aparezca En Google" />
                        <span class="info circle">
                            <span class="centrize full-width">
                                <span class="vertical-center">
                                    <span class="icon fas fa-link"></span>
                                    <span class="desc">
                                        <span class="category">Posicionamiento SEO</span>
                                        <span class="name">¿Cómo hacer que mi página web aparezca en Google?</span>
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
@endsection