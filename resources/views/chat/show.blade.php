<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : 'null' }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="friendId" content="{{ $friend->id }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/chat.css">

</head>
<body>
    <audio id="chatAudio">
        <source src="{{ asset('sounds/chat.mp3') }}">
    </audio>
<div class="container" id="app">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    {{$friend->dog->name }} ({{$friend->name}})
                    <div class="contain is-pulled-right">
                        <a href="{{ url('/chat') }}" class="is-link"><i class="fa fa-arrow-left"></i>Volver atras.</a>
                    </div>
                    <chat v-bind:chats="chats" v-bind:userid="{{ Auth::user()->id }}" v-bind:friendid="{{ $friend->id }}"></chat>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="{{ mix('/js/app.js') }}"></script>
</html>
   


   

