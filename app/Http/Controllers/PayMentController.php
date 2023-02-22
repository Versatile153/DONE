<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Deposit;
use App\Models\Profile;
use App\Models\Withdrawal;
use DB;



use App\Models\User;
use App\Models\Proof;

use App\Models\Security;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PayMentController extends Controller
{
    public function store(){
        return 1234;
    }
    public function withdraw(){
        return view('withdrawals.withdraw');
    }

    public function view(){
        
         $user=Auth::user();
    $deposits=Withdrawal::where('user_id',$user->id)->orderBy('id','asc')->get();
        return view('withdrawals.view')->with('user',$user)->with('deposits',$deposits);
    }

    public function deposit(){
        $deposits= Deposit::all();
        return view('deposit.depo1')->with('deposits',$deposits);
    }

    
    public function new_deposit(){
       $user=auth()->user();
        return view('deposit.new_deposit')->with('user',$user);
    }


    public function plan(Request $request){
        $deposits=new Deposit();
        $deposits->plan=$request->input('plan');
        $deposits->amount=$request->input('amount');
        $deposits->payment_method=$request->input('payment_method');
        $deposits->user_id=auth()->user()->id;
        $deposits->save();


        // Deposit::create($request->all());
        
        return redirect('/new_deposit');
    }

    public function set_up(Request $request){
    
        Account::create($request->all());
        
        return redirect('/deposit');
    }

    public function profile(Request $request){
       
        Profile::create($request->all());
        // return 'created';
        return redirect('/home');
    }

    public function security(Request $request){
        
      Security::create($request->all());
        
        return redirect('/home');
    }

    public function money_withdrawal(Request $request){
       
       $user=auth()->user()->id;
        $deposits=new Withdrawal();
        $deposits->amount=$request->input('amount');
        $deposits->withdrwa_method=$request->input('withdrwa_method');
        
        $deposits->user_id=$user;
        $deposits->save();
        // Withdrawal::create($request->all());
        // return redirect('/home');
        return redirect('/view');
    }
     public function proof(Request $request){
         
           $user=Auth::user();
          $proof=new Proof();
          $proof->trx_id=$request->input('trx_id');
          $proof->user_id=$user->id;
          $proof->save();
        // Proof::create([
        //     'trx_id'=>,
        //     'user_id'=>$user->id
        //     ]);
        return redirect('/view_deposit');
    }
 public function approve(Request $request)
  {
    // $request->validate([
    //   "date" => "required|date",
    //   "id" => "required"
    // ]);

    $status = Deposit::find($request->id);
    $status->status = 'approved';
    $status->save();
    return redirect()->back();
  }


 public function revoke(Request $request, $id)
  {

    $status = Deposit::find($id);
    $status->status = 'pending';
    // $contribtion->user_id=auth()->user()->id;
    $status->save();

    return redirect()->back();
  }


    public function all_with(){
        
       $users=User::all();
        $depo=Deposit::all();
        $withd=Withdrawal::all();
        return view('dashboard.all_with')->with('users',$users)->with('withd',$withd)->with('depo',$depo);
      }




//withdrawal approval and revoke request

public function revoke_with(Request $request)
  {
    

    $status = Withdrawal::find($request->id);
    $status->status = 'paid';
    $status->save();
    return redirect()->back();
  }




 public function appr_with(Request $request, $id)
  {

    $status = Withdrawal::find($id);
    $status->status = 'pending';
    // $contribtion->user_id=auth()->user()->id;
    $status->save();

    return redirect()->back();
  }
  
  
  
  
   public function trxx(){
       
        $users=User::all();
        //  $user=Auth::user();
    // $deposits=Withdrawal::where('user_id',$user->id)->orderBy('id','asc')->get();
       $depo=Deposit::all();
          $withd=Withdrawal::all();
        
        return view('dashboard.trxx')->with('users',$users)->with('withd',$withd)->with('depo',$depo);
    }
  
  
  
    public function show($id){
       
         
         $user=User::find($id);
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','asc')->get();
      
          $withd=Withdrawal::where('user_id',$user->id)->orderBy('id','asc')->get();
          
           $proof=Proof::where('user_id',$user->id)->orderBy('id','asc')->get();
        
        return view('dashboard.show')->with('user',$user)->with('deposits',$deposits)->with('withd',$withd)->with('proof',$proof);
    }
  


}
