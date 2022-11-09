<!--begin::Head-->
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    @vite(['resources/sass/style.scss'])
    @yield('style')
</head>
<!--end::Head-->
