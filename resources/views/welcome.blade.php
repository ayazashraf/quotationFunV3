@extends('layouts.app')
@section('content')

<div class="navbar navbar-expand-sm nav-header p-0 m-0 letters-div d-md-block d-none" style="height: 50px;z-index: 99;">
  <div class="container letters  mt-2" style="justify-content: center;">
    <span>       
      <span>Authors:</span>
      <span>
        <a href="/authors/a">A</a>
        <a href="/authors/b">B</a>
        <a href="/authors/c">C</a>
        <a href="/authors/d">D</a>
        <a href="/authors/e">E</a>
        <a href="/authors/f">F</a>
        <a href="/authors/g">G</a>
        <a href="/authors/h">H</a>
        <a href="/authors/i">I</a>
        <a href="/authors/j">J</a>
        <a href="/authors/k">K</a>
        <a href="/authors/l">L</a>
        <a href="/authors/m">M</a>
      </span>
      <span>
      <a href="/authors/n">N</a>
      <a href="/authors/o">O</a>
      <a href="/authors/p">P</a>
      <a href="/authors/q">Q</a>
      <a href="/authors/r">R</a>
      <a href="/authors/s">S</a>
      <a href="/authors/t">T</a>
      <a href="/authors/u">U</a>
      <a href="/authors/v">V</a>
      <a href="/authors/w">W</a>
      <a href="/authors/x">X</a>
      <a href="/authors/y">Y</a>
      <a href="/authors/z">Z</a>
      </span>
    </span>    
  </div>
</div>

<search-auto-complete></search-auto-complete>

<div class="row m-1 home-popular-row">
    <div class="col-sm-12 col-md-12 col-lg-3" style="z-index:10">    
      <authors-birthdays></authors-birthdays>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6" style="z-index:10">    
      <div class="card boxshadow card-padding">        
        <div class="card-body card-padding">
          <div class="row">
            <div class="col-sm-12 col-md-4">    
              <popular-topics></popular-topics>
            </div>
          
            <div class="col-sm-12 col-md-4">   
              <popular-authors></popular-authors> 
            </div>
          
            <div class="col-sm-12 col-md-4">    
              <authors-in-news></authors-in-news>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <div class="col-sm-12 col-md-12 col-lg-3" style="z-index:10"> 
    <authors-anniversaries></authors-anniversaries>
    </div>
</div>

<div class="row m-3">
    <div class="col-sm-12 col-md-12 col-lg-12" style="z-index:10">    
      <div class="card boxshadow">        
        <div class="card-header">                
            <h5 class="card-title card-title-home">Picture Quotes - Share our beautiful quote pictures on <a href="http://www.facebook.com/quotationfun/">Facebook</a>, <a href="http://www.twitter.com/quotationfun/">Twitter</a>, and <a href="http://www.pinterest.com/quotationfun/">Pinterest</a>. <a href="/quote_pictures">More picture quotes →</a></h5>
        </div>
          <div class="card-body">      
            <home-picture-quotes></home-picture-quotes>
          </div>
      </div>
    </div>
</div>

<div class="row m-3">
    <div class="col-sm-12 col-md-12 col-lg-12" style="z-index:10">    
      <div class="card boxshadow">        
        <div class="card-header">                
            <h4 class="card-title card-title-home"><strong>Explore Authors</strong></h4>
        </div>
          <div class="card-body">      
            <authors-explore></authors-explore>
          </div>
      </div>
    </div>
</div>

@endsection