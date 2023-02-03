@extends('layouts.backend_master')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                            <h2>Stocks management</h2>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Blood Type</th>
                    <th>Rh type</th>
                    <th>Blood volume</th>
                    <th>Expiry Date</th>
                    <th>Receive Date</th>
                    <th>Send Status</th>
                    <th>Expire Status</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($data as $key => $donation)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $donation->blood_type }}</td>
                      <td>{{ $donation->type_rh }}</td>
                      <td>
                          {{$donation->blood_volume}}
                      </td>
                      <td>
                          {{$donation->blood_expire_date}}
                      </td>
                      <td>
                          {{$donation->blood_receive_date}}
                      </td>
                      <td>
                          {{$donation->send_status}}
                      </td>
                      <td>
                          {{$donation->expire_status}}
                      </td>
                      <td>
                         <a class="btn btn-info btn-sm" href="{{route('stocks.show',$donation->id) }}"><i class="fa fa-eye"></i></a>
                         <a class="btn btn-warning btn-sm" href="{{ route('stocks.edit',$donation->id) }}"><i class="fa fa-edit"></i></a>
                          {!! Form::open(['method' => 'DELETE','route' => ['stocks.destroy', $donation->id],'style'=>'display:inline']) !!}
                              <button class="btn btn-danger btn-sm" type="submit" name="button"> <i class="fa fa-trash"></i> </button>
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

<script type="text/javascript">
  $("select[name='blood_status']").change(function(){
      var donation_id = $(this).data('id');
      var blood_status = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{asset("")}}change_bloodstatus/" + donation_id,
          method: 'POST',
          data: {blood_status:blood_status, _token:token},
          success: function(data) {
            toastr.success('Blood status updated successfully');
          }
      });
  });
</script>
@endsection
