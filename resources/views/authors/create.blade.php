@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body px-0 pt-0 pb-2">
                        {!! Form::open(['url' => route('authors.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
                        @include('authors._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
