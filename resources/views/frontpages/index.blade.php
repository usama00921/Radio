 {{-- \resources\views\themes\index.blade.php --}}
@extends('frontpages.frontapp')
@section('title', '| Pages')
@section('content')
{!!$mytheme['content']!!}
@endsection

@section('social')
{!!$mytheme['social']!!}
@endsection