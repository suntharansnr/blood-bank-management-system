
@extends('layouts.backend_master')
@section('content')


<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                            <h2>users Management</h2>
                            <div class="ml-auto mr-3">
                                 <a class="btn btn-success" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> New User</a>
                            </div>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($data as $key => $user)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        @if(!empty($user->getRoleNames()))
                          @foreach($user->getRoleNames() as $v)
                             <label class="badge badge-success">{{ $v }}</label>
                          @endforeach
                        @endif
                      </td>
                      <td>
                         <a href="{{ route('users.show',$user->id) }}" class="text-info"> <i class="fa fa-eye"></i> </a>
                         <a href="{{ route('users.edit',$user->id) }}" class="text-warning"> <i class="fa fa-edit"></i> </a>
                          {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                              <button type="submit" name="button" style="background:none !important;border:none !important;padding-left:0px !important" class="text-danger"> <i class="fa fa-trash"></i> </button>
                          {!! Form::close() !!}
                      </td>
                    </tr>
                   @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
{!! $data->render() !!}


@endsection

@section('js')
<script>
$(function () {
  $("#example1").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
  });
});
</script>
@endsection
