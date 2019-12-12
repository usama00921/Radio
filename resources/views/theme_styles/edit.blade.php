{{-- \resources\views\theme_styles\edit.blade.php --}}

@extends('admin.layouts.app')

@section('title', '| Edit Themes Styles')

@section('content')

<div class='col-lg-8 col-lg-offset-1'>

    <h1><i class='fa fa-themeisle'></i> Edit Theme Style</h1>
    <hr>

    {{ Form::model($theme_style, array('route' => array('theme_styles.update', $theme_style->id), 'method' => 'PUT')) }}
    {{-- Form model binding to automatically populate our fields with user data --}}


     <div class="form-group">
        {{ Form::label('lblTitle', 'Theme') }}
        {{ Form::select('lsttheme', $themes, $theme_style->fkThemeId, ['class' => 'form-control']) }}
    </div>
   <div class="form-group">
        {{ Form::label('lblTitle', 'Styles') }}
        {{ Form::select('lstStyles', $styles, $theme_style->fkStyleId, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('lblContent', 'Content') }}
        {{ Form::textarea('txtContent', $theme_style->StyleContents, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection