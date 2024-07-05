@extends('admin.layouts.master')

@section('content')

<div class="main">
    <h1>Edit User</h1>
    <div class="main-container">
      <form action="{{ route('admin.manage-users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option {{$user->role == "user" ? 'selected' : ""}} value="user">User</option>
                <option {{$user->role == "superuser" ? 'selected' : ""}} value="superuser">Superuser</option>
                <option {{$user->role == "admin" ? 'selected' : ""}} value="admin">Admin</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option {{$user->status == "active" ? 'selected' : ""}} value="active">Active</option>
                <option {{$user->status == "inactive" ? 'selected' : ""}} value="inactive">Inactive</option>
            </select>
        </div>

        <div class="form-group">
            <label for="password">New Password:</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
    </div>
</div>

@endsection
