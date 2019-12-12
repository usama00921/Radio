{{-- \resources\views\themes\create.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Create New Page')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/pages">Pages</a></li>
              <li class="breadcrumb-item active">edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class='col-lg-10 col-lg-offset-1'>

    <h1><i class='fa fa-themeisle'></i> update Page</h1>
    <hr>

    {{ Form::open(array('route' => array('sectionhead.update', $sectionhead->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'title') }}
        {{ Form::text('title', $sectionhead->title, array('class' => 'form-control')) }}
    </div>
    
    
    <div class="form-group">
        {{ Form::label('lblTitle', 'Meta Description') }}
        {{ Form::text('txtmetadescription', $page->metaDescription, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('lblTitle', 'Theme') }}
        {{ Form::select('lsttheme', $sectionhead, $sectionhead->sectionhead_id, ['class' => 'form-control']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('lblContent', 'Content') }}

        {{ Form::textarea('txtdContent', $page->contents, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('lstpageloc', 'Page Location') }}
        
        {{ Form::select('lstpageloc', $pagesLoc, $page->pageLocation, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('lblTitle', 'Rank') }}
        {{ Form::number('txtrank', $page->rank, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('lblTitle', 'Parent Page') }}
        {!! Form::select('lstparentpage', $pages, $page->parentPageId, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group">
        {{ Form::label('lblTitle', 'External Links') }}
        {{ Form::text('txtextlink', $page->externalLink, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lblTitle', 'Targeted Window') }}        
        {!! Form::select('lstTargetdWindow', $pagesTarget, $page->targetWindow, ['class' => 'form-control']) !!}
    </div>

    

    {{ Form::submit('update', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection