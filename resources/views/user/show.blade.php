@extends('layouts.main')

@section('content_header')
@stop

@section('main')
    <div class="row pt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>User {{ $user->id }}</h3>
                    <div class="d-inline-flex">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary mr-3">Edit</a>
                        <form action="{{ route('user.delete', $user->id) }}" method="post">
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
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <td>User name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Surname</td>
                            <td>{{ $user->surname }}</td>
                        </tr>
                        <tr>
                            <td>Patronymic</td>
                            <td>{{ $user->patronymic }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>{{ $user->age }}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>{{ $user->genderTitle }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $user->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
