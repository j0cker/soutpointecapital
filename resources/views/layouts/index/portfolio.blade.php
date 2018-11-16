@extends('layouts.index.master2')

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
        <div class="slide__img">
          <img src="" alt="" data-lazy="images/mountains.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
        </div>
        <div style="background: rgba(255,255,255,.5); width: 100%;" class="slide__content center layer_transparent">
          <div class="slide__content--headings center">
            <h2 style="color: black;" class="animated center titles" data-animation-in="fadeInUp">COMING SOON</h2>
            
          </div>
        </div>
      </div>

    </div>

</section>
  <!--================End Home Banner Area =================-->


    @stop
