<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donor;
use App\Models\Donation;
use App\Models\Hospital;
use App\Models\Request_blood;
use App\Models\Stock;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function dashboard(){
      $roles_count = Role::all()->count();
      $users_count = User::all()->count();
      $donors_count = Donor::all()->count();
      $donations_count = Donation::all()->count();
      $Hospital_count = Hospital::all()->count();
      $request_count = Request_blood::all()->count();
      $user = User::orderBy('id', 'desc')->take(8)->get();
      return view('dashboard',compact('user','roles_count','users_count','donors_count','donations_count','Hospital_count','request_count'));
    }
}
