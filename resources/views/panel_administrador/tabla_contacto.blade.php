@extends('layouts.panel_administrador_master')
@section('title', 'Panel de Administrador - Tabla Contacto')
@section('content')
<div class="container">
    <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Mensajes de contacto</div>
        <div class="card-body">
          <div class="table-responsive">

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                               <div class="srch_bar">
        <div class="stylish-input-group">
          <input type="text" id="SearchUserBan" onkeyup="searchUserBan()" placeholder="Buscar usuario.." title="Type in a name">
          <span class="input-group-addon">
          <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
          </span> </div>
      </div>
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Texto</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody >
              <tr class="targetUserBan">
                  @if (isset($contactos))
                  @foreach ($contactos as $contacto)
                  <td>{{$contacto->name}}</td>
                  <td>{{$contacto->email}}</td>
                  <td>{{$contacto->doubt}}</td>
                  @endif
                  @endforeach
                <td><a class="btn btn-info text-white" rel="publisher" data-toggle="modal" data-target="" id="">Contestar</a>
                    <a class="btn btn-danger text-white" rel="publisher" data-toggle="modal" data-target="" id="">Eliminar</a>
                </td>
            </tbody>
          </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>

</div>
          
@endsection