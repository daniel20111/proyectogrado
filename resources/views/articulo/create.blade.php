@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>CREAR REGISTROS</h2>
    <form action="/articulos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input id="codigo" type="text" name="codigo" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input id="descripcion" type="text" name="descripcion" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" type="text" name="cantidad" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" type="number" name="precio" step="any" value="0.00" class="form-control" tabindex="1">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex='4'>Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop