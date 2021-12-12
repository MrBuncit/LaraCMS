@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-body">
                        Selamat datang CUk..
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-muted">Buku dipinjam</td>
                                    <td>
                                        @if ($borrowLogs->count() == 0)
                                            Tidak ada buku dipinjam
                                        @endif
                                        <ul>
                                            @foreach ($borrowLogs as $borrowLog)
                                                <li>{{ $borrowLog->book->title }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
