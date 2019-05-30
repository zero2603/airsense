@extends('layouts.admin')

@section('title','Create User')
<div class="container">
    @section('content')
    <h2>Create User</h2>
    <form method="POST" action="{{ url('admin/user') }}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="data[name]" />
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="data[password]" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="data[email]" />
        </div>
        <div class="form-group">
            <label>Admin Permissions</label>
            <input type="number" class="form-control" name="data[is_admin]" />
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    @endsection
</div>