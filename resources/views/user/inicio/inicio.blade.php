@extends('layouts.appuser')
@section('content')
    <div class="container" style="margin-top: 20px;">

        {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are in Inicio!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <h2>Actividades de usuario</h2>
        <!-- Dentro de FOR -->
        <div class="row">
            <div class="col-lg-4">
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
                <!-- dentro del for -->
                <div class="card  mb-3" style=" width: 100%; height: 200; background-color: #E7DDD5;">
                    <div class="card-header">
                        <h3>Titulo de la actividad</h3>
                    </div>
                    <div class=" card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                Descripción breve o larga. <br>
                                Fecha.
                            </div>
                            <div class="col-lg-5">
                                <button class="btn btn-success">Finalizar</button>
                                <button class="btn btn-warning">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        Evidencia.
                    </div>
                </div>

                <!-- dentro del for -->
                <div class="card  mb-3" style=" width: 100%; height: 200; background-color: #E7DDD5;">
                    <div class="card-header">
                        <h3>Titulo de la actividad</h3>
                    </div>
                    <div class=" card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                Descripción breve o larga. <br>
                                Fecha.
                            </div>
                            <div class="col-lg-5">
                                <button class="btn btn-success">Finalizar</button>
                                <button class="btn btn-warning">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        Evidencia.
                    </div>
                </div>
                <!-- dentro del for -->
                <div class="card  mb-3" style=" width: 100%; height: 200; background-color: #E7DDD5;">
                    <div class="card-header">
                        <h3>Titulo de la actividad</h3>
                    </div>
                    <div class=" card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                Descripción breve o larga. <br>
                                Fecha.
                            </div>
                            <div class="col-lg-5">
                                <button class="btn btn-success">Finalizar</button>
                                <button class="btn btn-warning">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        Evidencia.
                    </div>
                </div>
                <!-- dentro del for -->
                <div class="card  mb-3" style=" width: 100%; height: 200; background-color: #E7DDD5;">
                    <div class="card-header">
                        <h3>Titulo de la actividad</h3>
                    </div>
                    <div class=" card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                Descripción breve o larga. <br>
                                Fecha.
                            </div>
                            <div class="col-lg-5">
                                <button class="btn btn-success">Finalizar</button>
                                <button class="btn btn-warning">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        Evidencia.
                    </div>
                </div>
                <!-- dentro del for -->
                <div class="card  mb-3" style=" width: 100%; height: 200; background-color: #E7DDD5;">
                    <div class="card-header">
                        <h3>Titulo de la actividad</h3>
                    </div>
                    <div class=" card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                Descripción breve o larga. <br>
                                Fecha.
                            </div>
                            <div class="col-lg-5">
                                <button class="btn btn-success">Finalizar</button>
                                <button class="btn btn-warning">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        Evidencia.
                    </div>
                </div>
            </div>



        </div>
        <!-- Dentro de FOR -->
    </div>
@endsection
