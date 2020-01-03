{{-- \resources\views\themes\index.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Heads')

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
    <h1><i class="fa fa-themeisle"></i> Heads  </h1>
    <hr>
    <div>
  
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">

            <thead>
  <tr>
  <th>ID</th>
  <th>Parent Head</th>
   <th>Title</th>
   <th>is_active</th>
   <th>Edit</th>

   <th>Delete</th>
  </tr>
 </thead>
           <tbody>
                @foreach ($heads as $head)
                <tr>
                <td> {{$head->id}}</td>
                    <td>{{$head->head_id}} </td>
                    

                    
                    <td>{{ $head->title }}</td>
                    <td><?php if(!empty($head->is_active)){ 
                      echo "Active";}
                      else {
                        echo "Not active";
                      }?></td>
                   
                   <td>
                    <a href="{{ route('heads.edit', $head->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
</td><td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['heads.destroy', $head->id], 'onsubmit'=>'return confirm(\'Are you sure !!\')' ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('heads.create') }}" class="btn btn-success">Add new Head</a>

</div>

@endsection