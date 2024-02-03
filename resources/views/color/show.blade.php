@extends('layouts.main')

@section('content_header')
@stop

@section('main')
    <div class="row pt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Color {{ $color->id }}</h3>
                    <div class="d-inline-flex">
                        <a href="{{ route('color.edit', $color->id) }}" class="btn btn-primary mr-3">Edit</a>
                        <form action="{{ route('color.delete', $color->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete" style="height: 100%">
                        </form>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tr>
                            <td>ID</td>
                            <td>{{ $color->id }}</td>
                        </tr>
                        <tr>
                            <td>Color code</td>
                            <td>{{ $color->code }}</td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td><div class="color" style="background: {{ $color->code }}"></div></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
