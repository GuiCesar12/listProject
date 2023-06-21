<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>iko_v2</title>
    <link href="{{URL::asset ('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset ('css/Pretty-Registration-Form.css') }}" rel="stylesheet">
    <link href="{{URL::asset ('css/styles.css') }}" rel="stylesheet">
    @stack('links')
</head>

<body>
    <header class="d-table-cell" style="width: 1354px;text-align: center;"><img src="{{URL::asset('img/iko_logo.png')}}" style="margin: 0px;width: 230px;text-align: center;"></header>
    @include('menus.navbar')
    <div style="margin: 0px;padding: 0px;height: -1px;width: 1200px;"><img class="float-left" style="height: 256px;margin: 00px;padding: 00px;" src="{{URL::asset('img/TESTE.png')}}"></div>
    <div style="text-align: center;height: 423px;"><img class="float-right" src="{{URL::asset('img/Design%20sem%20nome%20(1).png')}}" style="height: 432px;margin: 0px;padding: 00px;">
        @yield('content')
    </div>
    
    
    
    <script src="{{URL::asset ('js/jquery.min.js') }}"></script>
    <script src="{{URL::asset ('bootstrap/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>

</html>