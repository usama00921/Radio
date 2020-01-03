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
    <h1><i class="fa fa-users"></i> Stations administration </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    
                    <th>Station</th>
                    
                    <th>is_active</th>
                    <th>Date/Time Added</th>
                    
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($stations as $station)
                <tr>

                    
                    <td>{{ $station->title }}</td>
                    
                    
                    
                    <td><?php if(!empty($station->is_active)){ 
                      echo "Active";}
                      else {
                        echo "Not active";
                      }?>


                    <td>{{ $station->created_at->format('F d, Y h:ia') }}</td>
                    <td><a href="{{ route('stations.edit', $station->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                    <a href="{{ route('stationhead.show', $station->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Manage Heads</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['stations.destroy', $station->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('stations.create') }}" class="btn btn-success">Add new Station</a>

</div>

@endsection