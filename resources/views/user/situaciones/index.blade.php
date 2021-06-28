@extends('layouts.appuser')
@section('content')
    <!-- Dentro de FOR -->
    @if (session('resultado'))
        <div class="alert alert-success" role="alert">
            {{ session('resultado') }}
        </div>
    @else

    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-8">
                <h3>Situaciones</h3>
                <button class="btn btn-primary" data-toggle="modal" data-target="#AgregarSituacion">Agregar
                    situacion</button>
            </div>
        </div>
        <br>
        <div class="row">

            {{-- <div class="col-lg-4">
                <div class="card text-white  mb-3" style=" width: 100%; height: 200; background-color: #6261B1;">
                    <div class="card-header">Buscar</div>
                    <div class="card-body">

                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <!--<h5 class="card-title">Dark card title</h5>
                                                <p class="card-text"> content.</p>-->
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
            </div> --}}

            <div class="col-lg-12">
                <div class="row">
                    @foreach ($situaciones as $situacion)
                        <!-- dentro del for -->
                        <div class="card mb-3" style=" width: 800px; height: 300px; background-color: #E7DDD5;">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h2>{{ $situacion->titulo }}</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <button data-toggle="modal" data-target="#EditarSituacion{{ $situacion->id_situaciones }}" class="btn btn-warning">Editar</button>
                                        <button data-toggle="modal" data-target="#EliminarSituacion{{ $situacion->id_situaciones }}" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                            <div class=" card-body">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h4>Descripcion de la situacion</h4>
                                        {{ $situacion->descripcion }}<br>
                                        <h4>Fecha de la situacion</h4>
                                        {{ $situacion->fecha_peticion }}
                                    </div>
                                </div>
                            </div>

                        </div>
                                                  
                        @include('user.situaciones.editar')
                        @include('user.situaciones.eliminar')
                       

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('user.situaciones.agregar')
@endsection
