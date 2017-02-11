@extends('admin.template.main')

@section('title', 'Editar Categorias ' . $category->name)

@section('content')
    {!! Form::open(['route' => ['admin.categories.update', $category],'method' => 'PUT']) !!}

         <div class="form-group">
            {!! Form::label('name', 'Categoria') !!}
            {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Poner una categoria', 'required']) !!}
         </div>

         <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}          
         </div>
    {!! Form::close() !!}
@endsection