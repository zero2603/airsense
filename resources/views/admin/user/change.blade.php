@extends('layouts.admin')

@section('title','Edit User')
<div>
    @section('content')
    <h1>Edit User</h1>
    <form action="{{url('/admin/user/'.$data->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="data[name]" value="{{ $data->name }}" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="data[email]" value="{{ $data->email }}" />
        </div>
        <div class="form-group">
            <label>Admin Permissions</label>
            <input type="number" class="form-control" name="data[is_admin]" value="{{ $data->is_admin }}" />
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    @endsection
</div>