@extends('layouts.app')  

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Producto</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('productos.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                    @if ($errors->has('nombre'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                <label for="descripcion" class="col-md-4 control-label">Descripción</label>

                                <div class="col-md-6">
                                    <textarea id="descripcion" class="form-control" name="descripcion" required>{{ old('descripcion') }}</textarea>

                                    @if ($errors->has('descripcion'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('descripcion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                                <label for="precio" class="col-md-4 control-label">Precio</label>

                                <div class="col-md-6">
                                    <input id="precio" type="number" class="form-control" name="precio" value="{{ old('precio') }}" required>

                                    @if ($errors->has('precio'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('precio') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('existencias') ? ' has-error' : '' }}">
                                <label for="existencias" class="col-md-4 control-label">Existencias</label>

                                <div class="col-md-6">
                                    <input id="existencias" type="number" class="form-control" name="existencias" value="{{ old('existencias') }}" required>

                                    @if ($errors->has('existencias'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('existencias') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Crear Producto
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
