{{-- \resources\views\themes\index.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Pages')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pages</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<div class="col-lg-12">
    <h1><i class="fa fa-themeisle"></i> Pages Administration </h1>
    <hr>
    <div>
  
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">

            <thead>
  <tr>
  <th>Sr. No</th>
  <th>ID</th>
   <th>Title</th>
   <th>Edit</th>
   <th>Delete</th>
  </tr>
 </thead>
           <tbody>
                @foreach ($pages as $pageId=>$page)
                <tr>
                    <td>{{$pageId}} </td>
                    <td> {{$page->id}}</td>

                    
                    <td>{{ $page->title }}</td>
                   <td>
                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
</td><td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['pages.destroy', $page->id], 'onsubmit'=>'return confirm(\'Are you sure !!\')' ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('pages.create') }}" class="btn btn-success">Add new page</a>

</div>

@endsection