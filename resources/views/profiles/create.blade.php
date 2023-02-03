@extends('layouts.backend_master')
@section('content')
<div class="card">
     <div class="card-header">
       <div class="row">
        <div class="mr-auto">
            <h2>Create New Donor</h2>
        </div>
        <div class="ml-auto">
            <a class="btn btn-primary" href="{{ route('Donors.index') }}"> Back</a>
        </div>
       </div>
     </div>
     <div class="card-body">
       {!! Form::open(array('route' => 'Donors.store','method'=>'POST')) !!}
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                   <strong>Name:</strong>
                   {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('name') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
           <div class="col-md-6">
               <div class="form-group">
                   <strong>Email:</strong>
                   {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('email') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                   <strong>Password:</strong>
                   {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('password') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>

           <div class="col-md-6">
               <div class="form-group">
                   <strong>Confirm Password:</strong>
                   {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('confirm-password') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
       </div>

       <hr>

       <div class="row">

           <div class="col-xs-12 col-sm-12 col-md-4">
               <div class="form-group">
                   <strong>NIC NO:</strong>
                   {!! Form::text('nic', null, array('placeholder' => 'nic','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('nic') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-4">
               <div class="form-group">
                   <strong>Age:</strong>
                   {!! Form::text('age', null, array('placeholder' => 'age','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('age') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-4">
               <div class="form-group">
                   <strong>Address:</strong>
                   {!! Form::text('address', null, array('placeholder' => 'address','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('address') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
        </div>
       <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-3">
               <div class="form-group">
                   <strong>Gender:</strong>
                   <select class="form-control select2bs4" style="width: 100%;" name="B_type">
                           <option selected="selected">Select a gender</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                   </select>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3">
               <div class="form-group">
                   <strong>Contact No:</strong>
                   {!! Form::text('phone', null, array('placeholder' => 'phone','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('phone') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3">
               <div class="form-group">
                   <strong>Blood Type:</strong>
                   {!! Form::text('blood_group', null, array('placeholder' => 'blood_group','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('blood_group') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3">
               <div class="form-group">
                   <strong>Type of blood:</strong>
                   {!! Form::text('type_of_blood', null, array('placeholder' => 'type_of_blood','class' => 'form-control')) !!}
                   @if (count($errors) > 0)
                       @foreach ($errors->get('type_of_blood') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif


               </div>
           </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
       {!! Form::close() !!}
     </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });
</script>
@endsection
