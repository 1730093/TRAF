@extends('layouts.app')
@section('content')

    @if (session('resultado'))
        <div class="alert alert-success" role="alert">
            {{ session('resultado') }}
        </div>
    @else

    @endif

    <h1>Roles de administrador</h1>
    <!-- Dentro de FOR -->
    <div class="row">

        <div class="col-lg-12 ">

            <div class="container">
                <h2>Roles</h2>
                <br>
                <div class="row">
                    <div class="col-lg-7">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#AgregarRol">Nuevo rol</button>

                    </div>
                    <div class="col-lg-5">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" name="rol_buscado" type="search" placeholder="Buscar." aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                          </form>
                        
                    </div>
                </div>
                <div class="row">

                </div>
                <br>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Rol</th>
                            <th scope="col" colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($rol as $r)

                            <tr>

                                <td>{{ $r->rol }}</td>
                                <td><button class="btn btn-outline-warning" data-toggle="modal"
                                        data-target="#EditarRol{{ $r->id_rol }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="32" height="32" fill="currentColor" class="bi bi-pencil-square"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></button> 
                                    @include('admin.roles.editar')
                                    </td>
                                <td><button class="btn btn-outline-danger" data-toggle="modal"
                                        data-target="#EliminarRol{{ $r->id_rol }}"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></button>
                                        @include('admin.roles.eliminar')
                                    </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
        @include('admin.roles.agregar')

        <!-- Fin -->
    @endsection
