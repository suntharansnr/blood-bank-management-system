@extends('layouts.backend_master')
@section('content')


<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                            <h2>Roles Management</h2>
                            <div class="ml-auto mr-3">
                                 <a class="btn btn-success" href="{{ route('roles.create') }}"><i class="fa fa-plus"></i> New Role</a>
                            </div>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <tr>
                       <th>No</th>
                       <th>Name</th>
                       <th width="280px">Action</th>
                    </tr>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($roles as $key => $role)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $role->name }}</td>
                      <td>
                         <a class="text-info" href="{{ route('roles.show',$role->id) }}"> <i class="fa fa-eye"></i> </a>
                         <a class="text-warning" href="{{ route('roles.edit',$role->id) }}"> <i class="fa fa-edit"></i> </a>
                          {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
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
{!! $roles->render() !!}


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
