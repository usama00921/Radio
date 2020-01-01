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
    <h1><i class="fa fa-themeisle"></i> Station_Head  </h1>
    <hr>

    <div class="form-group">
        {{ Form::label('Heads', 'Select Heads') }}
        {{ Form::select('heads', $sectionheads, $sectionheads->sectionhead_id, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('parent', 'Select Stations') }}
        {{ Form::select('stations', $station, $stations->station_id, ['class' => 'form-control']) }}
    </div>
    <div>
  
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">

            <thead>
  <tr>
  <th>Station_head ID</th>
  <th>Station ID</th>
   <th>Head Id</th>
   <th>is_active</th>
   
  </tr>
 </thead>
           <tbody>
                
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td> </td>
                </tr>
                
            </tbody>

        </table>
    </div>

    <a href="{{ route('sectionheads.create') }}" class="btn btn-success">Add new page</a>

</div>

@endsection