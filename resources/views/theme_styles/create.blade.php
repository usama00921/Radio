{{-- \resources\views\theme_styles\create.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Create New Theme Style')

@section('content')

<div class='col-lg-10 col-lg-offset-1'>

    <h1><i class='fa fa-themeisle'></i> Create Theme Style</h1>
    <hr>
    
    {{ Form::open(array('url' => 'theme_styles')) }}

    
    <div class="form-group">
        {{ Form::label('lblTitle', 'Theme') }}
        {{ Form::select('lsttheme', $themes, null, ['class' => 'form-control']) }}
    </div>
   <div class="form-group">
        {{ Form::label('lblTitle', 'Styles') }}
        {{ Form::select('lstStyles', $styles, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('lblContent', 'Content') }}
        {{ Form::textarea('txtContent', '', array('class' => 'form-control')) }}
    </div>

     

    

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection