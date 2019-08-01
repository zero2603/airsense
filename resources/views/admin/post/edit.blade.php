<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.admin')
@section('content')   

    <form action="{{url('/update/'.$post->id)}}"  method="POST" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" value={{$post->tieude}} class="form-control" name=tieude>
        </div>
        <div class="form-group">
            <textarea name="post" id="post">{{$post->post}}</textarea>
            <script>CKEDITOR.replace('post');</script>
        </div>
        <div class="form-group">
            <label for="image" class=" col-form-label text-md-right">Image</label>

            <div class="">
                <input id="image"  type="file" accept="image/*" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">SUBMIT</button>
     </form>
     <script src="admin/ckeditor/ckeditor.js"></script>
@endsection
</body>
</html>