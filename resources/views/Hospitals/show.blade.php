@extends('layouts.backend_master')
@section('content')
<div class="container-fluid">
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> Back</a>
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
                    <b>Name</b> <a class="float-right">{{ $Hospital->name }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right">{{ $Hospital->address }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone No</b> <a class="float-right">{{$Hospital->phone }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{ $Hospital->email }}</a>
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
