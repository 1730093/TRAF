@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <h1>Situaciones</h1>

        <div class="row">

            <div class="col-lg-4">
                <div class="card text-white  mb-3" style=" width: 100%; height: 200; background-color: #6261B1;">
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
            </div>
            <div class="col-lg-8 ">
                <h3>Situaciones</h3>
                @foreach ($situaciones as $situacion)
                    <div class="row">
                        <!-- dentro del for -->
                        <div class="card mb-3" style=" width: 100%; height: 100; background-color: #E7DDD5;">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h2>{{ $situacion->titulo }}</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-success">Aprobar</button>
                                        <button class="btn btn-danger">Desaprobar</button>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-7">
                                        {{ $situacion->descripcion }}
                                        <br>
                                        {{ $situacion->fecha_peticion }}
                                        <br>
                                        {{ $situacion->id_user }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach
                <div>

                </div>

            </div>
        </div>
    @endsection
