@extends('layouts.index.master')

  {{-- lang html tag --}}

  @section('lang'){{$lang}}@stop

  {{-- Title Head --}}

  @section('title'){{$title}}@stop

  {{-- Metatag Head --}}

  @section('Content-Type','text/html; charset=UTF-8')
  @section('x-ua-compatible','ie=edge')
  @section('keywords','')
  @section('description','')
  @section('facebookUrl','')
  @section('facebookImage','')
  @section('viewport','width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1')
  @section('idiomaLang','es-mx')
  @section('urlLang','http://southpointecapital.com/')

  <!--Menu Transparente-->
  @section('menuCSS','css/menu/menu.css?v='.cache("js_version_number").'')

  {{-- Angular Controller --}}

  @section('controller','index')

  {{-- Body --}}

  @section('content')

  <!--================Home Banner Area =================-->
  <section>

  <div class="slider stick-dots">

    <div class="slide">
      <div class="slide__img" style="height: 850px !important;">
        <img src="" alt="" data-lazy="images/water.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
      <div style="background: rgba(255,255,255,.6); width: 100%; height: 850px;" class="slide__content center">
        <div class="slide__content--headings center">
          <h2 style="color: black; margin-top: 250px;" class="animated center" data-animation-in="fadeInUp">COOMING SOON</h2>
          
        </div>
      </div>
    </div>

  </div>

</section>
  <!--================End Home Banner Area =================-->


    @stop
