@extends('admin.template.main')

@section('title', 'Listado de  categorias')

@section('content')
     <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoria</a>
     <table class="table table-striped">
            <thead>
            	 <th>Id</th>
            	 <th>Nombre</th>            	 
            	 <th>Accion</th>
            </thead>
            <tbody>
            	@foreach($categories as $category)
            	   <tr>
            	   	   <td>{{ $category->id }}</td>
            	   	   <td>{{ $category->name }}</td> 
            	   	   <td>
            	   	         <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            	   	         <a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('Seguro que desead eliminar el usuario?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            	   	   </td>  	   
            	   </tr>
            	@endforeach   
            </tbody>
      </table>
      {!! $categories->render() !!}
@endsection