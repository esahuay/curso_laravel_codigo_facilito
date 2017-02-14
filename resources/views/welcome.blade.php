@extends('admin.template.main')

@section('title')
Inicio de mi pagina
@endsection

@section('content')
       <h1>Inicio</h1>
       <a href="{{ route('admin.users.index') }}" class="btn btn-success">Usuarios</a>
@endsection