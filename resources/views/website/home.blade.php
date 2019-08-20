@component('layouts.website')
@slot('seo')
<!-- Organic Seo META DESC 130 characters-->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $desc }}">
<!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Ai-Online-Shop.com">
    <meta name="twitter:creator" content="@AiOnlineShop2">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $desc }}">
    <meta name="twitter:image" content="{{ asset('assets/img/blog/1/social/5.jpg') }}">
<!-- Facebook Card tags -->
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description"
          content="{{ $desc }}">
    <meta property="og:image"
          content="{{ asset('assets/img/blog/1/social/5.jpg') }}">
    <meta property="og:url"
          content="{{ Request::url() }}">
    <meta property="og:type" content="website">
<!-- JSON NewsArticle -->
    <script type="application/ld+json">
        //
        // The document referenced in mainEntityOfPage should be the same as the
        // canonical link above.
        //
        // Also, please be aware that some platforms that use AMP HTML have
        // further restrictions with regards to some schema components.
        //
        // For example:
        //
        //   * The leader "image" referenced in the markup below must appear
        //   somewhere on the AMP HTML document itself.
        //
        //   * The URL for that "image" must precisely match the src of the
        //   amp-img tag.
        //
        //   * All marked-up URLs should be absolute.
        //
        //   * The "logo" dimensions must not exceed 600x60.
        //
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "mainEntityOfPage": "{{ Request::url() }}",
        "headline": "{{ $title }}",
        "datePublished": "{{ $published }}",
        "dateModified": "{{ $modified }}",
        "description": "{{ $desc }}",
        "author": {
          "@type": "Person",
          "name": "{{ $author }}"
        },
        "publisher": {
          "@type": "Organization",
          "name": "{{$store}}",
          "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('assets/img/store/logo/store-logo-small.jpf') }}",
            "width": 60,
            "height": 60
          }
        },
        "image": {
          "@type": "ImageObject",
          "url": "{{ asset('assets/img/blog/1/social/5.jpg') }}",
          "height": 512,
          "width": 1024
        }
      }
    </script>
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
      <amp-img alt="Ai-Online-Shop.com" class="mobile layer-black" layout="responsive" srcset="
      {{ asset('assets/img/legal/impressum-1/200.webp') }} 200w,
      {{ asset('assets/img/legal/impressum-1/495.webp') }} 495w,
      {{ asset('assets/img/legal/impressum-1/689.webp') }} 689w,
      {{ asset('assets/img/legal/impressum-1/881.webp') }} 881w,
      {{ asset('assets/img/legal/impressum-1/1000.webp') }} 1000w" src="{{ asset('assets/img/legal/impressum-1/1000.webp') }}" height="1298" width="1000">
    <amp-img fallback alt="Ai-Online-Shop.com" class="mobile layer-black" layout="responsive" srcset="
    {{ asset('assets/img/legal/impressum-1/200.jpg') }} 200w,
    {{ asset('assets/img/legal/impressum-1/495.jpg') }} 495w,
    {{ asset('assets/img/legal/impressum-1/689.jpg') }} 689w,
    {{ asset('assets/img/legal/impressum-1/881.jpg') }} 881w,
    {{ asset('assets/img/legal/impressum-1/1000.jpg') }} 1000w" src="{{ asset('assets/img/legal/impressum-1/1000.jpg') }}" height="1298" width="1000">
    </amp-img>
    </amp-img>
    <amp-img alt="Ai-Online-Shop.com" class="desktop layer-black" layout="responsive" srcset="
    {{ asset('assets/img/legal/impressum-2/200.webp') }} 200w,
    {{ asset('assets/img/legal/impressum-2/505.webp') }} 505w,
    {{ asset('assets/img/legal/impressum-2/705.webp') }} 705w,
    {{ asset('assets/img/legal/impressum-2/905.webp') }} 905w,
    {{ asset('assets/img/legal/impressum-2/1024.webp') }} 1024w" src="{{ asset('assets/img/legal/impressum-2/1024.webp') }}" height="512" width="1024">
    <amp-img fallback alt="Ai-Online-Shop.com" class="desktop layer-black" layout="responsive" srcset="
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
    <h1 class="header-text">Something Big is About to Come....</h1>
    </div>
  </div>
</div>
@endslot
@endcomponent
