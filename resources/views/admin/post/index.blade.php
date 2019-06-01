
@extends('layouts.admin')
@section('content')
    {{-- <table border="1px">
        <tr>
            <td style="width:40px;">ID</td>
            <td style="width:150px;">TIÊU ĐỀ</td>
            <td style="width:500px;">NỘI DUNG</td>
            <td style="width:100px;">HÌNH ẢNH</td>
            <td style="width:70px;text-aligin:center;"></td>
            <td style="width:70px;"></td>
        </tr>
        @foreach($post as $po)
            <tr>
                <td>{{$po->id}}</td>
                <td>{{$po->tieude}}</td>
                <td>{{$po->post}}</td>
                <td>{{$po->image}}</td>
                <td style="width:70px;text-aligin:center;">
                    <form method="GET" action="{{url('/editpost/'.$po->id)}}">
                    @csrf
                    <button type="submit">Edit</button>
                    </form>
                </td>
                <td style="width:70px;text-aligin:center;">
                    <form method="POST" action="{{url('/master/'.$po->id)}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        
    </table> --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Post</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              {{-- <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Post</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
              </tfoot> --}}
              <tbody>
                @foreach($post as $po)
                <tr>
                    <td>{{$po->id}}</td>
                    <td>{{$po->tieude}}</td>
                    <td>{{$po->post}}</td>
                    <td>{{$po->image}}</td>
                    <td style="width:70px;text-aligin:center;">
                        <form method="GET" action="{{url('/editpost/'.$po->id)}}">
                        @csrf
                        <button type="submit">Edit</button>
                        </form>
                    </td>
                    <td style="width:70px;text-aligin:center;">
                        <form method="POST" action="{{url('/master/'.$po->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection
</body>
</html>