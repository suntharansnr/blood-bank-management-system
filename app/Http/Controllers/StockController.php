<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Hospital;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use App\Models\Stock;
use App\Models\Donor;
use Redirect;
class StockController extends Controller
{
  /**

* Display a listing of the resource.

*

* @return \Illuminate\Http\Response

*/
function __construct()
    {
         $this->middleware('permission:donation-list|donation-create|donation-edit|donation-delete', ['only' => ['index','store']]);
         $this->middleware('permission:donation-create', ['only' => ['create','store']]);
         $this->middleware('permission:donation-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:donation-delete', ['only' => ['destroy']]);
    }
public function index(Request $request)
{
  $data = Stock::orderBy('id','DESC')->paginate(5);
  return view('stocks.index',compact('data'))
      ->with('i', ($request->input('page', 1) - 1) * 5);
}


/**

* Show the form for creating a new resource.

*

* @return \Illuminate\Http\Response

*/

public function create()
{
  $hospitals = Hospital::all();
  $donors = Donor::all();
  return view('Donations.create',compact('hospitals','donors'));
}


/**

* Store a newly created resource in storage.

*

* @param  \Illuminate\Http\Request  $request

* @return \Illuminate\Http\Response

*/

public function store(Request $request)
{
  $input = $request->all();
  $stock = Stock::create($input);

  $input1 = $request->all();
  $input1['stock_id'] = $stock->id;

  $donation = Donation::create($input1);

  $notification = array(
    'message' => 'Donation details updated successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/Donations')->with($notification);

}


/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
  $stock = Stock::findorfail($id);
  return view('stocks.show',compact('stock'));
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
  $donors = Donor::all();
  $stock = Stock::find($id);
  return view('stocks.edit',compact('stock','hospitals','donors'));
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
  $input = $request->all();
  $stock = Stock::find($id);
  $stock->update($input);

  $notification = array(
    'message' => 'Stock details updated successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/stocks')->with($notification);


}


/**

* Remove the specified resource from storage.

*

* @param  int  $id

* @return \Illuminate\Http\Response

*/

public function destroy($id)
{

  $stock = Stock::find($id);
  $donation = Donation::where('stock_id','=',$stock->id)->first();
  if($donation != null) {
    $donation->delete();
  } else {
    //do nothing
  }

  $stock->delete();
  $notification = array(
    'message' => 'Stock details removed successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/stocks')->with($notification);

}

public function change_bloodstatus($id,Request $request)
{
  $donation = Donation::find($id);
  $donation->blood_status = $request->blood_status;
  $donation->save();

  $notification = array(
    'message' => 'blood status updated successfully!',
    'alert-type' => 'success'
  );
  return Redirect::to('/Donations')->with($notification);
}

}
