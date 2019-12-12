{{-- \resources\views\theme_styles\index.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Theme Styles')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-themeisle"></i> Theme Styles Administration </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Theme</th>
                    <th>Style</th>
                    <th>Content</th>
                    <th colspan="2"> Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($allThemeStyles as $theme_style)
                <tr>

                    <td>{{ $theme_style->fkThemeId }}</td>
                     <td>{{ $theme_style->fkStyleId }}</td>                   
                    <td>{{ $theme_style->StyleContents }}</td>
                   <td>
                    <a href="{{ route('theme_styles.edit', $theme_style->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
</td><td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['theme_styles.destroy', $theme_style->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('theme_styles.create') }}" class="btn btn-success">Add new Theme Style</a>

</div>

@endsection