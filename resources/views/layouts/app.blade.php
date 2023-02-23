<!DOCTYPE html>

<html lang="en">
 @php ob_start(); @endphp
 <head>

   @include('layouts.partials.head')

 </head>

 <body>

    <div id="app">
    @include('layouts.partials.nav')

    @yield('content')

    @include('layouts.partials.footer')
    
    </div>
    @include('layouts.partials.footer-scripts')   
 </body>
 
</html>