@extends('layouts.app')
@section('content')

<div class="navbar navbar-expand-sm nav-header p-0 m-0 letters-div d-md-block d-none" style="height: 50px;z-index: 99;">
  <div class="container letters  mt-2" style="justify-content: center;">
    <span>       
      <span>Author Quotes</span>      
    </span>    
  </div>
</div>
<div class="">
  <div class="row mt-5 no-gutters">
  <div class="card-columns p-2">
    @foreach($quotes as $quote)
      
        <div class="card">
          <div class="card-body d-flex flex-column">
            <blockquote class="quote-card">
              <p class="text-justify">
              {{$quote->Quote}}
              </p>
        
              <cite class="d-flex justify-content-center">
                 {{$author->fullnameDisplay}}
              </cite>
            </blockquote>
            <div class="mt-auto">
              <div class="d-flex justify-content-center align-items-center">
                <a href="/share/fb/{{$quote->}}" class="mx-2" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                <a href="/share/tw/211092?ti=Albert+Einstein+Quotes+Page+7" class="mx-2" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a>            
              </div>
            </div>
          </div>
          <div class="card-footer">                      
            <div class="d-flex justify-content-center">     
              @php 
                $topics = explode(",",$quote->topics);
                $count = 0; 
              @endphp
                @foreach($topics as $topic)
                  @if($count < 5 && strlen($topic)>3)
                  <button type="button" class="btn btn-outline-info btn-sm mx-1 hand-pointer">{{$topic}}</button>                
                  @endif
                  @php $count++; @endphp
                @endforeach
            </div>
          </div>
        </div>              
    @endforeach  
    </div>          
  </div>
  <div class="d-flex justify-content-center align-items-center">
    {{ $quotes->links()}}
  </div>
</div>
<style>
.box-style 
{
  border: 1px solid #c9c9c9;;
}
.hand-pointer 
{
  cursor: pointer;
}
</style>
@endsection
