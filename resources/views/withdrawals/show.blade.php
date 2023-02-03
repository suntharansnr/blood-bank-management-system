@extends('layouts.backend_master')
@section('content')
<div class="container-fluid">
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('Requests.index') }}"> Back</a>
</div>
</div>
<hr>
<div class="container-fluid" style="padding-left:0px !important">
<div class="col-md-6" style="margin-left:25%;">
<!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">


                    <b>Hospital Name</b> <a class="float-right">{{$request->hname}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Blood Type</b> <a class="float-right">{{$request->B_type}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Blood Quantity</b> <a class="float-right">{{$request->B_quantity}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Request Date</b> <a class="float-right">{{$request->Requestdate}}</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
</div>




    </div>

</div>




@endsection
