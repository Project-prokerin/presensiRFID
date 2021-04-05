<?php

namespace App\Http\Controllers\Main;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function postLogin(Request $request)
    {
        $remember = $request->remember == 'on' ? true : false;
        $username = $request->username; //the input field has name='username' in form
        $password = $request->pass;

        if (Auth::guard('siswa')->attempt(array('nipd' => $username, 'password' => $password), $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('siswa\dashboard');
        } else if (Auth::guard('admin')->attempt(array('username' => $username, 'password' => $password), $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('admin\dashboard');
        } else if (Auth::guard('guru')->attempt(array('username' => $username, 'password' => $password), $remember) || $request->validate(['username' => 'email:rfc,dns']) && Auth::guard('guru')->attempt(array('email' => $username, 'password' => $password), $remember)) {
            //guru sent their email or username
            $request->session()->regenerate();
            return redirect()->intended('guru\dashboard');
        }
        return back()->withInput($request->only('username', 'pass'));
    }
    public function postLogout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }

    /**       
     * Display a listing of the resource.
     *
     * @param  Illuminate\Http\Request $request
     * @return Response
     */
    public function timeAuth(Request $request)
    {
        // give a time        
        if ($request->ajax()) {
            $time = Carbon::parse(session()->get('last_login_at'))->diffForHumans();
            return response()->json(compact('time'));
        }
        return redirect()->back();
    }
}
