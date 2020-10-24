@extends('layout')

@section('title', 'Todo Sobre Google Ads | Experto en Google Ads Isma Haro')

@section('meta_description' , 'Encuentra todo lo necesario para hacer campañas exitosas en la plataforma de publicidad Google Ads')
@section('og_type'          , 'article')
@section('og_title'         , 'Todo Sobre Google Ads | Experto en Google Ads Isma Haro')
@section('og_description'   , 'Encuentra todo lo necesario para hacer campañas exitosas en la plataforma de publicidad Google Ads')
@section('og_url'           , 'https://ismaharo.com/google-ads')
@section('og_published_time', '2020-10-24')
@section('og_modified_time' , '2020-10-24')
@section('og_image'         , 'https://ismaharo.com/images/google-ads/todo-sobre-google-ads.png')

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
                    Todo Sobre Google Ads y Campañas
                </h1>
                <div class="h-subtitles">
                    <div class="h-subtitle typing-subtitle" style="display: none;">
                        <p>Los mejores <strong>tips de campañas en Google</strong></p>
                        <p>Configura  <strong>conversiones y públicos</strong></p>
                        <p>Haz anuncios que <strong>generen resultados</strong></p>
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
                    <a href="/google-ads/como-anunciarme-en-google-ads" class="has-popup-link hover-animated">
                        <img src="/images/google-ads/como-anunciarme-en-google-ads.png" class="wp-post-image" alt="Los mejores tips de como anunciarte en Google Ads" />
                        <span class="info circle">
                            <span class="centrize full-width">
                                <span class="vertical-center">
                                    <span class="icon fas fa-link"></span>
                                    <span class="desc">
                                        <span class="category">Google Ads</span>
                                        <span class="name">¿Cómo anunciarme en Google Ads?</span>
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