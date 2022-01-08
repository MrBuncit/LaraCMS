@extends('layouts.app')
@section('navcuk')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
            <a>Data Peminjaman</a>
        </li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Data Peminjaman</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body px-0 pt-0 pb-2">
                        {!! $html->table(['class' => 'table-striped']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {!! $html->scripts() !!}
    <script>
        $(function() {
            $('<div id="filter_status" class="dataTables_length" style="display: inline-block; margin-left:10px;"><label> Status <select size="1" name ="filter_status"aria - controls = "filter_status"class = "form-control input-sm"style = "width: 140px;" ><option value = "all"selected = "selected"> Semua </option> <option value = "returned">Sudah Dikembalikan</option>< option value = "not-returned" > Belum Dikembalikan < /option > </select></label ></div>')
                .insertAfter('.dataTables_length');

            $("#dataTablesBuilder").on('preXhr.dt', function(e, settings, data) {
                data.status = $('select[name="filter_status"]').val();
            });

            $('select[name="filter_status"]').change(function() {
                window.LaravelDataTables["dataTablesBuilder"].ajax.reload();
            });
        });
    </script>
@endsection
