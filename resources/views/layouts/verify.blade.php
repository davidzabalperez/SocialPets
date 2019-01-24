<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SocialPets') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="../../css/grayscale.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="masthead">

        @include('layouts.navbarLoginRegister')
        <main class="py-5">
            @yield('content')
        </main>
    </div>
</body>
<script>
$(document).ready(function(){
    function getMessage() {
            $.ajax({
               type:'POST',
               url:'/getMessage',
               data:'_token = <?php echo csrf_token()?>',
               success:function(data) {
                  $("#msg").html(data.msg);
               }
            });
    }
});
</script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</html>