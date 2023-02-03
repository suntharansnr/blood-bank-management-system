@extends('layouts.backend_master')
@section('content')
<div class="card">
   <div class="card-header">
     <div class="float-left">
         <h2>Show stocks</h2>
     </div>
     <div class="float-right">
         <a class="btn btn-primary" href="{{ route('stocks.index') }}"> <i class="fa fa-backward"></i> </a>
     </div>
   </div>
   <div class="card-body">
     <div class="col-md-6" style="margin-left:25%;">
     <!-- Profile Image -->
                 <div class="card">
                   <div class="card-body box-profile">
                     <ul class="list-group list-group-unbordered mb-3">
                       <li class="list-group-item">
                         <b>Blood type</b> <a class="float-right">{{$stock->blood_type}}</a>
                       </li>
                       <li class="list-group-item">
                         <b>Type Rh</b> <a class="float-right">{{$stock->type_rh}}</a>
                       </li>
                       <li class="list-group-item">
                         <b>Blood volume</b> <a class="float-right">{{$stock->blood_volume}}</a>
                       </li>
                       <li class="list-group-item">
                         <b>Blood expire date</b> <a class="float-right">{{$stock->blood_expire_date}}</a>
                       </li>
                       <li class="list-group-item">
                         <b>Blood receive date</b> <a class="float-right">{{$stock->blood_receive_date}}</a>
                       </li>
                       <li class="list-group-item">
                         <b>Send status</b> <a class="float-right">{{$stock->send_status}}</a>
                       </li>
                       <li class="list-group-item">
                         <b>Expire status</b> <a class="float-right">{{$stock->expire_status}}</a>
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
