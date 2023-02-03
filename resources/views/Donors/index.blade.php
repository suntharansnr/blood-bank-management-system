@extends('layouts.backend_master')
@section('content')


<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                            <h2>Donors Management</h2>
                            <div class="ml-auto mr-3">
                                 <a class="btn btn-success" href="{{ route('donors.create') }}"><i class="fa fa-plus"></i> Create New donor</a>
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
                    <th>NIC NO</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Contact No</th>
                    <th>Blood Type</th>
                    <th>type of blood</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($data as $key => $Donor)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $Donor->user->name }}</td>
                      <td>{{ $Donor->nic }}</td>
                      <td>{{ $Donor->d_age }}</td>
                      <td>{{ $Donor->d_addr }}</td>
                      <td>{{ $Donor->d_gender }}</td>
                      <td>{{ $Donor->d_phone}}</td>
                      <td>{{ $Donor->blood_type }}</td>
                      <td>{{ $Donor->type_rh }}</td>
                      <td>
                         <a class="text-info" href="{{ route('donors.show',$Donor->id) }}"> <i class="fa fa-eye"></i> </a>
                         <a class="text-warning" href="{{ route('donors.edit',$Donor->id) }}"> <i class="fa fa-edit"></i> </a>
                          {!! Form::open(['method' => 'DELETE','route' => ['donors.destroy', $Donor->id],'style'=>'display:inline']) !!}
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
