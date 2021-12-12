<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include ('layouts.head')
</head>

<body class="g-sidenav-show bg-gray-100">
    {{-- @include ('layouts.sidebar') --}}
    <main class="main-content mt-1 border-radius-lg">
        @include ('layouts.navbar')
        <div class="container">
            @include('layouts._flash')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="panel-body">
                                {!! $html->table(['class' => 'table-striped']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@section('scripts')
    {!! $html->scripts() !!}
@endsection

@include ('layouts.script')
@yield('scripts')

</html>
