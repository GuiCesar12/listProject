<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>iko_v2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::asset ('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset ('css/Pretty-Registration-Form.css') }}" rel="stylesheet">
    <link href="{{URL::asset ('css/styles.css') }}" rel="stylesheet">
    @stack('links')
</head>

<body>
    @include('menus.navbar')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
        @yield('content')

        </div>
        <div class="col-md-2">
            <img class="float-right" src="{{URL::asset('img/Design%20sem%20nome%20(1).png')}}">
        </div>    
    </div>

    <footer>
        <img src="{{URL::asset('img/TESTE.png')}}"></div>
            
    </footer>

    {{-- <div style="margin: 0px;padding: 0px;height: -1px;width: 1200px;"><img class="float-left" style="height: 256px;margin: 00px;padding: 00px;" src="{{URL::asset('img/TESTE.png')}}"></div> --}}
    {{-- <div style="text-align: center;height: 423px;"><img class="float-right" src="{{URL::asset('img/Design%20sem%20nome%20(1).png')}}" style="height: 432px;margin: 0px;padding: 00px;"> --}}
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{URL::asset ('js/jquery.min.js') }}"></script>
    <script src="{{URL::asset ('bootstrap/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>

</html>