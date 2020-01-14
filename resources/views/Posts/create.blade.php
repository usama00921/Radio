{{-- \resources\views\users\create.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Add User')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pages">Post</a></li>
              <li class="breadcrumb-item active">create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class='col-lg-10 col-lg-offset-1'>

    <h1><i class='fa fa-user-plus'></i> Add Post</h1>
    <hr>

    {{ Form::open(array('url' => 'admin/posts')) }}

    <div class="form-group">
        {{ Form::label('title', 'Enter Post title') }}
        {{ Form::text('title', '', array('class' => 'form-control')) }}
    </div>

    

    <div class="form-group">
    {{ Form::label('Group', 'Enter PBC Group') }}
      <select name='group' class='form-control'>
          
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="M-I">M-I</option>
          <option value="M-II">M-II</option>
          <option value="M-III">M-III</option>
      </select>
    </div>

    <div class="form-group">
    {{ Form::label('type', 'Enter post type') }}
      <select name='type' class='form-control'>
          
          <option value="Ex-Cader">Ex-Cader</option>
          <option value="Cader">Cader</option>  
      </select>
    </div>

    <div class="form-group">
        {{ Form::label('isactive', 'is_active') }}
        {{Form::checkbox('isactive', true, true)}}
    </div>
    {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>

@endsection