<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
    	$user = User::where('id', Auth::user()->id)->first();

    	return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->no_telp = $request->no_telp;
    	$user->alamat = $request->alamat;
    	$user->jenis_kelamin = $request->jenis_kelamin;
    	$user->tanggal_lahir = $request->tanggal_lahir;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	return redirect('profile');
    }
}
