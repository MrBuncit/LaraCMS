@extends('layouts.app')
@section('navcuk')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Profile</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body px-0 pt-0 pb-2">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-muted">Nama</td>
                                    <td>{{ auth()->user()->name }}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Email</td>
                                    <td>{{ auth()->user()->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <a href="#" class="btn btn-primary">Ubah</a> --}}
                        <a href="{{ route('editprofile') }}" class="btn btn-primary">Ubah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</script>
