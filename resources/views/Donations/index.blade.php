@extends('layouts.backend_master')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                            <h2>Donations management</h2>
                            <div class="ml-auto mr-3">
                                 <a class="btn btn-success" href="{{ route('donations.create') }}"><i class="fa fa-plus"></i> New Donation</a>
                            </div>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Blood Quantity</th>
                    <th>Blood Approval Status</th>
                    <th>Donate Date</th>
                    <th>Result Date</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($data as $key => $donation)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $donation->blood_qty }}</td>
                      <td>
                        <form class="" action="" method="">
                          <select class="form-control" name="blood_status" data-id="{{$donation->id}}">
                            @if($donation->blood_status == 'Approve')
                              <option value="Approve" selected>Approve</option>
                            @else
                              <option value="Approve">Approve</option>
                            @endif

                            @if($donation->blood_status == 'Disapprove')
                              <option value="Disapprove" selected>Disapprove</option>
                            @else
                              <option value="Disapprove">Disapprove</option>
                            @endif

                            @if($donation->blood_status == 'pending')
                              <option value="pending" selected>Pending</option>
                            @else
                              <option value="pending">Pending</option>
                            @endif
                          </select>
                        </form>
                      </td>
                      <td>
                          {{$donation->donate_date}}
                      </td>
                      <td>
                          {{$donation->result_date}}
                      </td>
                      <td>
                         <a class="text-info" href="{{ route('donations.show',$donation->id) }}"> <i class="fa fa-eye"></i> </a>
                         <a class="text-warning" href="{{ route('donations.edit',$donation->id) }}"> <i class="fa fa-edit"></i> </a>
                          {!! Form::open(['method' => 'DELETE','route' => ['donations.destroy', $donation->id],'style'=>'display:inline']) !!}
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
