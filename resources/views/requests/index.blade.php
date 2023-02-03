@extends('layouts.backend_master')
@section('content')


<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                            <h2>Blood requests management</h2>
                            <div class="ml-auto mr-3">
                                 <a class="btn btn-success" href="{{ route('requests.create') }}"><i class="fa fa-plus"></i></a>
                            </div>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Hospital Name</th>
                    <th>Blood Type</th>
                    <th>Type Rh</th>
                    <th>Blood Quantity</th>
                    <th>Request Date</th>
                    <th>Request status</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($data as $key => $Request)
                    <tr>
                      <td>{{ $Request->id }}</td>
                      <td>{{ $Request->hospital->name }}</td>
                      <td>{{ $Request->blood_type }}</td>
                      <td>{{ $Request->type_rh }}</td>
                      <td>{{ $Request->request_amount }}</td>
                      <td>{{ $Request->request_date }}</td>
                      <td><span class="badge badge-success">{{ $Request->request_status }}</span></td>
                      <td>
                         <a class="text-info" href="{{ route('requests.show',$Request->id) }}"> <i class="fa fa-eye"></i> </a>
                         <a class="text-warning" href="{{ route('requests.edit',$Request->id) }}"> <i class="fa fa-edit"></i> </a>
                          {!! Form::open(['method' => 'DELETE','route' => ['requests.destroy', $Request->id],'style'=>'display:inline']) !!}
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
