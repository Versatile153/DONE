<?php

namespace App\Http\Controllers;
use App\Models\Deposit;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

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
      
      
      
    $earn=  DB::table('deposits')->where('user_id', $user->id)->where('status','approved')->sum('earnings'); 
     $withdrawals = DB::table('withdrawals')
    ->where('user_id', $user->id)
    ->where('status', 'paid')
    ->sum('amount');


     
     
     
     
     


    
   

      $deposit1 = DB::table('deposits')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
       $deposit2 = DB::table('deposits')->where('status', 'pending')->where('user_id', $user->id)->value('amount');

       $deposit3 = DB::table('deposits')->where('user_id', $user->id)->value('amount');
       
       $deposit4 = DB::table('deposits')
       ->where('user_id', $user->id)
       ->orderByDesc('created_at')
       ->get();

      
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','desc')->get();
     $deposit=Withdrawal::where('user_id',$user->id)->orderBy('id','desc')->get();
     $deposit10=Withdrawal::where('user_id',$user->id)->where('status','paid')->value('amount');
     $lastDeposit = $deposits->pluck('amount')->first();
     $lastAmount = $deposit->pluck('amount')->first();


    //  $lastDepositAmount = $deposits->pluck('amount')->first();

    return view('home')->with('user',$user)->with('deposits',$deposits)
    
    ->with('deposit',$deposit)->with('deposit1',$deposit1)->with('deposit2',$deposit2)
    ->with('earn',$earn)
    ->with('deposit3',$deposit3)
    ->with('deposit4',$deposit4)
    ->with('deposit10',$deposit10)
    ->with('lastDeposit',$lastDeposit)
    ->with('lastAmount',$lastAmount);
    
    
    
    
    }
}
