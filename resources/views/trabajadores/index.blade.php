@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Trabajadores</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('trabajadores.create') }}" class="btn btn-warning">Nuevo</a>

                            <div class="table-responsive">
                                <table class="table table-striped mt-2">
                                    <thead style="background-color: #6777ef">
                                        <th style="display: none">ID</th>
                                        <th style="color: #fff">Nombres</th>
                                        <th style="color: #fff">Apellidos</th>
                                        <th style="color: #fff">DNI</th>
                                        <th style="color: #fff">Fecha nacimiento</th>
                                        <th style="color: #fff">Correo</th>
                                        <th style="color: #fff">Telefono</th>
                                        <th style="color: #fff">Grupo sanguineo</th>
                                        <th style="color: #fff">Cuenta bancaria</th>
                                        <th style="color: #fff">Estado</th>
                                        <th style="color: #fff">Fondo pensiones</th>
                                        <th style="color: #fff">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($trabajadores as $trabajador)
                                            <tr>
                                                <td style="display: none">{{$trabajador->id}}</td>
                                                <td>{{$trabajador->nombres}}</td>
                                                <td>{{$trabajador->apellido_paterno." ".$trabajador->apellido_materno}}</td>
                                                <td>{{$trabajador->DNI}}</td>
                                                <td>{{$trabajador->fecha_nacimiento}}</td>
                                                <td>{{$trabajador->correo}}</td>
                                                <td>{{$trabajador->telefono}}</td>
                                                <td>{{$trabajador->grupo_sanguineo}}</td>
                                                <td>{{$trabajador->cuenta_bancaria}}</td>
                                                <td>{{$trabajador->estado}}</td>
                                                <td>{{$trabajador->fondo_pensiones}}</td>

                                                <td>
                                                    <a class="btn btn-info" href="{{ route('trabajadores.edit', $trabajador->id)}}">Editar</a>
                                                    {!! Form::open(['method'=> 'DELETE', 'route'=>['trabajadores.destroy', $trabajador->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
