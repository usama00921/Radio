{{-- \resources\views\users\index.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Users')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Posts Administration </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Group</th>
                    <th>Post Type</th>
                    <th>is_active</th>
                    <th>Date/Time Added</th>
                    
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                <tr>
                <td>{{ $post->id }}</d>
                
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->group }}</td>
                    <td>{{ $post->type }}</td>
                    
                    
                    
                    <td><?php if(!empty($post->is_active)){ 
                      echo "Active";}
                      else {
                        echo "Not active";
                      }?>


                    <td>{{ $post->created_at->format('F d, Y h:ia') }}</td>
                    <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                    
                    {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('posts.create') }}" class="btn btn-success">Add new Post</a>

</div>

@endsection