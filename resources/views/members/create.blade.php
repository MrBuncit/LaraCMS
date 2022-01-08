@extends('layouts.app')
@section('navcuk')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ url('/admin/members') }}">Member</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="">Tambah Member</a></li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Tambah Member</h6>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {!! Form::open(['url' => route('members.store'), 'method' => 'post', 'files' => 'true', 'class' => 'form-horizontal']) !!}
                    @include('members._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection