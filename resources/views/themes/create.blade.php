{{-- \resources\views\themes\create.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Create New Theme')

@section('content')

<div class='col-lg-10 col-lg-offset-1'>

    <h1><i class='fa fa-themeisle'></i> Create Theme</h1>
    <hr>

    {{ Form::open(array('url' => 'admin/themes')) }}

     <div class="form-group">
        {{ Form::label('lblTitle', 'Title') }}
        {{ Form::text('txtTitle', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('lblContent', 'Content') }}
        {{ Form::textarea('txtContent', '', array('class' => 'form-control')) }}
        
    </div>

   

    

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection