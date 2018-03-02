<!-- Corporate footer-->
<footer class="section-40 page-footer bg-catskill" style="background-color:#7f0909;">
  <div class="shell">
    <div class="range range-xs-center range-sm-middle text-md-left">
      <div class="cell-xs-10 cell-md-6">
        <!--Footer brand-->
        <a href="{{ route('edu_home') }}" class="reveal-inline-block">
          <div class="unit unit-xs-middle unit-md unit-md-horizontal unit-spacing-xxs">
            <div class="unit-left">
              <img src="{{asset('images/Logo-white.png')}}" width="70" height="70" alt="" class="img-responsive reveal-inline-block">
            </div>
            <div class="unit-body text-xl-left">
              <div>
                <h6 class="barnd-name text-ubold" style="color:white;">{{ config('app.name') }}</h6>
              </div>
            </div>
          </div></a>
      </div>
      <div class="cell-xs-10 cell-md-6 text-md-right offset-top-20 offset-md-top-0">
        <p class="text-dark" style="color:white;">&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a href="#" class="text-dark">Privacy Policy</a></p>
      </div>
      <!-- {%FOOTER_LINK}-->
    </div>
  </div>
</footer>
</div>
<!-- Global Mailform Output-->
<div id="form-output-global" class="snackbars"></div>
<!-- PhotoSwipe Gallery-->
<div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
<div class="pswp__bg"></div>
<div class="pswp__scroll-wrap">
  <div class="pswp__container">
    <div class="pswp__item"></div>
    <div class="pswp__item"></div>
    <div class="pswp__item"></div>
  </div>
  <div class="pswp__ui pswp__ui--hidden">
    <div class="pswp__top-bar">
      <div class="pswp__counter"></div>
      <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
      <button title="Share" class="pswp__button pswp__button--share"></button>
      <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
      <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
      <div class="pswp__preloader">
        <div class="pswp__preloader__icn">
          <div class="pswp__preloader__cut">
            <div class="pswp__preloader__donut"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
      <div class="pswp__share-tooltip"></div>
    </div>
    <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
    <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
    <div class="pswp__caption">
      <div class="pswp__caption__center"></div>
    </div>
  </div>
</div>
</div>
<!-- Java script-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7078796-5']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();</script>
<script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>
