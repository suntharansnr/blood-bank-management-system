@extends('layouts.backend_master')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="row">
          <div class="mr-auto">
          <h2>Edit donor</h2>
          </div>
          <div class="ml-auto">
            <a class="btn btn-primary" href="{{ route('donors.index') }}"> <i class="fa fa-backward"></i> </a>
          </div>
    </div>
  </div>
     <div class="card-body">
       {!! Form::model($Donor, ['method' => 'PATCH','route' => ['donors.update', $Donor->id],'enctype' => 'multipart/form-data']) !!}
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                   <strong>Name:</strong>
                   <input type="text" name="name" value="{{$user->name}}" class="form-control">
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
                   <input type="email" name="email" value="{{$user->email}}" class="form-control">
                   @if (count($errors) > 0)
                       @foreach ($errors->get('email') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
       </div>

       <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0px !important">
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Current Profile picture:</strong>
                   <img src="{{$user->profile_image}}" alt="" style="width:100px;height:100px;border-radius:50%;">
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>New profile picture:</strong>
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
                   <input type="text" name="age" value="{{$Donor->d_age}}" class="form-control" placeholder="age">
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
                   <input type="text" name="address" value="{{$Donor->d_addr}}" class="form-control" placeholder="address">
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
                   {{$Donor->gender}}
                   <select class="form-control select2bs4" style="width: 100%;" name="gender">
                           <?php if ($Donor->gender == 'male'): ?>
                                 <option value="Male" selected>Male</option>
                           <?php else: ?>
                                 <option value="Male">Male</option>
                           <?php endif; ?>

                           <?php if ($Donor->gender == 'Female'): ?>
                                 <option value="Female" selected>Female</option>
                           <?php else: ?>
                                 <option value="Female">Female</option>
                           <?php endif; ?>

                   </select>
                   @if (count($errors) > 0)
                       @foreach ($errors->get('gender') as $error)
                            <span class="text-muted" style="color:red !important">{{ $error }}</span>
                       @endforeach
                   @endif
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-3">
               <div class="form-group">
                   <strong>Contact No:</strong>
                   <input type="text" name="phone" value="{{$Donor->d_phone}}" class="form-control" placeholder="phone">
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
                   <div class="form-group">
                         <select class="form-control select2bs4" style="width: 100%;" name="blood_group">
                                 @if($Donor->blood_type=='A')
                                   <option value="A" selected>A</option>
                                 @else
                                   <option value="A">A</option>
                                 @endif

                                 @if($Donor->blood_type=='B')
                                   <option value="B" selected>B</option>
                                 @else
                                   <option value="B">B</option>
                                 @endif

                                 @if($Donor->blood_type=='O')
                                   <option value="O" selected>O</option>
                                 @else
                                   <option value="O">O</option>
                                 @endif

                                 @if($Donor->blood_type=='AB')
                                   <option value="AB" selected>AB</option>
                                 @else
                                   <option value="AB">AB</option>
                                 @endif
                         </select>
                   </div>
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
                                 @if($Donor->type_rh == '+')
                                    <option value="+" selected>+</option>
                                 @else
                                    <option value="+">+</option>
                                 @endif

                                 @if($Donor->type_rh == '-')
                                    <option value="-" selected>-</option>
                                 @else
                                    <option value="-">-</option>
                                 @endif
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
