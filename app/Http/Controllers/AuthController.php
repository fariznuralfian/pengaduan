<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//memanggil class auth
use Auth;
use App\User;
use App\Masyarakat;


class AuthController extends Controller
{
	//menampilkan tampilan login
    public function getLogin()
    {
    	return view('Auth.login');
    }

    public function getRegister()
    {
        return view('Auth.register');
    }

    public function postLogin(Request $request)
    {
    	$data_login = [
    		'username' => $request->username,
    		'password' => $request->password,
    			];
    		// login
    		if (Auth::attempt($data_login)){
    			return redirect()->route('init');
    		}else{
    			return redirect()->back();
    		}
    }
    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required|unique:masyarakat|min:16|max:16',
            'nama' => 'required|min:2|max:32',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt ($request->password),
            'level' => 'masyarakat'
        ]);

        $rakyat = Masyarakat::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt ($request->password),
            'nik' => $request->nik,
            'telp' => $request->telp,
            'user_id' =>$user->id,
        ]);

        Auth::loginUsingId($user->id);

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('getLogin')
                ->with('msgSuccess', "Berhasil Logout ,Selamat Datang Kembali");
    }
}
