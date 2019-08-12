@component('layouts.website')
@slot('seo')
    <title>{{ __('website.80') }} | Ai-Online-Shop.com</title>
    <meta name="description" content="At Ai-Online-Shop, accessible from https://ai-online-shop.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Ai-Online-Shop and how we use it">
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
      <amp-img alt="{{ __('website.80') }} Ai-Online-Shop.com" class="mobile layer-black" layout="responsive" srcset="
      {{ asset('assets/img/legal/impressum-1/200.webp') }} 200w,
      {{ asset('assets/img/legal/impressum-1/495.webp') }} 495w,
      {{ asset('assets/img/legal/impressum-1/689.webp') }} 689w,
      {{ asset('assets/img/legal/impressum-1/881.webp') }} 881w,
      {{ asset('assets/img/legal/impressum-1/1000.webp') }} 1000w" src="{{ asset('assets/img/legal/impressum-1/1000.webp') }}" height="1298" width="1000">
    <amp-img fallback alt="{{ __('website.80') }} Ai-Online-Shop.com" class="mobile layer-black" layout="responsive" srcset="
    {{ asset('assets/img/legal/impressum-1/200.jpg') }} 200w,
    {{ asset('assets/img/legal/impressum-1/495.jpg') }} 495w,
    {{ asset('assets/img/legal/impressum-1/689.jpg') }} 689w,
    {{ asset('assets/img/legal/impressum-1/881.jpg') }} 881w,
    {{ asset('assets/img/legal/impressum-1/1000.jpg') }} 1000w" src="{{ asset('assets/img/legal/impressum-1/1000.jpg') }}" height="1298" width="1000">
    </amp-img>
    </amp-img>
    <amp-img alt="{{ __('website.80') }} Ai-Online-Shop.com" class="desktop layer-black" layout="responsive" srcset="
    {{ asset('assets/img/legal/impressum-2/200.webp') }} 200w,
    {{ asset('assets/img/legal/impressum-2/505.webp') }} 505w,
    {{ asset('assets/img/legal/impressum-2/705.webp') }} 705w,
    {{ asset('assets/img/legal/impressum-2/905.webp') }} 905w,
    {{ asset('assets/img/legal/impressum-2/1024.webp') }} 1024w" src="{{ asset('assets/img/legal/impressum-2/1024.webp') }}" height="512" width="1024">
    <amp-img fallback alt="{{ __('website.80') }} Ai-Online-Shop.com" class="desktop layer-black" layout="responsive" srcset="
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
    <h1 class="header-text">{{ __('website.80') }}</h1>
    </div>
  </div>
</div>
<div class="desktop-container">
  <div class="container-content">
    <p class="t-blog">At Ai-Online-Shop, accessible from https://ai-online-shop.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Ai-Online-Shop and how we use it.</p>

    <p class="t-blog">If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at ai.online.shop@gmail.com</p>

    <p class="t-blog">General Data Protection Regulation (GDPR)</p>

    <p class="t-blog">We are a Data Controller of your information.</p>

    <p class="t-blog">Ai-Online-Shop.com legal basis for collecting and using the personal information described in this Privacy Policy depends on the Personal Information we collect and the specific context in which we collect the information:</p>

    <p class="t-blog">Ai-Online-Shop.com needs to perform a contract with you</p>

    <p class="t-blog">You have given Ai-Online-Shop.com permission to do so</p>

    <p class="t-blog">Processing your personal information is in Ai-Online-Shop.com legitimate interests</p>

    <p class="t-blog">Ai-Online-Shop.com needs to comply with the law</p>

    <p class="t-blog">Ai-Online-Shop.com will retain your personal information only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your information to the extent necessary to comply with our legal obligations, resolve disputes, and enforce our policies. Our Privacy Policy was generated with the help of GDPR Privacy Policy Generator.</p>

    <p class="t-blog">If you are a resident of the European Economic Area (EEA), you have certain data protection rights. If you wish to be informed what Personal Information we hold about you and if you want it to be removed from our systems, please contact us.</p>

    <p class="t-blog">In certain circumstances, you have the following data protection rights:</p>

    <p class="t-blog">The right to access, update or to delete the information we have on you.</p>

    <p class="t-blog">The right of rectification.</p>

    <p class="t-blog">The right to object.</p>

    <p class="t-blog">The right of restriction.</p>

    <p class="t-blog">The right to data portability</p>

    <p class="t-blog">The right to withdraw consent</p>

    <p class="t-blog">Log Files</p>

    <p class="t-blog">Ai-Online-Shop follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

    <p class="t-blog">Cookies and Web Beacons</p>

    <p class="t-blog">Like any other website, Ai-Online-Shop uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information. You can find our seperate Cookie Policy here: <a href="{{ route('cookies_policy')}}" class="link">Our Cookie Policy</a></p>

    <p class="t-blog">Google DoubleClick DART Cookie</p>

    <p class="t-blog">Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – https://policies.google.com/technologies/ads</p>

    <p class="t-blog">Our Advertising Partners</p>

    <p class="t-blog">Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>

    <p class="t-blog">Google</p>

    <p class="t-blog">https://policies.google.com/technologies/ads</p>

    <p class="t-blog">Privacy Policies</p>

    <p class="t-blog">You may consult this list to find the Privacy Policy for each of the advertising partners of Ai-Online-Shop.</p>

    <p class="t-blog">Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Ai-Online-Shop, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

    <p class="t-blog">Note that Ai-Online-Shop has no access to or control over these cookies that are used by third-party advertisers.</p>

    <p class="t-blog">Third Party Privacy Policies</p>

    <p class="t-blog">Ai-Online-Shop's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p>

    <p class="t-blog">You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?</p>

    <p class="t-blog">Children's Information</p>

    <p class="t-blog">Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

    <p class="t-blog">Ai-Online-Shop does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

    <p class="t-blog">Online Privacy Policy Only</p>

    <p class="t-blog">Our Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Ai-Online-Shop. This policy is not applicable to any information collected offline or via channels other than this website.</p>

    <p class="t-blog">Consent</p>

    <p class="t-blog">By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
<h2 class="tabelofcontent"><strong>{{ __('website.7') }}</strong></h2>
<div class="content-navigation">
  <a class="contain-content-button" href="{{ route('impressum')}}">
    <div class="icon-content">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="black" d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    </div>
    <p class="content-button">{{ __('website.6')}}</p>
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
  </div>
</div>
@endslot
@endcomponent
