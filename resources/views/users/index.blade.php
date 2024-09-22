@extends('admin.admin')

@section('title', 'Users')

@section('content')
<h1>Users</h1>
<a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Add New User</a>
<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
<table class="table">

    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                    @if(Auth::user()->role ==='admin')
                       <a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-sm">upade user role</a>
                     @endif
                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
