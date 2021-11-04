@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<div class="card" style="background-color:rgb(1,0,0,0); border-color:rgb(237,95,74,255); color:white;">
    			<div class="card-header" style="background-color:rgb(1,0,0,0); border-color:rgb(237,95,74,255); color:white;">EDITAR TAREA</div>

    			<div class="card-body">
    				<form method="POST" action="{{ route('tareas.update', $task->id) }}">
    					{{ csrf_field() }}
    					{{ method_field('PUT') }}
    					
    					<div class="form-group">
    						<label>Titulo de Tarea</label>
    						<input type="text" name="name" class="form-control" value="{{ $task->title }}" required="">
    					</div>

    					<div class="form-group">
    						<label>Fecha de Entrega</label>
    						<input type="date" name="deadline" value="{{ $task->deadline }}" class="form-control">
    					</div>

    					<div class="form-group">
    						<label>Descripción</label>
    						<textarea class="form-control" name="description" rows="5">{{ $task->description }}</textarea>
    					</div>

						<div class="form-group">
	      				<label>Estado</label>
	      				<select class="form-control" name="status">
	      					<option value="En Proceso">En Proceso</option>
	      					<option value="Terminado">Terminado</option>
	      					<option value="Atrasado">Atrasado</option>
	      					<option value="Cancelado">Cancelado</option>
	      				</select>
	      				</div>

    					<button type="submit" class="btn btn-outline-primary">Actualizar</button>

    					<a href="{{ route('proyectos.index') }}" class="btn btn-outline-danger">Cancelar</a>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection