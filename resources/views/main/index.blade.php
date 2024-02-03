@extends('layouts.main')

@section('main')
    <?php use App\Custom\Filter\ProductFilter ?>
    <div class="row">
        <div class="col-md-3">
            <x-adminlte-small-box title="528" text="Orders" icon="fas fa-shopping-bag text-fuchsia"
                                  theme="purple" url="#" url-text="View all orders"/>
        </div>
        <div class="col-md-3">
            <x-adminlte-small-box title="528" text="Products" icon="fas fa-tshirt text-teal"
                                  theme="primary" url="#" url-text="View all products"/>
        </div>
        <div class="col-md-3">
            <x-adminlte-small-box title="528" text="Categories" icon="fas fa-list text-orange"
                                  theme="warning" url="#" url-text="View all categories"/>
        </div>
        <div class="col-md-3">
            <x-adminlte-small-box title="528" text="Tags" icon="fas fa-tags text-dark"
                                  theme="danger" url="#" url-text="View all tags"/>
        </div>
        <div class="col-md-3">
            <x-adminlte-small-box title="528" text="Colors" icon="fas fa-palette text-lime"
                                  theme="success" url="#" url-text="View all colors"/>
        </div>
        <div class="col-md-3">
            <x-adminlte-small-box title="528" text="Users" icon="fas fa-users text-navy"
                                  theme="info" url="#" url-text="View all users"/>
        </div>
    </div>    
@stop
