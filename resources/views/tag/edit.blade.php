@extends('layouts.with-validation-errors')

@section('content_header')
    <h1>Edit the tag</h1>
@stop

@section('main')
    <div class="row">
        <div class="col-6">
            <form
                action="{{ route('tag.update', $tag->id) }}"
                method="post"
                class="addition-form"
            >
                @csrf
                @method('patch')
                <input type="hidden" name="id" value="{{ $tag->id }}">
                <div class="form-group">
                    <input type="text" name="title" value="{{ old('title') ?? $tag->title }}"
                           class="form-control" placeholder="Tag name">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </form>
        </div>
    </div>
@stop
