<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Hospital;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Redirect;
class HospitalController extends Controller
{
  /**

* Display a listing of the resource.

*

* @return \Illuminate\Http\Response

*/
function __construct()
    {
         $this->middleware('permission:hospital-list|hospital-create|hospital-edit|hospital-delete', ['only' => ['index','store']]);
         $this->middleware('permission:hospital-create', ['only' => ['create','store']]);
         $this->middleware('permission:hospital-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:hospital-delete', ['only' => ['destroy']]);
    }
public function index(Request $request)
{
  $data = Hospital::orderBy('id','DESC')->paginate(5);
  return view('Hospitals.index',compact('data'))
      ->with('i', ($request->input('page', 1) - 1) * 5);
}


/**

* Show the form for creating a new resource.

*

* @return \Illuminate\Http\Response

*/

public function create()

{
  return view('Hospitals.create');
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
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required|email|unique:hospitals,email',
  ]);
  $input = $request->all();
  $hospital = Hospital::create($input);

  $notification = array(
    'message' => 'Hospital details added successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/Hospitals')->with($notification);
}


/**

* Display the specified resource.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function show($id)
{
  $Hospitals = Hospital::where('id','=',$id)->get();
  $Hospital=$Hospitals['0'];
  return view('Hospitals.show',compact('Hospital'));
}


/**

* Show the form for editing the specified resource.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function edit($id)
{
  $Hospital = Hospital::find($id);
  return view('Hospitals.edit',compact('Hospital'));
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
      'address' => 'required',
      'phone' => 'required',
      'email' => 'required|email'
  ]);
  $input = $request->all();
  $Hospital = Hospital::find($id);
  $Hospital->update($input);

  $notification = array(
    'message' => 'Hospital details updated successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/Hospitals')->with($notification);
}


/**

* Remove the specified resource from storage.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function destroy($id)
{
  Hospital::find($id)->delete();
  $notification = array(
    'message' => 'Hospital details deleted successfully!',
    'alert-type' => 'error'
  );
  return Redirect::to('/Hospitals')->with($notification);

}
}
