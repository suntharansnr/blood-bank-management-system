@extends('layouts.backend_master')
@section('content')
<div class="card">
     <div class="card-header">
       <div class="row">
        <div class="mr-auto">
            <h2>Create new donor</h2>
        </div>
        <div class="ml-auto">
            <a class="btn btn-primary" href="{{ route('donors.index') }}"> <i class="fa fa-backward"></i> </a>
        </div>
       </div>
     </div>
     <div class="card-body">
       {!! Form::open(array('route' => 'donors.store','method'=>'POST','enctype' => 'multipart/form-data')) !!}
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
       <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
             <strong>Profile picture:</strong>
             <input type="file" name="profile_image" value="" class="form-control">
             @if (count($errors) > 0)
                 @foreach ($errors->get('profile_image') as $error)
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
                   <select class="form-control select2bs4" style="width: 100%;" name="gender">
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
                         <select class="form-control select2bs4" style="width: 100%;" name="blood_group">
                                 <option selected="selected" disabled>Select a blood type</option>
                                 <option value="A">A</option>
                                 <option value="B">B</option>
                                 <option value="O">O</option>
                                 <option value="AB">AB</option>
                         </select>
                   @if ($errors->has('blood_group'))
                   {!! $errors->first('blood_group', '<p class="text-danger">:message</p>') !!}
                   @endif
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3">
               <div class="form-group">
                   <strong>Type of blood:</strong>
                   <div class="form-group">
                         <select class="form-control select2bs4" style="width: 100%;" name="type_of_blood">
                                 <option selected="selected" disabled>Select a blood type</option>
                                 <option value="+">+</option>
                                 <option value="-">-</option>
                         </select>
                   </div>
                   @if ($errors->has('type_of_blood'))
                   {!! $errors->first('type_of_blood', '<p class="text-danger">:message</p>') !!}
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
