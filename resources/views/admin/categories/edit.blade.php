@extends('layouts.app')





@section('content')
	
	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading">

			Update Categroy::{{ $category->name }}

		</div>

	

		<div class="panel-body">

			<form action="{{ route('category.update',['id'=> $category->id])}}" method="post">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name"> Name  </label>
				<input type="text" name="name" class="form-control" value="{{ $category->name }}">
			</div>

			<div class="form-group">
				<button class="btn btn-success" type="submit"> 
					update Category
				</button>
			</div>

		

			</form>

		</div>

	</div>	


@stop