{{-- \resources\views\themes\edit.blade.php --}}

@extends('admin.layouts.app')

@section('title', '| Edit Themes')

@section('content')

<div class='col-lg-10 col-lg-offset-1'>

    <h1><i class='fa fa-themeisle'></i> Edit " {{$theme->title}} "</h1>
    <hr>

    {{ Form::model($theme, array('route' => array('themes.update', $theme->id), 'method' => 'PUT')) }}
    {{-- Form model binding to automatically populate our fields with user data --}}


     <div class="form-group">
        {{ Form::label('lblTitle', 'Title') }}
        {{ Form::text('txtTitle', $theme->title, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('lblContent', 'Content') }}
        {{ Form::textarea('txtContent', $theme->content, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection