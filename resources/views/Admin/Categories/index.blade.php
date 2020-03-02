@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3 class="text-primary font-weight-bold mb-3">Category</h3>
        </div>
        <div class="col-md-4">
            <div class="float-right">
                <a href="{{ route('category.create') }}" class="btn btn-sm btn-simple btn-primary"> <i class="fa fa-plus"></i> Add </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body pl-0 pr-0">
                    {!! $dataTable->table(['class' => 'table']) !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('body_bottom')
    {!! $dataTable->scripts() !!}
@endsection
