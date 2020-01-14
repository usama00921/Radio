{{-- \resources\views\roles\index.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Station Head')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-key"></i> {{$station->title}} Station</h1>

    
    
    <div class="form-group">
       <!--  {{ Form::label('Head', 'Head Name') }}  -->
<!--        
       foreach($headall as $head)
       {
        
       
       
           ?>
           <input type="checkbox" value=" echo $head->id; ?>">  echo $head->title; ?>
           
       }
       ?> -->
       {{ Form::open(array('url' => 'admin/stationhead')) }}
       <div class="form-group">
        {{ Form::label('isactive', 'Head Stations') }}
       {{ Form::select('lstchild[]', $heads, null, ['class' => 'form-control', 'onchange' => 'load($(this))']) }}
       </div>
       

       <div class="form-group" id="listchild">

       </div>

       <div class="form-group">
        {{ Form::label('isactive', 'is_active') }}
        {{Form::checkbox('isactive', true, true)}}
    </div>
       {{ Form::hidden('station_id', $id) }}
       
    {{ Form::submit('Map', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
    </div>
    

    @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
    
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Heads</th>
                    <th>is_active</th>
                    <th>Time stamp</th>
                    <th>Delete</th>
                </tr>
            </thead>
        {{ $id}}
            <tbody>
            @foreach ($records as $record)
                <tr>

                    
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->head_id }}</td>
                    
                    
                    
                    
                    <td><?php if(!empty($record->is_active)){ 
                      echo "Active";}
                      else {
                        echo "Not active";
                      }?>


                    <td>{{ $record ->created_at->format('F d, Y h:ia') }}</td>
                  <td>{!! Form::open(['method' => 'DELETE', 'route' => ['stationhead.destroy', $record->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
                    
                                 </tr>
                @endforeach
               
            </tbody>
            
        </table>
    </div>

    
</div>
<!-- <script>
function load(obj){
//console.log(obj.val());
$('#listchild-'+obj.val()).remove();
$('#listchild').html($("<div id='listchild-"+obj.val()+"'></div>"));
  $.get('/api/getchilds/'+obj.val(),function(data){
    console.log(data);
    $('#listchild-'+obj.val()).append($(data));
  });
}
</script> -->

<script>
function load(obj){
//console.log(obj.val());
//$('#listchild-'+obj.val()).remove();
$('#listchild').html($("<div id='listchild-"+obj.val()+"'></div>"));
  $.get('/api/getchilds/'+obj.val(),function(data){
    console.log(data);
    $('#listchild-'+obj.val()).append($(data));
  });
}
</script>
@endsection