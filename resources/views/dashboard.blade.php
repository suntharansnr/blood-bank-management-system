@extends('layouts.backend_master')
@section('content')
       <!-- Info boxes -->
       <div class="row">
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box">
             <span class="info-box-icon bg-info elevation-1"><i class="nav-icon fas fa-user-tag"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Total roles</span>
               <span class="info-box-number">
                 {{$roles_count}}
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Total users</span>
               <span class="info-box-number">{{$users_count}}</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->

         <!-- fix for small devices only -->
         <div class="clearfix hidden-md-up"></div>

         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-success elevation-1"><i class="fas fa-ambulance"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Total donors</span>
               <span class="info-box-number">{{$donors_count}}</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-hand-holding-medical"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Total Donations</span>
               <span class="info-box-number">{{$donations_count}}</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->

       <!-- Info boxes -->
       <div class="row">
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box">
             <span class="info-box-icon bg-info elevation-1"><i class="nav-icon fas fa-hospital"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Total hospitals</span>
               <span class="info-box-number">
                 {{$Hospital_count}}
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-clinic-medical"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Total Request</span>
               <span class="info-box-number">{{$request_count}}</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->

         <!-- fix for small devices only -->
         <div class="clearfix hidden-md-up"></div>
       </div>
       <!-- /.row -->

       <!-- Main row -->
       <div class="row">
         <!-- Left col -->
         <div class="col-md-12">
               <div class="card">
                 <div class="card-header">
                   <h3 class="card-title">Latest Members</h3>

                   <div class="card-tools">
                     <span class="badge badge-danger">8 New Members</span>
                     <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                     </button>
                   </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                   <ul class="users-list clearfix">
                     @foreach ($user as $key => $value)
                     <li>
                       <img src="{{$value->profile_image}}" alt="User Image" style="width:100px;height:100px">
                       <a class="users-list-name" href="#">Alexander Pierce</a>
                       <span class="users-list-date">Today</span>
                     </li>
                     @endforeach
                   </ul>
                   <!-- /.users-list -->
                 </div>
                 <!-- /.card-body -->
                 <div class="card-footer text-center">
                   <a href="javascript::">View All Users</a>
                 </div>
                 <!-- /.card-footer -->
               </div>
               <!--/.card -->
           <!-- TABLE: LATEST ORDERS -->
           <div class="card">
             <div class="card-header border-transparent">
               <h3 class="card-title">Latest Orders</h3>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                   <i class="fas fa-minus"></i>
                 </button>
                 <button type="button" class="btn btn-tool" data-card-widget="remove">
                   <i class="fas fa-times"></i>
                 </button>
               </div>
             </div>
             <!-- /.card-header -->
             <div class="card-body p-0">
               <div class="table-responsive">
                 <table class="table m-0">
                   <thead>
                   <tr>
                     <th>Order ID</th>
                     <th>Item</th>
                     <th>Status</th>
                     <th>Popularity</th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                     <td><a href="pages/examples/invoice.html">OR9842</a></td>
                     <td>Call of Duty IV</td>
                     <td><span class="badge badge-success">Shipped</span></td>
                     <td>
                       <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                     </td>
                   </tr>
                   <tr>
                     <td><a href="pages/examples/invoice.html">OR1848</a></td>
                     <td>Samsung Smart TV</td>
                     <td><span class="badge badge-warning">Pending</span></td>
                     <td>
                       <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                     </td>
                   </tr>
                   <tr>
                     <td><a href="pages/examples/invoice.html">OR7429</a></td>
                     <td>iPhone 6 Plus</td>
                     <td><span class="badge badge-danger">Delivered</span></td>
                     <td>
                       <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                     </td>
                   </tr>
                   <tr>
                     <td><a href="pages/examples/invoice.html">OR7429</a></td>
                     <td>Samsung Smart TV</td>
                     <td><span class="badge badge-info">Processing</span></td>
                     <td>
                       <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                     </td>
                   </tr>
                   <tr>
                     <td><a href="pages/examples/invoice.html">OR1848</a></td>
                     <td>Samsung Smart TV</td>
                     <td><span class="badge badge-warning">Pending</span></td>
                     <td>
                       <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                     </td>
                   </tr>
                   <tr>
                     <td><a href="pages/examples/invoice.html">OR7429</a></td>
                     <td>iPhone 6 Plus</td>
                     <td><span class="badge badge-danger">Delivered</span></td>
                     <td>
                       <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                     </td>
                   </tr>
                   <tr>
                     <td><a href="pages/examples/invoice.html">OR9842</a></td>
                     <td>Call of Duty IV</td>
                     <td><span class="badge badge-success">Shipped</span></td>
                     <td>
                       <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                     </td>
                   </tr>
                   </tbody>
                 </table>
               </div>
               <!-- /.table-responsive -->
             </div>
             <!-- /.card-body -->
             <div class="card-footer clearfix">
               <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
               <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
             </div>
             <!-- /.card-footer -->
           </div>
           <!-- /.card -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
@endsection
