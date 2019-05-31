@extends('Project.layout')
@section('content')
<h1>Edit Project</h1>
<form method="POST" action="/project/{{$project->id}}">

	{{ csrf_field() }}
	{{method_field("PATCH")}}
	<input type="text" name="title" value="{{ $project->title }}"/>
	<input type="text" name="description" value="{{ $project->description }}"/>
	<input type="submit" name="update" value="update">

</form>
<form action="/project/{{$project->id}}" method="POST">
	@csrf
	{{method_field("DELETE")}}  
	<!-- @method("Delete") same as above -->
<input type="submit" name="delete" value="delete">
</form>

@endsection