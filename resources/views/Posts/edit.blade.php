{{-- \resources\views\users\edit.blade.php --}}

@extends('admin.layouts.app')

@section('title', '| Edit User')

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
              <li class="breadcrumb-item"><a href="/pages">Posts</a></li>
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

    {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with usposter data --}}

    <div class="form-group">
        {{ Form::label('title', 'Enter Post title') }}
        {{ Form::text('title', $post->title, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
    {{ Form::label('Group', 'Enter PBC Group') }}
      <select name='group' class='form-control'>
          
          <option value="1" <?php if($post->group=="1") echo "selected"; ?>>1</option>
          <option value="2" <?php if($post->group=="2") echo "selected"; ?>>2</option>
          <option value="3" <?php if($post->group=="3") echo "selected"; ?>>3</option>
          <option value="4" <?php if($post->group=="4") echo "selected"; ?>>4</option>
          <option value="5" <?php if($post->group=="5") echo "selected"; ?>>5</option>
          <option value="6" <?php if($post->group=="6") echo "selected"; ?>>6</option>
          <option value="7" <?php if($post->group=="7") echo "selected"; ?>>7</option>
          <option value="8" <?php if($post->group=="8") echo "selected"; ?>>8</option>
          <option value="9" <?php if($post->group=="9") echo "selected"; ?>>9</option>
          <option value="M-I"<?php if($post->group=="M-I") echo "selected"; ?>>M-I</option>
          <option value="M-II"<?php if($post->group=="M-II") echo "selected"; ?>>M-II</option>
          <option value="M-III"<?php if($post->group=="M-II") echo "selected"; ?>>M-III</option>
      </select>
    </div>


    <div class="form-group">
    {{ Form::label('type', 'Enter post type') }}
      <select name='type' class='form-control'>
          
          <option value="Ex-Cader" <?php if($post->type=="Ex-Cader") echo "selected"; ?>>Ex-Cader</option>
          <option value="Cader" <?php if($post->type=="Cader") echo "selected"; ?>>Cader</option>  
      </select>
    </div>

    
  <?php 
    if($post->is_active == "1")
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