{{-- \resources\views\themes\create.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Create New Page')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pages">Section Head</a></li>
              <li class="breadcrumb-item active">create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class='col-lg-10 col-lg-offset-1'>

    <h1><i class='fa fa-themeisle'></i> Create Section Head</h1>
    <hr>

    {{ Form::open(array('url' => 'admin/heads')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
    {{ Form::hidden('lstStyles', $parentid) }}
        {{ Form::label('isactive', 'is_active') }}
        {{Form::checkbox('isactive', true, true)}}
    </div>
    

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection