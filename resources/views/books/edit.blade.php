@extends('layouts.app')
@section('navcuk')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm active"><a class="opacity-5 text-dark" href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a
                href="{{ route('books.index') }}">Buku</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Ubah
            Buku</a></li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Ubah Buku</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body px-0 pt-0 pb-2">
                        {!! Form::model($book, ['url' => route('books.update', $book->id), 'method' => 'put', 'files' => 'true', 'class' => 'form-horizontal']) !!}
                        @include('books._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
