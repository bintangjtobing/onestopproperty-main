@extends('welcome')
@section('css')
    <link rel="stylesheet" href="{!! asset('real-estate/css/font-icons.css') !!}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{!! asset('css/components/bs-select.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/components/bs-switches.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/components/ion.rangeslider.css') !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('real-estate/real-estate.css') !!}">
@endsection
@section('title', 'Listing Properti')
@section('content')
@endsection
@section('javascript')
    <script src="{!! asset('js/jquery.js') !!}"></script>
    <script src="{!! asset('js/plugins.bootstrap.js') !!}" id="canvas-bootstrap-js"></script>
    <!-- Bootstrap Select Plugin -->
    <script src="{!! asset('js/components/bs-select.js') !!}"></script>

    <!-- Bootstrap Switch Plugin -->
    <script src="{!! asset('js/components/bs-switches.js') !!}"></script>

    <!-- Range Slider Plugin -->
    <script src="{!! asset('js/components/rangeslider.min.js') !!}"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".price-range-slider").ionRangeSlider({
                type: "double",
                prefix: "$",
                min: 200,
                max: 10000,
                max_postfix: "+"
            });

            jQuery(".area-range-slider").ionRangeSlider({
                type: "double",
                min: 50,
                max: 20000,
                from: 50,
                to: 20000,
                postfix: " sqm.",
                max_postfix: "+"
            });

            jQuery(".bt-switch").bootstrapSwitch();
        });
    </script>
@endsection
