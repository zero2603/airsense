@extends('layouts.admin')
@section('title','List Users')
<div>
  @section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <a href={{url('/admin/user/create')}}>
      <button class="btn btn-outline-primary" style="margin-bottom : 5px">
        Create User
      </button>
    </a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th width=5% style="text-align:center">Edit</th>
                <th width=10% style="text-align:center">Delete</th>

              </tr>
            </thead>

            <tbody>
              @foreach ($user as $item)
              <tr>
                <td>
                  {{$item->name}}
                </td>
                <td style="text-align:center">
                  <form method="GET" action={{url('/admin/user/'.$item->id.'/edit')}}>
                    @csrf
                    <button type="submit">Edit</button>
                  </form>
                </td>
                <td style="text-align:center">
                  <form method="POST" action={{url('/admin/user/'.$item->id)}}>
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

  </div>
  <!-- /.container-fluid -->
  <!-- End of Main Content -->
  @endsection
</div>