{{-- \resources\views\themes\index.blade.php --}}
@extends('admin.layouts.app')

@section('title', '| Themes')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-themeisle"></i> Themes Administration </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th width="70%">Theme</th>
                    <th colspan="2"> Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($themes as $theme)
                <tr>

                    <td>{{ $theme->id }}</td>
                    <td>{{ $theme->title }}</td>
                   
                   <td> <a href="{{ route('themes.edit', $theme->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
</td><td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['themes.destroy', $theme->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('themes.create') }}" class="btn btn-success">Add new Theme</a>

</div>

@endsection