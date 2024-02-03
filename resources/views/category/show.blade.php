@extends('layouts.main')

@section('content_header')
@stop

@section('main')
    <div class="row pt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Category {{ $category->id }}</h3>
                    <div class="d-inline-flex">
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary mr-3">Edit</a>
                        <form action="{{ route('category.delete', $category->id) }}" method="post">
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
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <td>Category title</td>
                            <td>{{ $category->title }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
