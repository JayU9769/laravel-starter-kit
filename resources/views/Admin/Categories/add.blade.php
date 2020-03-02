@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3 class="text-primary font-weight-bold mb-3">Add Category</h3>
        </div>
        <div class="col-md-4">
            <div class="float-right">
                <a href="{{ route('category.index') }}" class="btn btn-sm btn-simple btn-primary"> <i class="fas fa-angle-double-left"></i> Back </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {!! Form::open(['method' => 'post', 'route' => 'category.store', 'data-toggle' => 'validator', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data']) !!}
                <div class="card-body">
                    @include('Admin.Categories._form')
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection

@section('body_bottom')
@endsection
