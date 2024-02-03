@extends('layouts.main')

@section('content_header')
    <h1>Products</h1>
@stop

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add</a>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-fixed table-striped">
                        <thead>
                        <tr>
                            <th style="width: 4em">ID</th>
                            <th style="width: 15em">Title</th>
                            <th style="width: 30em">Description</th>
                            <th style="width: 15em">Content</th>
                            <th style="width: 30em">Preview images</th>
                            <th style="width: 7em">Price</th>
                            <th style="width: 7em">Old price</th>
                            <th style="width: 7em">Count</th>
                            <th style="width: 7em">Is published</th>
                            <th style="width: 10em">Category</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    <a href="{{ route('product.show', $product->id) }}">
                                        {{ $product->title }}
                                    </a>
                                </td>
                                <td style="white-space: normal !important;">{{ $product->description }}</td>
                                <td>{{ $product->content }}</td>
                                <td>{{ $product->productImages->count() }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->old_price }}</td>
                                <td>{{ $product->count }}</td>
                                <td>{{ $product->is_published ? "Yes" : "No" }}</td>
                                <td>{{ $product->category->title }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
