@extends('admin.template.main')

@section('title', 'Listado de  Tags')

@section('content')
     <a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar nueva tag</a>
     <table class="table table-striped">
            <thead>
            	 <th>Id</th>
            	 <th>Nombre</th>            	 
            	 <th>Accion</th>
            </thead>
            <tbody>
            	@foreach($tags as $tag)
            	   <tr>
            	   	   <td>{{ $tag->id }}</td>
            	   	   <td>{{ $tag->name }}</td> 
            	   	   <td>
            	   	         <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            	   	         <a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('Seguro que desead eliminar el Tag?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            	   	   </td>  	   
            	   </tr>
            	@endforeach   
            </tbody>
      </table>
      {!! $tags->render() !!}
@endsection