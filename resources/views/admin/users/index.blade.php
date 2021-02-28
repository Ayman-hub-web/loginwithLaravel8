@extends('templates.main')
@section('content')
<div class="row">
    <div class="col-12">
    <h1 class="float-left">Users</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-success" role="button" style="float:right;">Create</a>
    </div>
</div>
    <div class="card">
    {{$users->links()}}
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                    @foreach($user->roles as $role)
                    {{$role->name}},
                    @endforeach
                    </td>
                    <td>
                    <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                    
                    document.getElementById('delete-user-form-{{$user->id}}').submit();">
                        Delete
                    </button>
                    <form id="delete-user-form-{{$user->id}}" action="{{ route('admin.users.destroy', $user->id) }}" method="post" style="display:none;">
                        @csrf 
                        @method('DELETE')
                    </form>
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$users->links()}}
    </div>
@endsection