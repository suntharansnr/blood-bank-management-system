@extends('layouts.backend_master')
@section('content')


<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                            <div class="mr-auto mr-3">
                                 <h2>Hospitals Management</h2>
                            </div>
                            <div class="ml-auto mr-3">
                                 <a href="{{route('hospitals.create')}}" class="btn btn-success float-right"> <i class="fa fa-plus"></i> New hospital</a>
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
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($data as $key => $Hospital)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $Hospital->name }}</td>
                      <td>{{ $Hospital->address }}</td>
                      <td>{{ $Hospital->phone }}</td>
                      <td>{{ $Hospital->email }}</td>
                      <td>
                         <a class="text-info" href="{{ route('hospitals.show',$Hospital->id) }}"><i class="fa fa-eye"></i></a>
                         <a class="text-warning" href="{{ route('hospitals.edit',$Hospital->id) }}"><i class="fa fa-edit"></i></a>
                          {!! Form::open(['method' => 'DELETE','route' => ['hospitals.destroy', $Hospital->id],'style'=>'display:inline']) !!}
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
