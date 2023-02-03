<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Redirect;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;
class DonorController extends Controller
{
  use UploadTrait;
  /**

* Display a listing of the resource.

*

* @return \Illuminate\Http\Response

*/
function __construct()
    {
         $this->middleware('permission:donor-list|donor-create|donor-edit|donor-delete', ['only' => ['index','store']]);
         $this->middleware('permission:donor-create', ['only' => ['create','store']]);
         $this->middleware('permission:donor-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:donor-delete', ['only' => ['destroy']]);
    }
public function index(Request $request)
{
  $data = Donor::orderBy('id','DESC')->with('user')->paginate(5);
  return view('Donors.index',compact('data'))

      ->with('i', ($request->input('page', 1) - 1) * 5);

}


/**

* Show the form for creating a new resource.

*

* @return \Illuminate\Http\Response

*/

public function create()

{

  $roles = Role::pluck('name','name')->all();
  return view('Donors.create',compact('roles'));
}


/**

* Store a newly created resource in storage.

*

* @param  \Illuminate\Http\Request  $request

* @return \Illuminate\Http\Response

*/

public function store(Request $request)
{
  $this->validate($request, [
     'nic' => 'required',
     'name' => 'required',
     'age' => 'required',
     'address' => 'required',
     'gender' => 'required',
     'phone' => 'required',
     'blood_group' => 'required',
     'type_of_blood' => 'required',
     'password' => 'required|same:confirm-password',
  ]);


  $user = new User();
  $user->name = $request->name;
  $user->email = $request->email;
  $user->password = Hash::make($request->password);

  if ($request->hasfile('profile_image')) {
    // Get image file
    $image = $request->file('profile_image');
    // Make a image name based on user name and current timestamp
    $name = Str::slug($request->input('name')).'_'.time();
    // Define folder path
    $folder = '/uploads/profiles/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    // Upload image
    $this->uploadOne($image, $folder, 'public', $name);
    $user->profile_image = $filePath;
  }

  $user->save();
  $user->assignRole('2');

//  dd($user->id);
  $donor=new Donor();
  $donor->nic=$request->nic;
  $donor->d_age=$request->age;
  $donor->d_addr=$request->address;
  $donor->d_gender=$request->gender;
  $donor->d_phone=$request->phone;
  $donor->blood_type=$request->blood_group;
  $donor->type_rh=$request->type_of_blood;
  $donor->user_id = $user->id;
  $donor->save();

  $notification = array(
    'message' => 'New donor added successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/Donors')->with($notification);
}


/**

* Display the specified resource.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function show($id)
{
  $Donor = Donor::find($id);
  return view('Donors.show',compact('Donor'));
}


/**

* Show the form for editing the specified resource.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function edit($id)
{
  $Donor = Donor::find($id);
  $user = User::find($Donor->user_id);
  return view('Donors.edit',compact('Donor','user'));
}


/**

* Update the specified resource in storage.

*

* @param  \Illuminate\Http\Request  $request

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function update(Request $request, $id)
{
  $this->validate($request, [
      'name' => 'required',
//      'email' => 'required|email|unique:Donors,email,'.$id,
      'password' => 'same:confirm-password',
      'nic' => 'required',
      'age' => 'required',
      'address' => 'required',
      'gender' => 'required',
      'phone' => 'required',
      'blood_group' => 'required',
      'type_of_blood' => 'required',
  ]);

  $donor = Donor::find($id);
  $donor->nic=$request->nic;
  $donor->d_age=$request->age;
  $donor->d_addr=$request->address;
  $donor->d_gender=$request->gender;
  $donor->d_phone=$request->phone;
  $donor->blood_type=$request->blood_group;
  $donor->type_rh=$request->type_of_blood;
  $donor->save();

  $user = User::find($donor->user_id);
  $user->name = $request->name;
  $user->email = $request->email;
  $user->password = Hash::make($request->password);

  if ($request->hasfile('profile_image')) {
    // Get image file
    $image = $request->file('profile_image');
    // Make a image name based on user name and current timestamp
    $name = Str::slug($request->input('name')).'_'.time();
    // Define folder path
    $folder = '/uploads/profiles/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    // Upload image
    $this->uploadOne($image, $folder, 'public', $name);
    $user->profile_image = $filePath;
  }
  
  $user->save();

  $notification = array(
    'message' => 'Donor details updated successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/Donors')->with($notification);

}


/**

* Remove the specified resource from storage.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function destroy($id)
{
  Donor::find($id)->delete();
  $notification = array(
    'message' => 'Donor details removed successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/Donors')->with($notification);

}
}
