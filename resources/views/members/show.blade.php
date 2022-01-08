@extends('layouts.app')
@section('navcuk')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-dark" aria-current="page"><a href="{{ url('/admin/members') }}">Member</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a>Detail {{ $member->name }}</a></li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Detail {{ $member->name }}</h6>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-body">
                        <p>Buku yang sedang dipinjam:</p>
                        <table class="table table-condensed table-striped">
                            <thead>
                                <tr>
                                    <td>Judul</td>
                                    <td>Tanggal Peminjaman</td>
                                </tr>
                            <tbody>
                                @forelse ($member->borrowLogs()->borrowed()->get() as $log)

                                    <tr>
                                        <td>{{ $log->book->title }}</td>
                                        <td>{{ $log->created_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            </thead>
                        </table>
                        <p>Buku telah dikembalikan</p>
                        <table class="table table-condensed table-striped">
                            <thead>
                            <tbody>
                                @forelse ($member->borrowLogs()->returned()->get() as $log)
                                    <tr>
                                        <td>{{ $log->book->title }}</td>
                                        <td>{{ $log->updated_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
