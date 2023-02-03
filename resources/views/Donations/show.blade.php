@extends('layouts.backend_master')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="float-left">
        <h2>Show donation</h2>
    </div>
    <div class="float-right">
        <a class="btn btn-primary" href="{{ route('donations.index') }}"> <i class="fa fa-backward"></i> </a>
    </div>
  </div>
  <div class="card-body">
    <div class="col-md-6" style="margin-left:25%;">
    <!-- Profile Image -->
                <div class="card">
                  <div class="card-body box-profile">
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Blood quantity</b> <a class="float-right">{{$donation->blood_qty}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Blood status</b> <a class="float-right">{{$donation->blood_status}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Donate date</b> <a class="float-right">{{$donation->donate_date}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Result date</b> <a class="float-right">{{$donation->result_date}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Blood type</b> <a class="float-right">{{$donation->blood_type}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Sysphilis</b> <a class="float-right"> @if($donation->sysphilis == Null) No @else Yes @endif</a>
                      </li>

                      <li class="list-group-item">
                        <b> hepatitis B virus</b> <a class="float-right"> @if($donation->hepatitis_B_virus  == Null) No @else Yes @endif</a>
                      </li>
                      <li class="list-group-item">
                        <b> human immunodeﬁciency virus</b> <a class="float-right"> @if($donation->human_immunodeciency_virus  == Null) No @else Yes @endif</a>
                      </li>
                      <li class="list-group-item">
                        <b> hepatitis C virus</b> <a class="float-right"> @if($donation->hepatitis_C_virus  == Null) No @else Yes @endif</a>
                      </li>
                      <li class="list-group-item">
                        <b> t cruzi</b> <a class="float-right"> @if($donation->t_cruzi  == Null) No @else Yes @endif</a>
                      </li>
                      <li class="list-group-item">
                        <b> malaria</b> <a class="float-right"> @if($donation->malaria  == Null) No @else Yes @endif</a>
                      </li>
                      <li class="list-group-item">
                        <b> human T lympotrophic virus</b> <a class="float-right"> @if($donation->human_T_lympotrophic_virus  == Null) No @else Yes @endif</a>
                      </li>
                      <li class="list-group-item">
                        <b> west nile virus</b> <a class="float-right"> @if($donation->west_nile_virus  == Null) No @else Yes @endif</a>
                      </li>
                      <li class="list-group-item">
                        <b> cytomegalovirus</b> <a class="float-right"> @if($donation->cytomegalovirus  == Null) No @else Yes @endif</a>
                      </li>
                      <li class="list-group-item">
                        <b> hepatitis E virus</b> <a class="float-right"> @if($donation->hepatitis_E_virus  == Null) No @else Yes @endif</a>
                      </li>

                      <li class="list-group-item">
                        <b>Email status</b> <a class="float-right">{{$donation->email_status}}</a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    </div>
  </div>
</div>
@endsection
