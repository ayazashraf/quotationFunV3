<!-- START Footer -->
<footer class="site-footer mt-2">
@php $image_path = url('/')."assets/img/icons/social/"; @endphp
  <div class="container-fluid" style="max-width: 900px">
    <div class="row">
      <div class="col-sm-3 col-md-3 col-xs-12">
        <div style="mt-2">          
          <a rel="nofollow" class="navbar-brand" href="/" aria-label="QuotationFun.com"><img src="/public/images/logo.webp" class="img-responsive logo_sm" alt="Logo Small"></a>
        </div>        
        <div>
          <ul class="footer-nav list-inline">
                <li class="list-inline-item">
                    <a href="http://www.facebook.com/quotationfun/">
                      <img src="/public/images/facebook.webp" alt="QuotationFun Facebook">
                    </a>
                </li>
                <li  class="list-inline-item">
                    <a href="http://www.pinterest.com/quotationfun/">
                    <img src="/public/images/pinterest.webp" alt="QuotationFun Pinterest">
                    </a>
                </li>
                <li  class="list-inline-item">
                    <a href="http://www.twitter.com/quotationfun/">
                    <img src="/public/images/twitter.webp" alt="QuotationFun Twitter">
                    </a>
                </li>            
            </ul>
          <div style="clear:both"></div>
        </div>
      </div>

        
      <div class="col-sm-2 col-md-2 col-xs-12 mt-3" style="text-align:left;color:white;">        
        <h3>Site</h3>
        <div class="text-upercase mt-3"><a href="/"  style="color: white;">Home</a></div>
        <div class="text-upercase mt-3"><a href="{{route('authors')}}" style="color: white;">Authors</a></div>
        <div class="text-upercase mt-3"><a href="{{route('topics')}}"  style="color: white;">Topics</a></div>                
        <div class="text-upercase mt-3"><a href="{{route('today.quote')}}" style="color: white;">Quote Of The Day</a></div>           
        <div class="text-upercase mt-3"><a href="{{route('quote.picture')}}" style="color: white;">Pictures</a></div>                   
        <div class="text-upercase mt-3"><a href="{{route('top.100.quotes')}}" style="color: white;">Top 100 Quotes</a></div>              
        <div class="text-upercase mt-3"><a href="{{route('author.birthdays')}}" style="color: white;">Birthdays</a></div>         
        <div class="text-upercase mt-3"><a href="{{route('quotes.videos')}}"  style="color: white;">Videos</a></div>        
      </div>
      <div class="col-sm-2 col-md-2 col-xs-12 mt-3" style="text-align:left;color:white;">        
        <h3>About</h3>
        <div class="text-upercase mt-3"><a href="{{route('about.home')}}" style="font-size: 0.9rem;color: white;">About Us</a></div>
        <div class="text-upercase mt-3"><a  href="{{route('about.contact')}}" style="font-size: 0.9rem;color: white;">Contact Us</a></div>
        <div class="text-upercase mt-3"><a  href="{{route('about.submit')}}"  style="color: white;">Submit</a></div>     
        <div class="text-upercase mt-3"><a href="{{route('about.privacy')}}" style="font-size: 0.9rem;color: white;">Privacy</a></div>
        <div class="text-upercase mt-3"><a href="{{route('about.faqs')}}" style="font-size: 0.9rem;color: white;">FAQs</a></div>
        </div>      
    </div>
  </div>


  <!-- START Footer container-->
  <div class="container  d-flex justify-content-center">
    
    <!-- Footer Links -->
    <div class="row">
        <div class="col-sm-12 col-md-12 text-center" style="margin-top: 10px; color:white;">          
           <h6 class="col-lg-12">QuotationFun.com and respective copyright owners.
           <br>
           This site is dedicated to the memory of the late, great,<br>Suzanne Olson-Hyde. You are sorely missed!
           </h6>
           <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick" />
            <input type="hidden" name="hosted_button_id" value="NFQW7BP4UKD5A" />
            <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_SM.gif" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
            <img alt="" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1" alt="Donate" />
        </form>
        </div>
    </div>
    <!-- END Footer Links -->
    
  </div>
  <!-- END Footer container-->
  
</footer>
<!-- END Footer -->