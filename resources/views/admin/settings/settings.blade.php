@extends('layouts.app')





@section('content')
	
	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading">

			Edit Blog Setting

		</div>

	

		<div class="panel-body">

			<form action="{{ route('setting.update')}}" method="post">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name"> Site Name </label>
				<input type="text" name="site_name" value="{{$settings->site_name }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="name"> Address </label>
				<input type="text" name="address" value ="{{$settings->address}}" class="form-control">
			</div>

			<div class="form-group">
				<label for="name"> Site Email </label>
				<input type="text" name="contact_email" value ="{{$settings->contact_email }}"class="form-control">
			</div>
			<div class="form-group">
				<label for="name"> Phone Number </label>
				<input type="text" name="contact_number" value ="{{$settings->contact_number}}" class="form-control">
			</div>
			


			<div class="form-group">
				<button class="btn btn-success" type="submit"> 
					updated blog 
				</button>
			</div>

		

			</form>

		</div>

	</div>	


@stop