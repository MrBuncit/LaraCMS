@extends('layouts.app')
@section('navcuk')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page" href="3">
            Profile</li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Ubah Profile</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Ubah Profile</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body px-0 pt-0 pb-2">
                        {{-- {!! Form::model(auth()->user(), ['route' => route('updateprofile'), 'method' => 'post', 'class' => 'form-horizontal']) !!} --}}
                        <form action="{{ url('/updateprofile') }}" method="POST">
                            @csrf

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', 'Nama', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {{-- {!! Form::close() !!} --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
