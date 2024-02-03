@extends('layouts.main')

@section('content_header')
    <h1>Colors</h1>
@stop

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('color.create') }}" class="btn btn-primary">Add</a>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Color code</th>
                            <th>Color</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($colors as $color)
                            <tr>
                                <td>{{ $color->id }}</td>
                                <td>
                                    <a href="{{ route('color.show', $color->id) }}">
                                        {{ $color->code }}
                                    </a>
                                </td>
                                <td>
                                    <div class="color" style="background: {{ $color->code }}"></div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
