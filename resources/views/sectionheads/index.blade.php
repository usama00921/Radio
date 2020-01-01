{{-- \resources\views\themes\index.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Sectionheads')

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


<div class="col-lg-12">
    <h1><i class="fa fa-themeisle"></i> Sectionheads  </h1>
    <hr>
    <div>
  
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">

            <thead>
  <tr>
  <th>ID</th>
  <th>Parent Head</th>
   <th>Title</th>
   <th>Edit</th>
   <th>Delete</th>
  </tr>
 </thead>
           <tbody>
                @foreach ($sectionheads as $sectionhead)
                <tr>
                <td> {{$sectionhead->id}}</td>
                    <td>{{$sectionhead->sectionhead_id}} </td>
                    

                    
                    <td>{{ $sectionhead->title }}</td>
                   <td>
                    <a href="{{ route('sectionheads.edit', $sectionhead->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
</td><td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['sectionheads.destroy', $sectionhead->id], 'onsubmit'=>'return confirm(\'Are you sure !!\')' ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('sectionheads.create') }}" class="btn btn-success">Add new page</a>

</div>

@endsection