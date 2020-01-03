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
              <li class="breadcrumb-item"><a href="/pages">Head</a></li>
              <li class="breadcrumb-item active">edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class='col-lg-10 col-lg-offset-1'>

    <h1><i class='fa fa-themeisle'></i> Update Section Head</h1>
    <hr>

    {{ Form::open(array('route' => array('heads.update', $heads->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $heads->title, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('parent', 'Parant Name') }}
        {{ Form::select('lstStyles', $heads_name, $heads->head_id , ['class' => 'form-control']) }}
    </div>
  <?php 
    if($heads->isactive == "1")
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

    

    {{ Form::submit('update', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection