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
    <h1><i class="fa fa-users"></i> Departments Administration </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Station</th>
                    <th>Departments Type</th>
                    <th>is_active</th>
                    <th>Date/Time Added</th>
                    
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($departments as $department)
                <tr>
                <td>{{ $department->id }}</d>
                
                    <td>{{ $department->title }}</td>
                    <td>{{ $department->station->title }}</td>
                    <td>{{ $department->type }}</td>
                    
                    
                    
                    <td><?php if(!empty($department->is_active)){ 
                      echo "Active";}
                      else {
                        echo "Not active";
                      }?>


                    <td>{{ $department->created_at->format('F d, Y h:ia') }}</td>
                    <td><a href="{{ route('departments.edit', $department->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                    
                    {!! Form::open(['method' => 'DELETE', 'route' => ['departments.destroy', $department->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('departments.create') }}" class="btn btn-success">Add new Station</a>

</div>

@endsection