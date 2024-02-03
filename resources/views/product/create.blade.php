@extends('layouts.with-validation-errors')

@section('content_header')
    <h1>Add a product</h1>
@stop

@section('main')
    <div class="row p-3">
        <div class="col-6">
            <form
                action="{{ route('product.store') }}"
                method="post"
                class="addition-form"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="form-group">
                    <input type="text"
                           name="title"
                           value="{{ old('title') }}"
                           class="form-control"
                           placeholder="Title">
                </div>
                <div class="form-group">
                    <textarea name="description" rows="5" cols="25"
                              class="form-control"
                              placeholder="Description">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <textarea name="content" rows="5" cols="25"
                              class="form-control"
                              placeholder="Content">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <input type="number"
                           step="0.01"
                           min="0"
                           name="price"
                           value="{{ old('price') }}"
                           class="form-control"
                           placeholder="Price">
                </div>
                <div class="form-group">
                    <input type="number"
                           step="0.01"
                           min="0"
                           name="old_price"
                           value="{{ old('old_price') }}"
                           class="form-control"
                           placeholder="Old price">
                </div>
                <div class="form-group">
                    <input type="number"
                           name="count"
                           value="{{ old('count') }}"
                           class="form-control"
                           placeholder="Stock quantity">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                               value="1" id="isPublished" name="is_published"
                               {{ old('is_published') ? 'checked' : ''}}>
                        <label class="form-check-label" for="isPublished">
                            The product is published.
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <x-adminlte-input-file id="previewImages" name="preview_images[]" accept="image/*" label="Upload images" placeholder="Choose multiple images..." legend="Choose" multiple>
                        <x-slot name="appendSlot">
                            <x-adminlte-button theme="primary" label="Upload"/>
                        </x-slot>
                        <x-slot name="prependSlot">
                            <div class="input-group-text text-primary">
                                <i class="fas fa-file-upload"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input-file>
                </div>
                <div class="form-group">
                    <x-adminlte-select2 name="category_id" data-placeholder="Select a category">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-primary">
                                <i class="fas fa-list"></i>
                            </div>
                        </x-slot>
                        <option/>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                    {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </x-adminlte-select2>
                </div>
                @php
                    $config = [
                        "allowClear" => true,
                    ];
                    $oldTags = old('tags') ?? [];
                    $oldColors = old('colors') ?? [];
                @endphp
                <div class="form-group">
                    <x-adminlte-select2 id="tags" name="tags[]"
                                        data-placeholder="Select tags"
                                        :config="$config" multiple>
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-primary">
                                <i class="fas fa-tag"></i>
                            </div>
                        </x-slot>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"
                                    {{ in_array($tag->id, $oldTags) ? 'selected' : '' }}>
                                {{ $tag->title }}
                            </option>
                        @endforeach
                    </x-adminlte-select2>
                </div>
                <div class="form-group">
                    <x-adminlte-select2 id="colors" name="colors[]"
                                        data-placeholder="Select colors"
                                        :config="$config" multiple>
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-primary">
                                <i class="fas fa-palette"></i>
                            </div>
                        </x-slot>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}"
                                {{ in_array($color->id, $oldColors) ? 'selected' : '' }}>
                                {{ $color->code }}
                            </option>
                        @endforeach
                    </x-adminlte-select2>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Add">
                </div>
            </form>
        </div>
    </div>
@stop
