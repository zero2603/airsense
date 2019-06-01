

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
    {{-- <div class="for">
        <form action="{{url('/vidu')}} " method="POST">
            @csrf
            <label for="">Post</label>
            <input type="text" value="" name="post">
            <button class="btn btn-primary" type="submit">SUBMIT</button>
        </form>
    </div> --}}
    <form action="{{url('/edit')}} " method="POST" >
        @csrf
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" class="form-control" name=tieude>
        </div>
        <div class="form-group">
            <textarea name="post" id="post">vsbfj</textarea>
            <script>CKEDITOR.replace('post');</script>
        </div>
        <div class="form-group">
            <label for="image" class=" col-form-label text-md-right">Image</label>

            <div class="">
                <input id="image" type="file" accept="image/*" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">SUBMIT</button>
     </form>
@endsection
<script src="admin/ckeditor/ckeditor.js"></script>
</body>
</html>