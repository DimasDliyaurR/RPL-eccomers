<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as H;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function regristras()
    {
        return view('login.regristrasi');
    }

    public function regris_insert_user(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|unique:users|email:rfc,dns',
                'password' => 'required',
                'repassword' => 'required',
                'same:password',
            ],
            [
                'username.required' => 'Username Tidak Boleh Kosong',
                'first_name.required' => 'Nama Depan Tidak Boleh Kosong',
                'last_name.required' => 'Nama Belakang Tidak Boleh Kosong',
                'email.required' => 'Email Tidak Boleh Kosong',
                'email.unique' => 'Email Sudah Terdaftar',
                'email.email' => 'Email Tidak Valid',
                'password.required' => 'Password Tidak Boleh Kosong',
                'repassword.required' => 'Re-Password Tidak Boleh Kosong',
                'repassword.same' => 'Password Tidak Sama',
            ],
        );

        $data = [
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'level' => 'user',
            'password' => H::make($request->password),
        ];

        // return dump($data);
        return redirect('loginAdmin')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function login_action(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('dashboard');
        }
    }

    // Admin Login Access
    public function index_admin()
    {
        return view('auth.mid_adminLogin');
    }

    public function admin_token(Request $req)
    {
        $this->validate($req, [
            'token_admin' => 'required',
        ]);

        $token = $req->token_admin;

        if ($token == 'dfgthy') {
            $req->session()->put('token_admin', $token);
            return redirect('/821e728e7129e718e789');
        } else {
            return abort(403);
        }
    }

    public function index_admin_login()
    {
        return view('auth.loginAdmin');
    }

    public function admin_login_regris(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'required',
            'repassword' => 'required',
            'same:password',
        ]);

        $data = [
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'level' => $request->level,
            'password' => H::make($request->password),
        ];
        User::create($data);
        return redirect('login');
    }
}
