<!DOCTYPE html>

<html class="no-js">

<head>
    {!! SEO::generate() !!}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" class="color-swicher-link">
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}" class="color-swtcher-link">
    <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    @isset($Photo)
        <link rel="stylesheet" href="{{ asset('assets/light/dist/css/lightbox.min.css') }}">
    @endisset

    <style>
        .rounded-me {
            background-color: #51c4ca !important;
            font-weight: 400 !important;
            color: white;
        }

        .btn-outline-maincolor {

            background-color: #51c4ca !important;
            font-weight: 400 !important;
            color: white;
        }

        .btn-outline-maincolor:hover {

            color: wheat !important;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #51c4ca;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #51c4ca;
        }
    </style>
</head>

<body>
    {{-- <div class="preloader">
        <div class="preloader_image"></div>
    </div> --}}
