@extends('layouts.with-validation-errors')

@section('content_header')
    <h1>Edit the user</h1>
@stop

@section('main')
    <div class="row">
        <div class="col-6">
            <form
                action="{{ route('user.update', $user->id) }}"
                method="post"
                class="addition-form"
            >
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text"
                           name="name"
                           value="{{ old('name') ?? $user->name }}"
                           class="form-control"
                           placeholder="User name">
                </div>
                <div class="form-group">
                    <input type="text"
                           name="surname"
                           value="{{ old('surname') ?? $user->surname }}"
                           class="form-control"
                           placeholder="Surname">
                </div>
                <div class="form-group">
                    <input type="text"
                           name="patronymic"
                           value="{{ old('patronymic') ?? $user->patronymic }}"
                           class="form-control"
                           placeholder="Patronymic">
                </div>
                <div class="form-group">
                    <input type="number"
                           name="age"
                           value="{{ old('age') ?? $user->age }}"
                           class="form-control"
                           placeholder="Age">
                </div>
                <div class="form-group">
                    <input type="text"
                           name="address"
                           value="{{ old('address') ?? $user->address }}"
                           class="form-control"
                           placeholder="Address">
                </div>
                <div class="form-group">
                    <select name="gender" class="custom-select form-control" id="gender">
                        <option {{ (old('gender') ?? $user->gender == 0) ? 'selected' : '' }}
                                value="0">Unspecified</option>
                        <option {{ (old('gender') ?? $user->gender == 1) ? 'selected' : '' }}
                                value="1">Male</option>
                        <option {{ (old('gender') ?? $user->gender == 2) ? 'selected' : '' }}
                                value="2">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </form>
        </div>
    </div>
@stop
