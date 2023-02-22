<?php

namespace App\Http\Controllers;
use App\Models\Deposit;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $user=Auth::user();
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','desc')->get();
     $deposit=Withdrawal::where('user_id',$user->id)->orderBy('id','desc')->get();

    return view('home1')->with('user',$user)->with('deposits',$deposits)->with('deposit',$deposit);
    }
}
