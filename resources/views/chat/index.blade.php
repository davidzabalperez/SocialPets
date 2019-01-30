@extends('layouts.feed_master')
@section('title', 'Mensajes')
@section('content')
<style>
.sideBar-avatar {
  text-align: center;
  padding: 0 !important;
}

.avatar-icon img {
  border-radius: 50%;
  height: 49px;
  width: 49px;
}

.sideBar-main {
  padding: 0 !important;
}

.sideBar-main .row {
  padding: 0 !important;
  margin: 0 !important;
}

.sideBar-name {
  padding: 10px !important;
}

.name-meta {
  font-size: 100%;
  padding: 1% !important;
  text-align: left;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #000;
}


.sideBar {
  padding: 0 !important;
  margin: 0 !important;
  background-color: #fff;
  overflow-y: auto;
  border: 1px solid #f7f7f7;
  height: calc(100% - 120px);
}

.sideBar-body {
  position: relative;
  padding: 10px !important;
  height: 72px;
  margin: 0 !important;
}

</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container" id="app">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading text-white">
                    Lista de amigos
                </div>
                @forelse($friends as $friend)

                <div class="row sideBar-body">

            <div class="col-sm-4 col-xs-4 sideBar-avatar">
              <div class="avatar-icon">
                <img src="/public/uploads/{{ $friend->dog->avatars }}">
              </div>
            </div>

            <div class="col-sm-7 col-xs-10 sideBar-main">

              <div class="row">

                <div class="col-sm-10 col-xs-10 sideBar-name">


                  <span class="name-meta">

                  <a href="{{ route('chat.show', $friend->id) }}" class="panel-block text-white" style="justify-content: space-between">{{ $friend->dog->name }}</a>
                </span>
                </div>
              </div>

            </div>
            <onlineuser v-bind:friend="{{ $friend }}" v-bind:onlineusers="onlineusers"></onlineuser>

          </div>

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