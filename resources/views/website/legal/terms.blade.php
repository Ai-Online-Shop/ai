@component('layouts.website')
@slot('seo')
    <title>{{ __('website.81') }} | Ai-Online-Shop.com</title>
    <meta name="description" content="Ai-Online-Shop is currently not offering any services, come back soon once we released our products.">
@endslot

@slot('css')
@include('css.custom_1')
@endslot

@slot('content')
<div class="container">
  <amp-animation id="blackmirror"
layout="nodisplay">
<script type="application/json">
  {
  "duration": "0.2s",
  "fill": "both",
  "direction": "alternate",
    "selector": "#blackmirror",
    "animations": [{
      "keyframes": {
        "opacity": [1, 0.9, 1, 0.5, 0.1]
      }
    }]
  }
</script>
</amp-animation>
<amp-position-observer  on="scroll:blackmirror.seekTo(percent=event.percent)" layout="nodisplay"></amp-position-observer>
  <div class="overflow-container">
    <div id="blackmirror">
      <amp-img alt="{{ __('website.81') }} Ai-Online-Shop.com" class="mobile layer-black" layout="responsive" srcset="
      {{ asset('assets/img/legal/impressum-1/200.webp') }} 200w,
      {{ asset('assets/img/legal/impressum-1/495.webp') }} 495w,
      {{ asset('assets/img/legal/impressum-1/689.webp') }} 689w,
      {{ asset('assets/img/legal/impressum-1/881.webp') }} 881w,
      {{ asset('assets/img/legal/impressum-1/1000.webp') }} 1000w" src="{{ asset('assets/img/legal/impressum-1/1000.webp') }}" height="1298" width="1000">
    <amp-img fallback alt="{{ __('website.81') }} Ai-Online-Shop.com" class="mobile layer-black" layout="responsive" srcset="
    {{ asset('assets/img/legal/impressum-1/200.jpg') }} 200w,
    {{ asset('assets/img/legal/impressum-1/495.jpg') }} 495w,
    {{ asset('assets/img/legal/impressum-1/689.jpg') }} 689w,
    {{ asset('assets/img/legal/impressum-1/881.jpg') }} 881w,
    {{ asset('assets/img/legal/impressum-1/1000.jpg') }} 1000w" src="{{ asset('assets/img/legal/impressum-1/1000.jpg') }}" height="1298" width="1000">
    </amp-img>
    </amp-img>
    <amp-img alt="{{ __('website.81') }} Ai-Online-Shop.com" class="desktop layer-black" layout="responsive" srcset="
    {{ asset('assets/img/legal/impressum-2/200.webp') }} 200w,
    {{ asset('assets/img/legal/impressum-2/505.webp') }} 505w,
    {{ asset('assets/img/legal/impressum-2/705.webp') }} 705w,
    {{ asset('assets/img/legal/impressum-2/905.webp') }} 905w,
    {{ asset('assets/img/legal/impressum-2/1024.webp') }} 1024w" src="{{ asset('assets/img/legal/impressum-2/1024.webp') }}" height="512" width="1024">
    <amp-img fallback alt="{{ __('website.81') }} Ai-Online-Shop.com" class="desktop layer-black" layout="responsive" srcset="
    {{ asset('assets/img/legal/impressum-2/200.jpg') }} 200w,
    {{ asset('assets/img/legal/impressum-2/505.jpg') }} 505w,
    {{ asset('assets/img/legal/impressum-2/705.jpg') }} 705w,
    {{ asset('assets/img/legal/impressum-2/905.jpg') }} 905w,
    {{ asset('assets/img/legal/impressum-2/1024.jpg') }} 1024w" src="{{ asset('assets/img/legal/impressum-2/1024.jpg') }}" height="512" width="1024">
    </amp-img></amp-img>
</div>
<amp-animation id="blogphototext"
layout="nodisplay">
<script type="application/json">
{
"duration": "0.2s",
"fill": "both",
"direction": "alternate",
  "selector": "#blogphototext",
  "animations": [{
    "keyframes": {
      "opacity": [1, 0.9, 1, 0.4],
      "transform": ["translateY(0px)","translateY(3px)","translateY(10px)","translateY(150px)"]
    }
  }]
}
</script>
</amp-animation>
<amp-position-observer  on="scroll:blogphototext.seekTo(percent=event.percent)" layout="nodisplay"></amp-position-observer>
    <div class="text-container" id="blogphototext">
      <p class="p-section">Ai-Online-Shop.com</p>
    <h1 class="header-text">{{ __('website.81') }}</h1>
    </div>
  </div>
</div>
<div class="desktop-container">
  <div class="container-content">
    <p>Ai-Online-Shop is currently not offering any services, come back soon once we released our products.</p>
<h2 class="tabelofcontent"><strong>{{ __('website.7') }}</strong></h2>
<div class="content-navigation">
  <a class="contain-content-button" href="{{ route('impressum')}}">
    <div class="icon-content">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="black" d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    </div>
    <p class="content-button">{{ __('website.6')}}</p>
  </a>
  <a class="contain-content-button" href="{{ route('privacy_policy')}}">
    <div class="icon-content">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="black" d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    </div>
    <p class="content-button">{{ __('website.22')}}</p>
  </a>
<a class="contain-content-button" href="{{ route('cookies_policy')}}">
  <div class="icon-content">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="black" d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
  </div>
  <p class="content-button">{{ __('website.23')}}</p>
</a>
<a class="contain-content-button" href="{{ route('home')}}">
  <div class="icon-content">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="black" d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
  </div>
  <p class="content-button">Homepage</p>
</a>
</div>
  </div>
</div>
@endslot
@endcomponent
