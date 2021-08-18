@extends('adminlte::page')
@section('title', 'Home Admin | User Management')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                          		
                	<table>
						  <thead>
						    <tr>
						      <th scope="col" class="col-md-13">Users</th>
						      <th scope="col" class="col-md-2"><a href="{{ route('admin.users.register') }}" class="float-right"><button type="submit" class="btn btn-warning">New User</button></a></th>
						    </tr>
						  </thead>
					</table>
                </div>

                <div class="card-body">

	                	<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Nombre</th>
						      <th scope="col">Email</th>
						      <th scope="col">Roles</th>
						      <th scope="col">Actions</th>
						    </tr>
						  </thead>
						  <tbody>
							@foreach($users as $user)
		              	    <tr>
						      <th scope="row">{{ $user->id}}</th>
						      <td>{{ $user->name}}</td>
						      <td>{{$user->email}}</td>
						      <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
						      <td>
						      	<a href="{{ route('admin.users.edit', $user->id) }}" type="button" class="btn btn-primary float-left">Edit</a>
								<form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left">
									@csrf
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-warning">Delete</button>
								</form>
						      </td>
						    </tr>
						    @endforeach
						  </tbody>
						</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
