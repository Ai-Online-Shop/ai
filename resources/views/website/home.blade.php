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
<style amp-custom>
body{
  font-family: 'Roboto', sans-serif;
}
.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;  /* Preferred icon size */
  display: inline-block;
  line-height: 1;
  text-transform: none;
  letter-spacing: normal;
  word-wrap: normal;
  white-space: nowrap;
  direction: ltr;

  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
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
  width:50px;
  height: 50px;
  background-color: #fd345a;
  border-radius: 50%;
  box-shadow: 0 14px 28px rgba(235,94,135,0.30), 0 10px 8px rgba(235,94,135,0.22);
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
  margin: 25px 0 25px 0;
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
  font-weight: 500;
}
.mback{
  vertical-align: text-bottom;
  color: #222;
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
  margin-top: -2px;
  font-size: 14px;
  font-weight: 400;
  color: #a5acb4;
  padding-left: 8px;
  padding-bottom: 2px;
  border-left: 2px solid #a5acb4;
}
.blog-picture{
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0,0,0,0.30), 0 10px 8px rgba(0,0,0,0.22);
}

@media (min-width: 576px){
  .header-text{
    font-size: 32px;
  }

}

@media (min-width: 768px){
  .header-text{
    font-size: 35px;
  }
}

@media (min-width: 1024px){
  .header-text{
    font-size: 40px;
  }
}

@media (min-width: 1200px){


}
</style>

@endslot

@slot('content')
<div class="container">
    <h2 class="m10">Something big is coming soon! Stay tuned...</h2>
    
</div>
@endslot
@endcomponent
