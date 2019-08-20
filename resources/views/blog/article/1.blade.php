@component('layouts.blog')
@slot('language')
{{$language_code}}
@endslot
@slot('seo')
<!-- Organic Seo META DESC 130 characters-->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $desc }}">
<!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ $store }}">
    <meta name="twitter:creator" content="{{ $author_twitter }}">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $desc }}">
    <meta name="twitter:image" content="{{ asset('assets/img/blog/'.$id. '/social/5.jpg') }}">
<!-- Facebook Card tags -->
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description"
          content="{{ $desc }}">
    <meta property="og:image"
          content="{{ asset('assets/img/blog/'.$id. '/social/5.jpg') }}">
    <meta property="og:url"
          content="{{ Request::url() }}">
    <meta property="og:type" content="website">
<!-- JSON NewsArticle -->
    <script type="application/ld+json">
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
          "url": "{{ asset('assets/img/blog/'.$id. '/social/5.jpg') }}",
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
  <amp-img alt="{{ $title }}" class="mobile layer-black" layout="responsive" srcset="
  {{ asset('assets/img/blog/'.$id. '/start/1.webp') }} 200w,
  {{ asset('assets/img/blog/'.$id. '/start/2.webp') }} 456w,
  {{ asset('assets/img/blog/'.$id. '/start/3.webp') }} 709w,
  {{ asset('assets/img/blog/'.$id. '/start/4.webp') }} 887w,
  {{ asset('assets/img/blog/'.$id. '/start/5.webp') }} 1000w" src="{{ asset('assets/img/blog/'.$id. '/start/5.webp') }}" height="1298" width="1000">
    <amp-img fallback alt="{{ $title }}" class="mobile layer-black" layout="responsive" srcset="
    {{ asset('assets/img/blog/'.$id. '/start/1.jpg') }} 200w,
    {{ asset('assets/img/blog/'.$id. '/start/2.jpg') }} 456w,
    {{ asset('assets/img/blog/'.$id. '/start/3.jpg') }} 709w,
    {{ asset('assets/img/blog/'.$id. '/start/4.jpg') }} 887w,
    {{ asset('assets/img/blog/'.$id. '/start/5.jpg') }} 1000w" src="{{ asset('assets/img/blog/'.$id. '/start/5.jpg') }}" height="1298" width="1000">
    </amp-img>
    </amp-img>
    <amp-img alt="{{ $title }}" class="desktop layer-black" layout="responsive" srcset="
    {{ asset('assets/img/blog/'.$id. '/social/1.webp') }} 200w,
    {{ asset('assets/img/blog/'.$id. '/social/2.webp') }} 490w,
    {{ asset('assets/img/blog/'.$id. '/social/3.webp') }} 690w,
    {{ asset('assets/img/blog/'.$id. '/social/4.webp') }} 888w,
    {{ asset('assets/img/blog/'.$id. '/social/5.webp') }} 1024w" src="{{ asset('assets/img/blog/'.$id. '/social/5.webp') }}" height="512" width="1024">
    <amp-img fallback alt="{{ $title }}" class="desktop layer-black" layout="responsive" srcset="
    {{ asset('assets/img/blog/'.$id. '/social/1.jpg') }} 200w,
    {{ asset('assets/img/blog/'.$id. '/social/2.jpg') }} 490w,
    {{ asset('assets/img/blog/'.$id. '/social/3.jpg') }} 690w,
    {{ asset('assets/img/blog/'.$id. '/social/4.jpg') }} 888w,
    {{ asset('assets/img/blog/'.$id. '/social/5.jpg') }} 1024w" src="{{ asset('assets/img/blog/'.$id. '/social/5.jpg') }}" height="512" width="1024">
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
      <p class="p-section"><a class="a-title">{{ $section }}</a>{{ ' | '. $mins_read . ' min read' }}</p>
    <h1 class="header-text">{{ $title }}</h1>
    </div>
  </div>
    <button class="h-topic button" on="tap:my-lightbox">
      <div class="icon-con">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-top: 2px"><path d="M0 0h24v24H0z" fill="none"/><path fill="white" d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
</div>
<span class="desktop span-h">Love it?<br>Share it!</span>
</button>
</div>
    <div>
        <amp-lightbox id="my-lightbox" layout="nodisplay">
            <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">
              <div class="lightcont">
                <p class="text-sp-lb">Social Sharing</p>
                <h1 class="text-social-lb">Spread the Word.</h1>
                <div class="mwidth1">
                    <amp-social-share class="rounded" type="email" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="facebook" data-param-app_id="1850379645107816" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="linkedin" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="pinterest" data-param-media="{{ asset('assets/img/blog/'.$id. '/social/5.jpg') }}" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="tumblr" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="twitter" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="whatsapp" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="line" width="48" height="48"></amp-social-share>
                </div>
                <p class="text-sp-lb m20">More Information</p>
                <h1 class="text-social-lb">About the Author.</h1>
                <div class="author m12">
                  <amp-img alt="{{ $author }}" class="author-avatar" layout="fill" srcset="
                  {{ asset('assets/img/author/'. $author_img .'/200.jpg') }} 200w,
            {{ asset('assets/img/author/'. $author_img .'/356.webp') }} 356w,
            {{ asset('assets/img/author/'. $author_img .'/480.webp') }} 480w,
            {{ asset('assets/img/author/'. $author_img .'/586.webp') }} 586w,
            {{ asset('assets/img/author/'. $author_img .'/685.webp') }} 685w,
            {{ asset('assets/img/author/'. $author_img .'/770.webp') }} 770w" src="{{ asset('assets/img/author/'. $author_img .'/770.webp') }}">
                  <amp-img fallback alt="{{ $author }}" class="author-avatar" layout="fill" srcset="{{ asset('assets/img/author/'. $author_img .'/200.jpg') }} 200w,
            {{ asset('assets/img/author/'. $author_img .'/356.jpg') }} 356w,
            {{ asset('assets/img/author/'. $author_img .'/480.jpg') }} 480w,
            {{ asset('assets/img/author/'. $author_img .'/586.jpg') }} 586w,
            {{ asset('assets/img/author/'. $author_img .'/685.jpg') }} 685w,
            {{ asset('assets/img/author/'. $author_img .'/770.jpg') }} 770w" src="{{ asset('assets/img/author/'. $author_img .'/770.jpg') }}">
                  </amp-img></amp-img>
                    <div class="author-text">
                        <p class="p-author">{{ $author }}</p>
                        <p class="p-date">{{ $published }}</p>
                    </div>
                </div>
                <p class="p-date2 mwidth1">{{ $author_des }}</p>
                <div class="backbox">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/></svg>
                </div>
                  </div>
            </div>
        </amp-lightbox>
    </div>
<div class="desktop-container">
<div class="container-content">
    <div class="author">
      <amp-img alt="{{ $author }}" class="author-avatar" layout="fill" srcset="
      {{ asset('assets/img/author/'. $author_img .'/200.jpg') }} 200w,
{{ asset('assets/img/author/'. $author_img .'/356.webp') }} 356w,
{{ asset('assets/img/author/'. $author_img .'/480.webp') }} 480w,
{{ asset('assets/img/author/'. $author_img .'/586.webp') }} 586w,
{{ asset('assets/img/author/'. $author_img .'/685.webp') }} 685w,
{{ asset('assets/img/author/'. $author_img .'/770.webp') }} 770w" src="{{ asset('assets/img/author/'. $author_img .'/770.webp') }}">
      <amp-img fallback alt="{{ $author }}" class="author-avatar" layout="fill" srcset="{{ asset('assets/img/author/'. $author_img .'/200.jpg') }} 200w,
{{ asset('assets/img/author/'. $author_img .'/356.jpg') }} 356w,
{{ asset('assets/img/author/'. $author_img .'/480.jpg') }} 480w,
{{ asset('assets/img/author/'. $author_img .'/586.jpg') }} 586w,
{{ asset('assets/img/author/'. $author_img .'/685.jpg') }} 685w,
{{ asset('assets/img/author/'. $author_img .'/770.jpg') }} 770w" src="{{ asset('assets/img/author/'. $author_img .'/770.jpg') }}">
      </amp-img></amp-img>
        <div class="author-text">
            <p class="p-author">{{ $author }}</p>
            <p class="p-date">{{ $published }}</p>
        </div>
    </div>
</div>
@include('blog.article_single.' . $id)
  </div>
@endslot
@endcomponent
