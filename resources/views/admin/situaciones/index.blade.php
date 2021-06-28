@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        {{-- <h1>Situaciones</h1> --}}

        {{-- <div class="row"> --}}

        {{-- <div class="col-lg-4"> --}}
        {{-- <div class="card text-white  mb-3" style=" width: 100%; height: 200; background-color: #6261B1;">
                    <div class="card-header">Buscar</div>
                    <div class="card-body">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="card-header">Filtros</div>
                    <div class="card-body">

                        <h7>Filtro 1</h7><input type="checkbox" class="checkbox" name="">
                        <br>
                        <h7>Filtro 2</h7><input type="checkbox" class="checkbox" name="">
                        <br>
                        <h7>Filtro 3</h7><input type="checkbox" class="checkbox" name="">
                    </div>
                </div>
                <!--
                                <div class="card text-white mb-3" style=" width: 100%; height: 200; background-color: #3E755A;" >
                                  <div class="card-header">Opiniones de clientes</div>
                                  <div class="card-body">
                                      <h7></h7>
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text"> content.</p>
                                  </div>
                                </div> -->
            </div> --}}
        {{-- <div class="col-lg-2">
            @foreach ($situaciones as $situacion)
                <div class="row">
                    <!-- dentro del for -->
                    <div>
                        <div class="card mb-4" style=" width: 90%; height: 100; background-color: #E7DDD5;" >
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <h2>{{ $situacion->titulo }}</h2>
                                    </div>
                                    <div class="col-lg-7">
                                        <button data-toggle="modal"
                                            data-target="#AprobarSituacion{{ $situacion->id_situaciones }}"
                                            class="btn btn-success">Aprobar</button>
                                        <button class="btn btn-danger">Desaprobar</button>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-7">
                                        {{ $situacion->descripcion }}
                                        <br>
                                        {{ $situacion->fecha_in() }}
                                        <br>
                                         @foreach ($users as $u)
                                            @if ($u->id == $situacion->id_user)
                                                <p>Peticion realizada por:
                                                    {{ $u->name . ' ' . $u->apellido_pat . ' ' . $u->apellido_mat }}<p>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.situaciones.aprobar')
            @endforeach
        </div> --}}

        <h2>Situaciones</h2>
        <div class="col-lg-6">
            @foreach ($situaciones as $situacion)
                <div class="card mb-4" style="width: 30rem; background-color: #E7DDD5;">

                    <div class="card-body">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-5">
                                <h5>{{ $situacion->titulo }}</h5>
                            </div>
                            <div class="col-lg-7">
                                <button data-toggle="modal"
                                    data-target="#AprobarSituacion{{ $situacion->id_situaciones }}"
                                    class="btn btn-success">Aprobar</button>
                                <button class="btn btn-danger">Desaprobar</button>
                            </div>
                        </div>
                        </div>
                        <p class="card-text">{{ $situacion->descripcion }}</p>
                        <p class="card-text">{{ $situacion->fecha_in() }}</p>
                        @foreach ($users as $u)
                            @if ($u->id == $situacion->id_user)
                                <p>Peticion realizada por:
                                    {{ $u->name . ' ' . $u->apellido_pat . ' ' . $u->apellido_mat }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
                {{-- @include('admin.situaciones.aprobar') --}}
            @endforeach
        </div>
        <div class="col-lg-8">

        </div>
    </div>
@endsection
