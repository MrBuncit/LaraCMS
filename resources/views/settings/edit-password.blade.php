@extends('layouts.app')
@section('navcuk')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page" href="3">
            Ubah Password</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Ubah Password</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body px-0 pt-0 pb-2">
                        {!! Form::open(['url' => '/updatepassword', 'method' => 'post', 'class' => 'form-horizontal']) !!}

                        <div class="form-group{{ $errors->has('     password') ? ' has-error' : '' }}">
                            {!! Form::label('password', 'Password lama', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('     new_password') ? ' has-error' : '' }}">
                            {!! Form::label('new_password', 'Password Baru', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('new_password', ['class' => 'form-control']) !!}
                                {!! $errors->first('new_password', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('     new_password_confirmation') ? ' has-error' : '' }}">
                            {!! Form::label('new_password_confirmation', 'Konfirmasi password baru', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('new_password_confirmation', ['class' => 'form-control']) !!}
                                {!! $errors->first('new_password_confirmation', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
