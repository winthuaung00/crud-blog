@extends('layouts.app')







@section('content')

<div class="panel panel-default">

	<div class="panel-heading">
		
		User::
		
	</div>
	
	<div class="panel-body">
		
		<table class="table table-hover">
			
			<thead>
				
				<th> Image</th>

				<th> Name</th>

				<th> Permission</th>

				<th> Delete</th>

			</thead>

			<tbody>

				@if($users->count() > 0)
				
						@foreach($users as $user)

				<tr> 
					
					<td> 

						<img src="{{asset($user->profile->avatar) }}" alt="" width="60px" height="60px" style="border-radius: 50%">
					</td>

					<td>
						
						{{$user->name}}

					</td>

					<td>
						
						  @if($user->admin)
								<a href="{{ route('user.not.admin',['id'=>$user->id]) }}"  class="btn btn-xs btn-danger"> 
										remove permission
								</a>
								admin	
						  @else
								<a href="{{ route('user.admin',['id'=>$user->id]) }}" class="btn btn-xs btn-success" > 
										make admin
								</a>
								not admin

						  @endif

					</td>

					<td>
						@if(Auth::id() !== $user->id)
						<a href="{{route('user.profile.delete',['id'=>$user->id])}}" class="btn btn-xs btn-danger"> Delete
						</a>
						@endif

					</td>
				</tr>
				
				@endforeach

			@else
			
				<tr> 
					<th colspan="5" class="text-center"> No users</th>
				</tr>

			@endif	

			</tbody>


		</table>

	</div>
	
</div>














@stop