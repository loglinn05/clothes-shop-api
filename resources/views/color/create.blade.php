@extends('layouts.with-validation-errors')

@section('content_header')
    <h1>Add a color</h1>
@stop

@section('main')
    <div class="row">
        <div class="col-6">
            <form
                action="{{ route('color.store') }}"
                method="post"
                class="addition-form"
            >
                @csrf
                <div class="form-group d-flex">
                    <input type="text" name="code" class="form-control" placeholder="Color code"
                           value="{{ old('code') }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Add">
                </div>
            </form>
        </div>
    </div>
@stop
