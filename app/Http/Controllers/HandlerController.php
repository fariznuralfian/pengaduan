<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Masyarakat;
use App\Petugas;

class HandlerController extends Controller
{
	 public function dashboard()
    {
    	return view('pages.dashboard');
    	
   }

    public function init()
    {

    	if(Auth::guest()){
    		return redirect()->route('getlogin');
    	}else{
    		if(Auth::user()->level == 'petugas'){
    			if(Auth::user()->petugas[0]->level == 'admin'){
    				return redirect()->route('dashboard');
    			}else if (Auth::user()->petugas[0]->level == 'petugas'){
    				return redirect()->route('dashboard');
    			}else {
    				Auth::logout();
    				return redirect()->route('getLogin')->with('msgWarning','Terjadi Kesalahan dengan Hak Akses');
    			}
    		}else{
    			return redirect()->route('landing');
    		}
    	}
   }

    public function landing()
    {
         return view('pages.landing');
    }
}
