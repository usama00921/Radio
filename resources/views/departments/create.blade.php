{{-- \resources\views\users\create.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Add User')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Stations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pages">Departments</a></li>
              <li class="breadcrumb-item active">create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class='col-lg-12 col-lg-offset-1'>

    <h1><i class='fa fa-user-plus'></i> Add Department</h1>
    <hr>

    {{ Form::open(array('url' => 'admin/departments')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('department type', 'Department Type') }}
        {{ Form::text('type', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
    {{ Form::label('select_stations', 'Select Station') }}
    {{ Form::select('station', $stations, null, array('class' => 'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('isactive', 'is_active') }}
        {{Form::checkbox('isactive', true, true)}}
    </div>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>

@endsection