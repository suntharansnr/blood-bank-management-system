<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donor;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Redirect;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;
class ProfileController extends Controller
{
  use UploadTrait;
  /**

* Display a listing of the resource.

*

* @return \Illuminate\Http\Response

*/
function __construct()
    {
         $this->middleware('permission:profile-list|profile-create|profile-edit|profile-delete', ['only' => ['index','store']]);
         $this->middleware('permission:profile-create', ['only' => ['create','store']]);
         $this->middleware('permission:profile-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:profile-delete', ['only' => ['destroy']]);
    }

public function index(Request $request)
{
  $data = User::orderBy('id','DESC')->paginate(5);
  return view('users.index',compact('data'))

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
  return view('users.create',compact('roles'));
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
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|same:confirm-password',
      'roles' => 'required'
  ]);


  $input = $request->all();
  $input['password'] = Hash::make($input['password']);
  $user = User::create($input);
  $user->assignRole($request->input('roles'));
  return redirect()->route('users.index')
                  ->with('success','User created successfully');
}


/**

* Display the specified resource.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function show($id)
{
  $user = User::find($id);
  $Donor = Donor::where('user_id','=',$user->id)->first();
  return view('profiles.show',compact('user','Donor'));
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
  return view('Profiles.edit',compact('Donor','user'));
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
  }

  $user = User::find($donor->user_id);
  $user->name = $request->name;
  $user->email = $request->email;
  $user->password = Hash::make($request->password);
  $user->profile_image = $filePath;
  $user->save();

  $notification = array(
    'message' => 'Donor details updated successfully!',
    'alert-type' => 'success'
  );
  return Redirect::back()->with($notification);
}


/**

* Remove the specified resource from storage.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function destroy($id)
{
  User::find($id)->delete();
  return redirect()->route('users.index')

                  ->with('success','User deleted successfully');

}
}
