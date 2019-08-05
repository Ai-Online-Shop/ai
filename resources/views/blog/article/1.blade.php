@component('layouts.blog')
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
    <meta name="twitter:image" content="{{ asset('assets/img/blog/'.$id. '/social/1024.jpg') }}">
<!-- Facebook Card tags -->
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description"
          content="{{ $desc }}">
    <meta property="og:image"
          content="{{ asset('assets/img/blog/'.$id. '/social/630.jpg') }}">
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
          "url": "{{ asset('assets/img/blog/'.$id. '/social/1024.jpg') }}",
          "height": 512,
          "width": 1024
        }
      }
    </script>
@endslot

@slot('css')
<style amp-custom>
body{
  font-family: 'Roboto', sans-serif;
}
.cookie1{
  background-color: #fd345a;
  box-shadow: 0 14px 28px rgba(235,94,135,0.30), 0 10px 8px rgba(235,94,135,0.22);
  border-radius: 7px;
  color: #fff;
  padding: 5px 10px 5px 10px;
  margin-left: 10px;
}
.button {
            display: inline-block;
            border: none;
            outline: 0;
            text-decoration: none;
            text-align: center;
            vertical-align: top;
            cursor: pointer;
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            letter-spacing: normal ;
            position: relative;
            white-space: nowrap;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-appearance: none;
            transition: .3s;
            -webkit-user-select: none ;
            -moz-user-select: none ;
            -ms-user-select: none ;
            user-select: none
        }
.h-topic{
  position: absolute;
  bottom: -20px;
  right: 30px;
  margin: 0px 0px 0px 35px;
  width: 50px;
  height: 50px;
  background-color: #fd345a;
  border-radius: 50%;
  box-shadow: 0 14px 28px rgba(235,94,135,0.30), 0 10px 8px rgba(235,94,135,0.22);
}
.layer-black::after {
  display: block;
  position: relative;
  background-image: linear-gradient(to bottom, transparent 0%, black 100%);
  margin-top: -150px;
  height: 150px;
  width: 100%;
  content: '';
}
.h-topic:hover {
    box-shadow: 0 6px 7px 0 rgba(235, 94, 135, .25), 0 0 5px 0 rgba(235, 94, 135, .2);
    opacity: 1;
    color: #ffffff;
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px);
    transition: .35s
}

.h-topic:active {
    box-shadow: 0 3px 6px 0 rgba(235, 94, 135, .1), 0 0 10px 0 rgba(235, 94, 135, .1), 0 1px 4px -1px rgba(235, 94, 135, .1);
    -webkit-transform: translateY(0);
    transform: translateY(0);
    color: #ffffff;
    transition: .35s
}
.share-button {
    color: #ffffff;
    vertical-align: text-bottom;
}
.container {
  position: relative;
}
.container-content {
  position: relative;
  padding: 10px 35px 10px 35px;
}
.header-text{
  color: #fff;
  font-size: 28px;
  position: absolute;
  bottom: 10px;
  padding: 0px 35px 0px 35px;
}
.author-avatar{
  width: 47px;
  height: 47px;
  border-radius: 50%;
  float: left;
}
.t-blog{
  font-size: 18px;
  line-height: 1.5;
}
.blog-picture-desc{
  font-size: 15px;
  line-height: 1.5
}
.author-avatar:hover{
  border-radius: 0%;
  transition: .35s
}
.author{
  position: relative;
  margin: 15px 0 -20px 0;
}
.author-text{
  margin-left: 60px;
}
.lightbox{
  background: #fff;
  position: relative;
  height:100%;
  padding: 10px 25px 10px 25px;
}
.backbox{
  bottom: 50px;
  left: 25px;
  padding:10px;
  position: absolute;
  background: #fff;
  border-radius: 20%;
  box-shadow: 0 14px 28px rgba(0,0,0,0.30), 0 10px 8px rgba(0,0,0,0.22);
}
.quote-gr-blue{
  background: linear-gradient(to right, #21D4FD 0%, #B721FF 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}
.fw500{
  font-weight: 400;
}
.mback{
  vertical-align: text-bottom;
  color: #222;
}
:root {
    --space-2: 1rem;   /* 16px */
  }
  /* Center the notification content */
  amp-user-notification.sample-notification {
    padding: var(--space-2);
    display: flex;
    align-items: center;
    justify-content: center;
  }
   amp-social-share.rounded {
     border-radius: 20%;
     background-size: 68%;
     margin-right: 5px;
     margin-top: 5px;
   }
.text-social-lb{
  margin-top: -10px;
  margin-bottom: 10px;
}
.mwidth1{
  max-width: 300px;
}
.m20{
  margin-top: 30px
}
.m10{
  margin-top: 25px
}
.m12{
  margin-top: -5px
}
.text-sp-lb{
  font-size: 15px;
  font-weight: 400;
  color: #a5acb4;
}
.p-author{
  font-size: 16px;
  padding-top: 3px;
  font-weight: 600;
}

.p-date{
  margin-top: -13px;
  font-size: 14px;
  font-weight: 400;
  color: #a5acb4;
}

.p-date2{
  margin-top: 40px;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.4;
  color: #a5acb4;
  padding-left: 8px;
  padding-bottom: 2px;
  border-left: 2px solid #a5acb4;
}
.blog-picture{
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
}
.desktop{
  display: none
}
.contain-content-button{
  height: 38px;
  min-width: 150px;
  background-color: #ebebf0;
  color: #929196;
  line-height: 1.3;
  padding: 5px 7px 5px 7px;
  margin-right: 15px;
  border-radius: 8px;
display: flex;
align-items: center;
}
.content-button{
  font-size: 12px;
  text-align: left;
  padding-right: 3px;
}
.icon-content{
  padding-right: 7px;
  line-height: 68px;
  height: 50px;
  color: #000;
}
.content-navigation{
  order: 2;
overflow-y: hidden;
overflow-x: scroll;
-webkit-overflow-scrolling: touch;
display: flex;
flex-wrap: nowrap;
width: auto;
}
.tabelofcontent{
  border-top: 1px solid #ebebf0;
  padding-top: 10px;
  margin-bottom: 10px;
}
@media (min-width: 576px){
  .mobile{
    display: none
  }
  .desktop{
    display: block
  }
  .header-text{
    font-size: 32px;
    padding: 0 7% 0 7%;
    bottom: 5%;
  }
.desktop-container{
  background: #ffffff;
  padding: 0 30px 0 30px;
}
.white-bordered{
  background: #fff;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  margin-top: -5%;
  position: relative;
  box-shadow: 0 1px 0 0 rgba(0,0,0,.09), 0 1px 2px 0 rgba(0,0,0,.09), 0 10px 20px 0 rgba(0,0,0,.09);
}
.container-content{
  padding: 10px 45px 10px 45px
}
.author{
  margin: -5px 0 -25px 0;
}
.h-topic{
  bottom: -40px;
  right: 12%;
  z-index: 100;
}
.p-date2{
  margin-top: 50px;
  font-size: 16px;
  padding-left: 10px;
  padding-bottom: 1px;
}
.lightbox{
  padding: 60px 85px 60px 85px;
}
.backbox{
  bottom: 200px;
  left: 85px;
  padding:13px;
}
.mwidth1{
  max-width: 380px;
}
}

@media (min-width: 768px){
  .header-text{
    padding: 0 10% 0 10%;
    font-size: 35px;
  }
  .desktop-container{
    background: #ffffff;
    padding: 0 70px 0 70px;
  }
  .container-content{
    padding: 20px 65px 20px 65px
  }
  .author{
    position: relative;
    margin: 15px 0 -40px 0;
  }
  .p-date2{
    margin-top: 70px;
  }
  .h-topic{
    bottom: -45px;
    right: 15%;
  }
}

@media (min-width: 1024px){
  .header-text{
    font-size: 40px;
    padding: 0 15% 0 15%;
    bottom: 5%;
  }
  .desktop-container{
    background: #ffffff;
    padding: 0 130px 0 130px;
  }
  .container-content{
    padding: 30px 85px 30px 85px
  }
  .author{
    position: relative;
    margin: 15px 0 -50px 0;
  }
  .p-date2{
    margin-top: 80px;
  }
  .h-topic{
    bottom: -50px;
    right: 20%;
  }
}

@media (min-width: 1200px){
  .header-text{
    font-size: 40px;
    padding: 0 27% 0 27%;
    bottom: 5%;
  }
  .desktop-container{
    background: #ffffff;
    padding: 0 25% 0 25%;
  }
  .container-content{
    padding: 3% 7% 3% 7%
  }
  .author{
    position: relative;
    margin: 15px 0 -7% 0;
  }
  .p-date2{
    margin-top: 8%;
  }
  .h-topic{
    bottom: -45px;
    right: 29%;
  }
}
</style>

@endslot

@slot('content')
<div class="container">
  <amp-img alt="{{ $title }}" class="mobile layer-black" layout="responsive" srcset="
  {{ asset('assets/img/blog/'.$id. '/start/70.webp') }} 70w,
  {{ asset('assets/img/blog/'.$id. '/start/456.webp') }} 456w,
  {{ asset('assets/img/blog/'.$id. '/start/709.webp') }} 709w,
  {{ asset('assets/img/blog/'.$id. '/start/887.webp') }} 887w,
  {{ asset('assets/img/blog/'.$id. '/start/1000.webp') }} 1000w" src="{{ asset('assets/img/blog/'.$id. '/start/1000.webp') }}" height="1298" width="1000">
    <amp-img fallback alt="{{ $title }}" class="mobile layer-black" layout="responsive" srcset="
    {{ asset('assets/img/blog/'.$id. '/start/70.jpg') }} 70w,
    {{ asset('assets/img/blog/'.$id. '/start/456.jpg') }} 456w,
    {{ asset('assets/img/blog/'.$id. '/start/709.jpg') }} 709w,
    {{ asset('assets/img/blog/'.$id. '/start/887.jpg') }} 887w,
    {{ asset('assets/img/blog/'.$id. '/start/1000.jpg') }} 1000w" src="{{ asset('assets/img/blog/'.$id. '/start/1000.jpg') }}" height="1298" width="1000">
    </amp-img>
    </amp-img>
    <amp-img alt="{{ $title }}" class="desktop layer-black" layout="responsive" srcset="
    {{ asset('assets/img/blog/'.$id. '/social/200.webp') }} 200w,
    {{ asset('assets/img/blog/'.$id. '/social/490.webp') }} 490w,
    {{ asset('assets/img/blog/'.$id. '/social/690.webp') }} 690w,
    {{ asset('assets/img/blog/'.$id. '/social/888.webp') }} 888w,
    {{ asset('assets/img/blog/'.$id. '/social/1024.webp') }} 1024w" src="{{ asset('assets/img/blog/'.$id. '/social/1024.webp') }}" height="512" width="1024">
    <amp-img fallback alt="{{ $title }}" class="desktop layer-black" layout="responsive" srcset="
    {{ asset('assets/img/blog/'.$id. '/social/200.jpg') }} 200w,
    {{ asset('assets/img/blog/'.$id. '/social/490.jpg') }} 490w,
    {{ asset('assets/img/blog/'.$id. '/social/690.jpg') }} 690w,
    {{ asset('assets/img/blog/'.$id. '/social/888.jpg') }} 888w,
    {{ asset('assets/img/blog/'.$id. '/social/1024.jpg') }} 1024w" src="{{ asset('assets/img/blog/'.$id. '/social/1024.jpg') }}" height="512" width="1024">
    </amp-img></amp-img>
    <div class="text-container">
    <h1 class="header-text">{{ $title }}</h1>
    </div>
    <button class="h-topic button" on="tap:my-lightbox">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-top: 3px"><path d="M0 0h24v24H0z" fill="none"/><path fill="white" d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
    </button>
    <div>
        <amp-lightbox id="my-lightbox" layout="nodisplay">
            <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">
                <p class="text-sp-lb">Social Sharing</p>
                <h1 class="text-social-lb">Spread the Word.</h1>
                <div class="mwidth1">
                    <amp-social-share class="rounded" type="email" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="facebook" data-param-app_id="1850379645107816" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="linkedin" width="48" height="48"></amp-social-share>
                    <amp-social-share class="rounded" type="pinterest" data-param-media="{{ asset('assets/img/blog/'.$id. '/social/1024.jpg') }}" width="48" height="48"></amp-social-share>
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
                        <p class="p-date">{{ $published . '  ·  ' . $mins_read . ' min read' }}</p>
                    </div>
                </div>
                <p class="p-date2 mwidth1">{{ $author_des }}</p>
                <div class="backbox">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/></svg>
                </div>
            </div>
        </amp-lightbox>
    </div>
</div>
<div class="desktop-container">
  <div class="white-bordered">
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
            <p class="p-date">{{ $published . '  ·  ' . $mins_read . ' min read' }}</p>
        </div>
    </div>
</div>
@include('blog.article_single.' . $id)
</div>
  </div>
  <amp-user-notification id="my-notification"
  class="sample-notification"
  layout="nodisplay">
  This site uses cookies to offer you a better browsing experience.
  <button on="tap:my-notification.dismiss" class="cookie1 button">I accept</button>
</amp-user-notification>
@endslot
@endcomponent
