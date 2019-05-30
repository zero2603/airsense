@extends('layouts.admin')

@section('title','List User')
<div class="container">
    @section('content')

    <a href={{url('/admin/user/create')}}>
        <button class="btn btn-outline-primary">
            Create User
        </button>
    </a>

    @foreach ($user as $item)
    <div class="row">
        <div class="col-md-8">
            <h4>{{$item->name}}</h4>

        </div>
        <div class="col-md-2">
            <form method="GET" action={{url('/admin/user/'.$item->id.'/edit')}}>
                @csrf
                <button type="submit">Edit</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="POST" action={{url('/admin/user/'.$item->id)}}>
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    @endsection
</div>