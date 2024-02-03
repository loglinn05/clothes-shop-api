@extends('layouts.main')

@section('content_header')
@stop

@section('main')
    <div class="row pt-3">
        <div class="col-md-8 col-xxl-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Product {{ $product->id }}</h3>
                    <div class="d-inline-flex">
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary mr-3">Edit</a>
                        <form action="{{ route('product.delete', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger h-100" value="Delete">
                        </form>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-fixed">
                        <colgroup>
                            <col width="30%">
                            <col width="70%">
                        </colgroup>
                        <tr>
                            <td>ID</td>
                            <td>{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{ $product->title }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <td>Content</td>
                            <td>{{ $product->content }}</td>
                        </tr>
                        <tr>
                            <td>Preview image</td>
                            <td>{{ $product->preview_image }}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <td>Old price</td>
                            <td>{{ $product->old_price }}</td>
                        </tr>
                        <tr>
                            <td>Count</td>
                            <td>{{ $product->count }}</td>
                        </tr>
                        <tr>
                            <td>Is published</td>
                            <td>{{ $product->is_published }}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{ $product->category->title }}</td>
                        </tr>

                        @php($tag_count = count($product->tags))
                        <tr>
                            <td rowspan="{{ $tag_count }}">Tags</td>
                            <td>{{ $product->tags[0]->title }}</td>
                        </tr>
                        @if($tag_count > 1)
                            @for($i = 1; $i < $tag_count; $i++)
                                <tr>
                                    <td style="padding-left: 0.75rem">{{ $product->tags[$i]->title }}</td>
                                </tr>
                            @endfor
                        @endif

                        @php($color_count = count($product->colors))
                        <tr>
                            <td rowspan="{{ $color_count }}">Colors</td>
                            <td class="d-flex justify-content-between align-items-center">
                                {{ $product->colors[0]->code }}
                                <div class="color" style="background: {{ $product->colors[0]->code }}"></div>
                            </td>
                        </tr>
                        @if($color_count > 1)
                            @for($i = 1; $i < $color_count; $i++)
                                <tr>
                                    <td style="padding-left: 0.75rem;" class="d-flex justify-content-between align-items-center">
                                        {{ $product->colors[$i]->code }}
                                        <div class="color" style="background: {{ $product->colors[$i]->code }}"></div>
                                    </td>
                                </tr>
                            @endfor
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
