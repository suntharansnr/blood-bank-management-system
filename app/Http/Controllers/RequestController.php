<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Request_blood;
use App\Models\Hospital;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Carbon\Carbon;
use Redirect;
class requestController extends Controller
{
  /**

* Display a listing of the resource.

*

* @return \Illuminate\Http\Response


*/
function __construct()
    {
         $this->middleware('permission:request-list|request-create|request-edit|request-delete', ['only' => ['index','store']]);
         $this->middleware('permission:request-create', ['only' => ['create','store']]);
         $this->middleware('permission:request-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:request-delete', ['only' => ['destroy']]);
    }
public function index(Request $request)
{
  $data = Request_blood::orderBy('id','DESC')
                       ->with('hospital')
                       ->paginate(10);
  return view('requests.index',compact('data'));
}


/**

* Show the form for creating a new resource.

*

* @return \Illuminate\Http\Response

*/

public function create()

{

  $hospitals = Hospital::all();
  return view('requests.create',compact('hospitals'));
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

      'hospital_name' => 'required',
      'Blood_type' => 'required',
      'Blood_quantity' => 'required',
      'Type_Rh' => 'required',
      'request_message' => 'required',
  ]);

  $input['hospital_id'] = $request->hospital_name;
  $input['blood_type'] = $request->Blood_type;
  $input['type_rh'] = $request->Type_Rh;
  $input['request_amount'] = $request->Blood_quantity;
  $input['request_date'] = Carbon::now();
  $input['request_message'] = $request->request_message;
  $input['request_status'] = 'pending';
  $input['request_email_status'] = '0';

  $request = Request_blood::create($input);
  $notification = array(
    'message' => 'Request details added successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/Requests')->with($notification);
}


/**

* Display the specified resource.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function show($id)
{
  $requests = Request_blood::where('id','=',$id)->get();
  $request=$requests['0'];
  return view('requests.show',compact('request'));
}


/**

* Show the form for editing the specified resource.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function edit($id)
{
  $hospitals = Hospital::all();
  $request = Request_blood::find($id);
  return view('requests.edit',compact('request','hospitals'));
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
  $request1 = Request_blood::find($id);

  $input['hospital_id'] = $request->hospital_name;
  $input['blood_type'] = $request->Blood_type;
  $input['type_rh'] = $request->Type_Rh;
  $input['request_amount'] = $request->Blood_quantity;
  $input['request_message'] = $request->request_message;

  $request1->update($input);

  $notification = array(
    'message' => 'Request details updated successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/Requests')->with($notification);

}


/**

* Remove the specified resource from storage.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function destroy($id)
{
  Request_blood::find($id)->delete();
  $notification = array(
    'message' => 'Request details deleted successfully!',
    'alert-type' => 'success'
  );
}
}
