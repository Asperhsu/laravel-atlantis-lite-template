<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
    <link rel="icon" href="{{ asset('images/icon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
</head>
<body>
    <div class="wrapper">
        @include('_layouts.app.header')
        @include('_layouts.app.sidebar')

        <div class="main-panel">
            <div class="content" id="app">
                @yield('content')
            </div>

            @include('_layouts.app.footer')
        </div>

        @include('_layouts.app.custom-template')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
	<script src="{{ mix('js/plugin.js') }}"></script>
	<script src="{{ mix('js/setting-demo.js') }}"></script>
    @stack('scripts')
</body>
</html>
