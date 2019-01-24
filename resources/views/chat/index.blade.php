@extends('layouts.usuariosFeed')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="container" id="app">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading text-white">
                    Lista de amigos
                </div>
                @forelse($friends as $friend)
                    <a href="{{ route('chat.show', $friend->id) }}" class="panel-block text-white" style="justify-content: space-between">
                       <div>{{ $friend->name }}</div>
                       <onlineuser v-bind:friend="{{ $friend }}" v-bind:onlineusers="onlineusers"></onlineuser>
                    </a>

                @empty
                    <div class="panel-block text-white">
                        No tienes amigos.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>


@endsection
