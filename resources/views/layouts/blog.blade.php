<!doctype html>
<html ⚡ lang="{{ $language }}">
  <head>
    {{ $seo }}
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <link rel="canonical" href="{{ Request::url() }}">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    {{ $css}}
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <!-- Load amp-analytics -->
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-user-notification" src="https://cdn.ampproject.org/v0/amp-user-notification-0.1.js"></script>
    <script async custom-element="amp-animation" src="https://cdn.ampproject.org/v0/amp-animation-0.1.js"></script>
    <script async custom-element="amp-position-observer" src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js"></script>
  </head>
  <body>
    <!-- Configure analytics to use gtag -->
    <amp-analytics type="googleanalytics">
  <script type="application/json">
  {
    "vars": {
      "account": "UA-145122008-1"
    },
    "triggers": {
      "trackPageview": {
        "on": "visible",
        "request": "pageview"
      }
    }
  }
  </script>
</amp-analytics>
  {{ $content }}
  <amp-user-notification id="eu_cookie_consent"
  class="sample-notification"
  layout="nodisplay">
  <div class="flex">
    <div class="cell-1">
      <p>This site uses cookies to offer you a better browsing experience.
        Find out more on <a href="{{ route('cookies_policy') }}" class="link">how we use cookies and how you can change your settings.</a></p>
    </div>
    <div class="cell-2">
        <button on="tap:eu_cookie_consent.dismiss" class="cookie1 button">I accept</button>
    </div>
  </div>
</amp-user-notification>
    <div class="navigation">
    <div class="container-content">
    <h2 class="tabelofcontent"><strong>Sitemap</strong></h2>
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
        <p class="t-blog">© Ai-Online-Shop.com</p>
      </div>
      </div>
  </body>
</html>
