@extends('layouts.with-validation-errors')

@section('content_header')
    <h1>Edit the color</h1>
@stop

@section('main')
    <div class="row">
        <div class="col-6">
            <form
                action="{{ route('color.update', $color->id) }}"
                method="post"
                class="addition-form"
            >
                @csrf
                @method('patch')
                <input type="hidden" name="id" value="{{ $color->id }}">
                <div class="form-group">
                    <input type="text" name="code" value="{{ old('code') ?? $color->code }}"
                           class="form-control" placeholder="Color code">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </form>
        </div>
    </div>
@stop
