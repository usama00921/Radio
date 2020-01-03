{{-- \resources\views\roles\index.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Station Head')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Head Station</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-key"></i> Head Station</h1>

    
    
    <div class="form-group">
       <!--  {{ Form::label('Head', 'Head Name') }}  -->
       <?php 
       foreach($headall as $head)
       {
        
       
       
           ?>
           <input type="checkbox" value="<?php echo $head->id; ?>"> <?php echo $head->title; ?>
           <?php 
       }
       ?>
        
        
    </div>
    
    
    
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>is_active</th>
                    <th>Time stamp</th>

                </tr>
            </thead>

            <tbody>
            @foreach ($records as $record)
                <tr>

                    
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->title }}</td>
                    
                    
                    
                    
                    <td><?php if(!empty($record->is_active)){ 
                      echo "Active";}
                      else {
                        echo "Not active";
                      }?>


                    <td>{{ $station->created_at->format('F d, Y h:ia') }}</td>
                    
                                 </tr>
                @endforeach
               
            </tbody>

        </table>
    </div>

    <a href="{{ route('stationhead.update', $id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

</div>

@endsection