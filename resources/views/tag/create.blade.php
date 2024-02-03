@extends('layouts.with-validation-errors')

@section('content_header')
    <h1>Add a tag</h1>
@stop

@section('main')
    <div class="row">
        <div class="col-6">
            <form
                action="{{ route('tag.store') }}"
                method="post"
                class="addition-form"
            >
                @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control"
                           placeholder="Tag name" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Add">
                </div>
            </form>
        </div>
    </div>
@stop
