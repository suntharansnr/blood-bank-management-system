<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Faq;

class PagesController extends Controller
{
    public function home()
    {
      return view('front-pages.home');
    }
    public function about()
    {
      return view('front-pages.about');
    }
    public function help()
    {
      $faqs = Faq::all();
      return view('front-pages.help',compact('faqs'));
    }
    public function donors()
    {
      $donors = Donor::all();
      return view('front-pages.donors',compact('donors'));
    }
    public function contact()
    {
      return view('front-pages.contact');
    }
}
