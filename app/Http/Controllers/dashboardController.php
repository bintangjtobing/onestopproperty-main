<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\log;

class dashboardController extends Controller
{
    public function index()
    {
        $report = reportCollection::count();
        $relawan = relawan::count();
        return view('dashboard.index', [
            'report' => $report,
            'relawan' => $relawan,
        ]);
    }
    public function login()
    {
        return view('dashboard.login');
    }
    public function loginProcess(Request $request)
    {
        $remember_me = $request->has('remember') ? true : false;
        $request->merge(['status' => '1']);
        if (Auth::attempt($request->only('username', 'password', 'status'), $remember_me)) {
            $user = User::where(['username' => $request->username])->first();
            $log = new log();
            $log->log_name = 'LOGIN';
            $log->description = 'Success Login';
            $log->causer_type = 'LOGIN';
            $log->causer_id = Auth::user()->id;
            $log->save();
            return redirect('/app/dashboard');
            // return back()->with('gagal', ' Please check your auth status or your input!');
        }
        // return 200;
    }
    public function logout(Request $request)
    {
        $log = new log();
        $log->log_name = 'LOGOUT';
        $log->description = 'Success Logout';
        $log->causer_type = 'LOGOUT';
        $log->causer_id = Auth::id();
        $log->save();
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

        $request->session()->flush();
        Auth::logout();
        $request->session()->regenerate();
        return redirect('/v/login');
    }
    public function log()
    {
        $logs = log::with('userId')->orderBy('created_at', 'DESC')->paginate(15);
        // return response()->json($logs, 200);
        return view('dashboard.log', ['logs' => $logs]);
    }
}
