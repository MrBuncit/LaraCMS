@extends('layouts.app')
@section('content')
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                @if (Auth::check())
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                            href="{{ url('/home') }}">Dashboard</a>
                    </li>
                @endif
                @role('admin')
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a
                            href="{{ route('authors') }}">Penulis</a></li>
                @endrole
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboards</h6>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Penulis') }}
                        <div class="card-body px-0 pt-0 pb-2">
                            <p> <a class="btn btn-primary" href="#">Tambah</a></p>
                            {!! $html->table(['class' => 'table-striped']) !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {!! $html->scripts() !!}
@endsection
