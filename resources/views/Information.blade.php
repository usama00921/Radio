@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pages">Information</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class='col-lg-10 col-lg-offset-1'>

    <h1><i class='fa fa-user-plus'></i> Add Website Information</h1>
    <hr>

    {{ Form::open(array('url' => '/admin/submit')) }}


    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        
        {{ Form::email('email', "$user->Email", array('class' => 'form-control')) }}
    </div>

    

    <div class="form-group">
        {{ Form::label('Phone_num', 'Phone_num') }}
        {{ Form::text('Phone_num', "$user->Phone_num", array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Address', 'Address') }}
        {{ Form::textarea('Address', "$user->Address", array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Fb_link', 'Fb_link') }}
        {{ Form::text('Fb_link', "$user->Fb_link", array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Twitter_link', 'Twitter_link') }}
        {{ Form::text('Twitter_link', "$user->Twitter_link", array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Gmail_link', 'Gmail_link') }}
        {{ Form::text('Gmail_link', "$user->Gmail_link", array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Linked_in', 'Linked_in') }}
        {{ Form::text('Linked_in', "$user->Linked_in", array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Internet_link', 'Internet_link') }}
        {{ Form::text('Internet_link', "$user->Internet_link", array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection