@component('layouts.website')
@slot('seo')
    <title>{{ __('website.26') }} | Ai-Online-Shop.com</title>
    <meta name="description" content="{{ __('website.27')}}">
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
      <amp-img alt="{{ __('website.26') }} Ai-Online-Shop.com" class="mobile layer-black" layout="responsive" srcset="
      {{ asset('assets/img/legal/impressum-1/200.webp') }} 200w,
      {{ asset('assets/img/legal/impressum-1/495.webp') }} 495w,
      {{ asset('assets/img/legal/impressum-1/689.webp') }} 689w,
      {{ asset('assets/img/legal/impressum-1/881.webp') }} 881w,
      {{ asset('assets/img/legal/impressum-1/1000.webp') }} 1000w" src="{{ asset('assets/img/legal/impressum-1/1000.webp') }}" height="1298" width="1000">
    <amp-img fallback alt="{{ __('website.26') }} Ai-Online-Shop.com" class="mobile layer-black" layout="responsive" srcset="
    {{ asset('assets/img/legal/impressum-1/200.jpg') }} 200w,
    {{ asset('assets/img/legal/impressum-1/495.jpg') }} 495w,
    {{ asset('assets/img/legal/impressum-1/689.jpg') }} 689w,
    {{ asset('assets/img/legal/impressum-1/881.jpg') }} 881w,
    {{ asset('assets/img/legal/impressum-1/1000.jpg') }} 1000w" src="{{ asset('assets/img/legal/impressum-1/1000.jpg') }}" height="1298" width="1000">
    </amp-img>
    </amp-img>
    <amp-img alt="{{ __('website.26') }} Ai-Online-Shop.com" class="desktop layer-black" layout="responsive" srcset="
    {{ asset('assets/img/legal/impressum-2/200.webp') }} 200w,
    {{ asset('assets/img/legal/impressum-2/505.webp') }} 505w,
    {{ asset('assets/img/legal/impressum-2/705.webp') }} 705w,
    {{ asset('assets/img/legal/impressum-2/905.webp') }} 905w,
    {{ asset('assets/img/legal/impressum-2/1024.webp') }} 1024w" src="{{ asset('assets/img/legal/impressum-2/1024.webp') }}" height="512" width="1024">
    <amp-img fallback alt="{{ __('website.26') }} Ai-Online-Shop.com" class="desktop layer-black" layout="responsive" srcset="
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
    <h1 class="header-text">{{ __('website.26') }}</h1>
    </div>
  </div>
</div>
<div class="desktop-container">
  <div class="container-content">
<p class="t-blog">{{ __('website.27')}}
</p>
<h2>{{ __('website.28')}}</h2>
<p class="t-blog"><strong>{{ __('website.29')}}</strong>
</p>
<ul>
  <li><p class="t-blog">{{ __('website.30')}}
  </p></li>
  <li><p class="t-blog">{{ __('website.31')}}
  </p></li>
</ul>
<p class="t-blog">{{ __('website.32')}}
</p>
<p class="t-blog">{{ __('website.33')}}
</p>
<p class="t-blog">{{ __('website.34')}}
</p>
<p class="t-blog">{{ __('website.35')}}
</p>
<h2>{{ __('website.36')}}</h2>
<p class="t-blog">{{ __('website.37')}}
</p>
<p class="t-blog">{{ __('website.38')}}
</p>
<p class="t-blog">{{ __('website.39')}}
</p>
<ul>
  <li><p class="t-blog">{{ __('website.40')}}
  </p></li>
  <li><p class="t-blog">{{ __('website.41')}}
  </p></li>
  <li><p class="t-blog">{{ __('website.42')}}
  </p></li>
</ul>
<p class="t-blog"><strong>{{ __('website.43')}}</strong>
</p>
<p class="t-blog">{{ __('website.44')}}
</p>
<ul>
  <li><p class="t-blog">{{ __('website.45')}}
  </p></li>
</ul>
<div class="table-responsive">
  <table class="table">
    <tr>
      <th>{{ __('website.46')}}</th>
      <th>{{ __('website.47')}}</th>
      <th>{{ __('website.48')}}</th>
      <th>{{ __('website.49')}}</th>
    </tr>
    <tr>
      <td>{{ __('website.50')}}</td>
      <td>{{ __('website.51')}}</td>
      <td>{{ __('website.52')}}</td>
      <td>{{ __('website.53')}}</td>
    </tr>
  </table>
</div>
<p class="t-blog"><strong>{{ __('website.54')}}</strong>
</p>
<p class="t-blog">{{ __('website.55')}}
</p>
<ul>
  <li><p class="t-blog">{{ __('website.56')}}
  </p></li>
  <li><p class="t-blog">{{ __('website.57')}}
  </p></li>
</ul>
<p class="t-blog"><strong>{{ __('website.58')}}</strong>
</p>
<p class="t-blog">{{ __('website.59')}}
</p>
<p class="t-blog"><strong>{{ __('website.60')}}</strong>
</p>
<p class="t-blog">{{ __('website.59')}}
</p>
<p class="t-blog"><strong>{{ __('website.61')}}</strong>
</p>
<p class="t-blog">{{ __('website.62')}}
</p>
<p class="t-blog">{{ __('website.63')}}
</p>
<p class="t-blog">{{ __('website.64')}}
</p>
<div class="table-responsive">
  <table class="table">
    <tr>
      <th>{{ __('website.46')}}</th>
      <th>{{ __('website.47')}}</th>
      <th>{{ __('website.48')}}</th>
      <th>{{ __('website.49')}}</th>
    </tr>
    <tr>
      <td>{{ __('website.50')}}</td>
      <td>{{ __('website.51')}}</td>
      <td>{{ __('website.52')}}</td>
      <td>{{ __('website.53')}}</td>
    </tr>
  </table>
</div>
<h2>{{ __('website.65')}}</h2>
<p class="t-blog">{{ __('website.66')}}
</p>
<p class="t-blog">{{ __('website.67')}}
</p>
<p class="t-blog">{{ __('website.68')}}
</p>
<p class="t-blog"><strong>{{ __('website.69')}}</strong>
</p>
<ul>
  <li><p class="t-blog"><a href="https://www.youtube.com/t/terms" class="link">YouTube</a>
  </p></li>
  <li><p class="t-blog"><a href="https://vimeo.com/terms" class="link">Vimeo</a>
  </p></li>
  <li><p class="t-blog"><a href="https://policies.google.com/terms?hl=en&gl=be" class="link">Google</a>
  </p></li>
  <li><p class="t-blog"><a href="https://www.google.com/intl/en_be/help/terms_maps/" class="link">Google Maps</a>
  </p></li>
  <li><p class="t-blog"><a href="https://marketingplatform.google.com/about/analytics/terms/us/" class="link">Google Analytics</a>
  </p></li>
  <li><p class="t-blog"><a href="https://www.microsoft.com/en/servicesagreement/" class="link">Microsoft</a>
  </p></li>
  <li><p class="t-blog"><a href="https://www.facebook.com/legal/terms" class="link">Facebook</a>
  </p></li>
  <li><p class="t-blog"><a href="https://twitter.com/en/tos?wcmmode=disabled#intlTerms" class="link">Twitter</a>
  </p></li>
  <li><p class="t-blog"><a href="https://www.linkedin.com/legal/user-agreement" class="link">LinkedIn</a>
  </p></li>
  <li><p class="t-blog"><a href="https://policy.pinterest.com/en/terms-of-service" class="link">Pinterest</a>
  </p></li>
  <li><p class="t-blog"><a href="https://www.tumblr.com/policy/en/terms-of-service" class="link">Tumblr</a>
  </p></li>
  <li><p class="t-blog"><a href="https://www.whatsapp.com/legal/" class="link">Whatsapp</a>
  </p></li>
  <li><p class="t-blog"><a href="http://terms2.line.me/lineat_terms?lang=de" class="link">LINE</a>
  </p></li>
</ul>

<p class="t-blog">{{ __('website.70')}}
</p>
<h2>{{ __('website.71')}}</h2>
<p class="t-blog">{{ __('website.72') }} <a href="https://www.aboutcookies.org/" class="link">https://www.aboutcookies.org/</a>
</p>
<p class="t-blog">{{ __('website.73')}}
</p>
<p class="t-blog">{{ __('website.74')}}
</p>
<p class="t-blog">{{ __('website.75')}}
</p>
<p class="t-blog"><strong>{{ __('website.76')}}</strong>
</p>
<p class="t-blog">{{ __('website.77')}}
</p>
<p class="t-blog"><strong>{{ __('website.78')}}</strong>
</p>
<p class="t-blog">{{ __('website.79')}}
</p>
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
<a class="contain-content-button" href="{{ route('terms')}}">
  <div class="icon-content">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="black" d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
  </div>
  <p class="content-button">{{ __('website.24')}}</p>
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
