<nav class="navbar navbar-expand-sm nav-header py-0 my-0">
    <a rel="nofollow" href="/" aria-label="QuotationFun.com">    
      <img src="../public/images/logo.webp" class="img-responsive logo_sm" alt="Logo Small">	
    </a>
       <!-- Toggler/collapsibe Button -->    
   <ul class="navbar-collapse pl-0 my-0 d-none d-md-block" id="collapsibleNavbar" style="list-style:none;">  
    <li class="nav-item"> <!-- Home Menu -->
      <a id="aHome" href="/" class="nav-link nav-link-header">Home</a>
    </li>
    <li class="nav-item">
      <a id="aAuthors" href="{{route('authors')}}" class="nav-link nav-link-header">Authors</a>
    </li>
    <li class="nav-item">
      <a  id="aTopics" href="{{route('topics')}}" class="nav-link nav-link-header">Topics</a>
    </li>
    <li class="nav-item">      
      <a href="{{route('today.quote')}}" class="nav-link nav-link-header">Quote Of The Day</a>
    </li>        
    <li class="nav-item">
      <a id="aPictures" href="{{route('quote.picture')}}" class="nav-link nav-link-header">Pictures</a>
    </li>    
    <li class="nav-item">
      <a  id="avideos" href="{{route('quotes.videos')}}" class="nav-link nav-link-header">Videos</a>
    </li>      
  </ul>
  <div class="btn-group p-0 pr-3 ml-auto">
      <a class="" href="#" id="usermenu" data-toggle="dropdown" aria-label="User Menu">
        @if(isset($this->session->user_id))           
        <span class="material-icons nav-link-header">person_pin</span>
        @else
        <span class="material-icons nav-link-header">person</span>
        @endif
      </a>
      <div class="dropdown-menu nav-header dropdown-menu-right" aria-labelledby="usermenu">      
      <ul class="pl-2" style="color: white;list-style:none;">            
     <!-- START Logged in user name Menu -->
     @php  if(isset($this->session->user_id)) : @endphp           
            
      <li class="mt-3"><a  rel="nofollow" id="ausername" href="Javascript:void(0)"  class="dropdown-item">@php $this->session->user_name@endphp   <i class="fa fa-user" style="color:white;"></i>
            </a></li>
             
               
            <li class="mt-3"><a  rel="nofollow" href="@php url('User_profile/Edit/')@endphp @php $this->session->userdata('user_id');@endphp " class="dropdown-item" style="color:white;">Edit User Profile
                </a></li>
              
              
                <li class="mt-3"><a class="mt-3" rel="nofollow" href="@php url('change_pw')@endphp " class="dropdown-item" style="color:white;">Change Password
                </a></li>
              
                <li class="mt-3"><a class="mt-3" rel="nofollow" href="@php url('Settings')@endphp " class="dropdown-item" style="color:white;">Settings&emsp;&emsp;&emsp;
                </a></li>
            @php  if($this->session->userdata('user_type')==1 || $this->session->userdata('user_type')==2){@endphp             
                
              <li class="mt-3"><a class="mt-3" rel="nofollow" href="@php url('admin/AuthorsAndQuotes')@endphp " class="dropdown-item" style="color:white;">Admin&emsp;&emsp;&emsp;
                </a></li>
                     
              @php  }@endphp 
               
              <li class="mt-3"><a class="mt-3" rel="nofollow" href="@php url('home/logout')@endphp " class="dropdown-item" style="color:white;">Logout
                </a></li>
                        
             
          
        @php  else: @endphp 
          <!-- START Sign up Menu -->
         
          <li class="mt-3"><a class="mt-3" rel="nofollow" href="/register" class="dropdown-item" style="color:white;">Sign up
            </a> </li>       
        
          <!-- END Sign up Menu -->
          
          <!-- START Login Menu -->
          
          <li class="mt-3"><a class="mt-3" rel="nofollow" href="/login" class="dropdown-item" style="color:white;">Log in</a></li>
          
          <!-- END Sign up Menu -->
        
        @php  endif @endphp 
        <!-- END Logged in user name Menu -->
        </div>      
    </div>
  <div class="btn-group">
    <a href="#" id="sitemenu" data-toggle="dropdown" aria-label="Site Menu" >
      <span class="material-icons nav-link-header">menu</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right nav-header dropdown-site-menu" aria-labelledby="sitemenu">
      <div class="row">
          <div class="col-md-6">
              <div class="pl-2">    
                    <h5 class="card-title card-title-home">SITE</h5>
              </div>
              <ul class="pl-2" style="color: white;list-style:none;">
                <li class="mt-3"><a href="{{route('authors')}}" class="card-link" style="font-size: 0.9rem;color: white;">Authors</a></li>
                <li  class="mt-3"><a href="{{route('topics')}}" class="card-link" style="font-size: 0.9rem;color: white;">Topics</a></li>                
                <div class="mt-3"><a href="{{route('today.quote')}}" class="card-link" style="font-size: 0.9rem;color: white;">Quote Of The Day</a></div>           
                <li class="mt-3"><a href="{{route('quote.picture')}}" class="card-link" style="font-size: 0.9rem;color: white;">Pictures</a></li>
                <div class="mt-3"><a href="{{route('top.100.quotes')}}" class="card-link" style="font-size: 0.9rem;color: white;">Top 100 Quotes</a></div>             
                <li class="mt-3"><a class="card-link" href="{{route('author.birthdays')}}" style="font-size: 0.9rem;color: white;">Birthdays</a></li>								
                <li class="mt-3"><a href="{{route('quotes.videos')}}" class="card-link" style="font-size: 0.9rem;color: white;">Videos</a></li>
              </ul>
          </div>
          <div class="col-md-6">          
              <div class="pl-2">    
                  <h5 class="card-title card-title-home">ABOUT</h5>
              </div>
              <ul class="pl-2" style="color: white;list-style:none;">
                <li class="mt-3"><a href="{{route('about.home')}}" style="font-size: 0.9rem;color: white;">About Us</a></li>
                <li class="mt-3"><a  href="{{route('about.contact')}}" style="font-size: 0.9rem;color: white;">Contact Us</a></li>
                <li class="mt-3"><a  href="{{route('about.submit')}}"  style="color: white;">Submit</a></li>     
                <li class="mt-3"><a href="{{route('about.privacy')}}" style="font-size: 0.9rem;color: white;">Privacy</a></li>
                <li class="mt-3"><a href="{{route('about.faqs')}}" style="font-size: 0.9rem;color: white;">FAQs</a></li>
              </ul>
          </div>
      </div>           
      <div class="row">
        <h6 class="col-md-12 pl-4" style="font-size: 0.9rem;">@ @php date('Y');@endphp  QuotationFun.com and respective copyright owners.
      </div> 
    </div>
  </div>
  
  <ul class="navbar pl-0 my-0 d-md-none d-lg-none d-xl-none d-sm-block" style="list-style-type: none;/* background-color: white; *//* color: blue; */font-size: 0.9rem;">      
    <li class="nav-item" style="width: 15%;">
      <a href="{{route('authors')}}" class="nav-link nav-link-header" style="font-size: 0.9rem;">Authors</a>
    </li>
    <li class="nav-item" style="width: 15%;">
      <a href="{{route('topics')}}" class="nav-link nav-link-header" style="font-size: 0.9rem;">Topics</a>
    </li>
    <li class="nav-item" style="width: 55%;">
      <a href="{{route('today.quote')}}" class="nav-link nav-link-header">Quote Of The Day</a>
    </li>
    <li class="nav-item" style="width: 15%;">
      <a href="{{route('quote.picture')}}" class="nav-link nav-link-header" style="font-size: 0.9rem;">Pictures</a>
    </li>   
  </ul>
</nav>