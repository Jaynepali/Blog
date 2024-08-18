@extends('admin.admin')

@section('title', 'Edit User')

@section('content')
<h1>Edit User</h1>
<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
    </div>
    @if( Auth::user()->role==='admin')

    <div class="mb-3">
        <label for="Role" class="form-label">Role</label>
        <select id="role" name="role" class="form-select" aria-label="Select role">
            <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="author" {{ old('role', $user->role) === 'author' ? 'selected' : '' }}>Author</option>
            <option value="user" {{ old('role', $user->role) === 'user' ? 'selected' : '' }}>User</option>
        </select>


        {{-- <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required> --}}
    </div>
    @endif
    <div class="mb-3">
        <label for="password" class="form-label">Password (Leave blank to keep current password)</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
