{{-- \resources\views\users\edit.blade.php --}}

@extends('admin.layouts.app')

@section('title', '| Edit User')

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
              <li class="breadcrumb-item"><a href="/pages">Stations</a></li>
              <li class="breadcrumb-item active">edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class='col-lg-10 col-lg-offset-1'>

    <h1><i class='fa fa-user-plus'></i> Edit </h1>
    <hr>

    {{ Form::model($stations, array('route' => array('stations.update', $stations->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $stations->title, array('class' => 'form-control')) }}
    </div>

    
  <?php 
    if($stations->isactive == "1")
    {
     ?>
          <div class="form-group">
           {{ Form::label('isactive', 'is_active') }}
            {{Form::checkbox('isactive', true, true)}}
          </div>
    <?php
     }else{ ?>
     <div class="form-group">
            {{ Form::label('isactive', 'is_active') }}
            {{Form::checkbox('isactive')}}
            </div>    
    <?php
     }
    ?>
  

    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection