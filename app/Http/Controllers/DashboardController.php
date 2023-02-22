<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use App\Models\Proof;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DashboardController extends Controller
{
    public function help(){
        return view('dashboard.help');

    }

    public function earn(){
          $user=Auth::user();
          $count =DB::table('deposits')->where('status','approved')->sum('amount')*0.000000056;
         
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','asc')->get();

        return view('dashboard.earn')->with('user',$user)->with('deposits',$deposits)->with('count',$count);
        
    }

    public function ref(){
        $user=Auth::user();
          $depo=Deposit::all();
           $proof=Proof::where('user_id',$user->id)->orderBy('id','asc')->get();
        
        return view('dashboard.referal')->with('depo',$depo)->with('user',$user)->with('proof',$proof);
        
    }

    // public function withdraw(){
    //     return view('dashboard.withdraw');
        
    // }

    
    public function view(){
        return view('dashboard.withdraw_view');
        
    }
    public function dash(){
        return view('dashboard.dash');
        
    }
    public function deposit(){
        // return Deposit::all();
        return view('dashboard.deposit');
        
    }
    
    public function view_deposit(){
         $user=Auth::user();
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','asc')->get();

    // return view('home1')->with('user',$user)->with('deposits',$deposits);
        return view('dashboard.view_deposit')->with('user',$user)->with('deposits',$deposits);
        
    }
    
    public function set_up(){
        return view('dashboard.setup_payment');
        
    }

    public function profile(){
        return view('dashboard.profile');
        
    }
    public function payment_account(){
        return view('dashboard.payment_account');
        
    }
    public function security(){

       
        return view('dashboard.security');
        
    }

    public function avatar(Request $request){
        // dd($request->file);
        $request->file->store('images','public');

       
     
        
    }
    
    public function admin(){
        $users=User::all();
        $depo=Deposit::all();
        $withd=Withdrawal::all();
        return view('dashboard.admin')->with('users',$users)->with('withd',$withd)->with('depo',$depo);
        
    }
    
     public function all_deposits(){
 $users=User::all();
        $depo=Deposit::all();
        $withd=Withdrawal::all();
       
        return view('dashboard.all_deposits')->with('users',$users)->with('withd',$withd)->with('depo',$depo);
        
    }
    
     public function all_users(){
 $users=User::all();
        $depo=Deposit::all();
        $withd=Withdrawal::all();
       
        return view('dashboard.all_users')->with('users',$users)->with('withd',$withd)->with('depo',$depo);;
        
    }  public function trx_id(){
 $users=User::all();
        $depo=Deposit::all();
        $withd=Withdrawal::all();
                $trxx=Proof::all();

        return view('dashboard.trx_id')->with('users',$users)->with('withd',$withd)->with('depo',$depo)->with('trxx',$trxx);
        
    }
    
    
    
    

}
