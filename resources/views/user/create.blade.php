@extends('layouts.with-validation-errors')

@section('content_header')
    <h1>Add a user</h1>
@stop

@section('main')
    <div class="row p-3">
        <div class="col-6">
            <form
                action="{{ route('user.store') }}"
                method="post"
                class="addition-form"
            >
                @csrf
                <div class="form-group d-flex">
                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           class="form-control"
                           placeholder="User name">*
                </div>
                <div class="form-group d-flex">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="form-control"
                           placeholder="E-mail">*
                </div>
                @include('components.password-input', ['value' => old('password')])
                @include('components.password-input', [
                    'id' => "password-confirmation",
                    'name' => "password_confirmation",
                    'placeholder' => "Password Confirmation",
                    'value' => old('password')
                ])
                <div class="form-group">
                    <input type="text"
                           name="surname"
                           value="{{ old('surname') }}"
                           class="form-control"
                           placeholder="Surname">
                </div>
                <div class="form-group">
                    <input type="text"
                           name="patronymic"
                           value="{{ old('patronymic') }}"
                           class="form-control"
                           placeholder="Patronymic">
                </div>
                <div class="form-group">
                    <input type="number"
                           name="age"
                           value="{{ old('age') }}"
                           class="form-control"
                           placeholder="Age">
                </div>
                <div class="form-group">
                    <input type="text"
                           name="address"
                           value="{{ old('address') }}"
                           class="form-control"
                           placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="custom-select form-control" id="gender">
                        <option {{ (old('gender') == 0) ? 'selected' : '' }} value="0">Unspecified</option>
                        <option {{ (old('gender') == 1) ? 'selected' : '' }} value="1">Male</option>
                        <option {{ (old('gender') == 2) ? 'selected' : '' }} value="2">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <p>* means that the field is required.</p>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Add">
                </div>
            </form>
        </div>
    </div>
@stop
