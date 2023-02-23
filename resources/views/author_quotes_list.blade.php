@extends('layouts.app')
@section('content')
<author-quotes id="{{$authorID}}" page="{{$page}}" baseurl="{{ env('APP_URL') }}"></author-quotes>
@endsection