<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function index(Request $request) {
        
        $cekUser = User::where('username', request('username'))->where('status', 1)->first();

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {

            if($cekUser) {

                return redirect(route('dashboard'));

            } else {

                $messages = [
                    'required' => 'User tidak aktif',
                ];
                return redirect()->back()->withErrors($messages)->with('error', $messages);

            }
        } else {

            $messages = [
                'required' => 'User tidak ditemukan',
            ];
            return redirect()->back()->withErrors($messages)->with('error', $messages);

        }
        return response()->json($success, $this->successStatus);

    }
}
