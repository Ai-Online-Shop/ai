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
    <meta name="twitter:image" content="{{ $img_social }}">
<!-- Facebook Card tags -->
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description"
          content="{{ $desc }}">
    <meta property="og:image"
          content="{{ $img_social }}">
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
    –      "@type": "Organization",
          "name": "{{$store}}",
          "logo": {
            "@type": "ImageObject",
            "url": "{{ $store_logo }}",
            "width": 60,
            "height": 60
          }
        },
        "image": {
          "@type": "ImageObject",
          "url": "{{ $img_social }}",
          "height": 2000,
          "width": 800
        }
      }
    </script>
@endslot

@slot('css')
@include('css.custom_1')
@endslot

@slot('content')
<div class="container">
    <h2 class="m10">Something big is coming soon! Stay tuned...</h2>

</div>
@endslot
@endcomponent
