@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Blog</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                        <form action="{{ route('trabajadores.update', $trabajador->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nombres">Nombres</label>
                                        <input type="text" name="nombres" class="form-control" value="{{ $trabajador->nombres }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="apellido_paterno">apellido_paterno</label>
                                        <input type="text" name="apellido_paterno" class="form-control" value="{{ $trabajador->apellido_paterno }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="apellido_materno">apellido_materno</label>
                                        <input type="text" name="apellido_materno" class="form-control" value="{{ $trabajador->apellido_materno }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="DNI">DNI</label>
                                        <input type="text" name="DNI" class="form-control" value="{{ $trabajador->DNI }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="direccion">direccion</label>
                                        <input type="text" name="direccion" class="form-control" value="{{ $trabajador->direccion }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="fecha_nacimiento">fecha_nacimiento</label>
                                        <input type="date" name="fecha_nacimiento" class="form-control" value="{{ $trabajador->fecha_nacimiento }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="correo">correo</label>
                                        <input type="text" name="correo" class="form-control" value="{{ $trabajador->correo }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="telefono">telefono</label>
                                        <input type="text" name="telefono" class="form-control" value="{{ $trabajador->telefono }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="grupo_sanguineo">grupo_sanguineo</label>
                                        <input type="text" name="grupo_sanguineo" class="form-control" value="{{ $trabajador->grupo_sanguineo }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="cuenta_bancaria">cuenta_bancaria</label>
                                        <input type="text" name="cuenta_bancaria" class="form-control" value="{{ $trabajador->cuenta_bancaria }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="estado">estado</label>
                                        <input type="text" name="estado" class="form-control" value="{{ $trabajador->estado }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="fondo_pensiones">fondo_pensiones</label>
                                        <input type="text" name="fondo_pensiones" class="form-control" value="{{ $trabajador->fondo_pensiones }}">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
