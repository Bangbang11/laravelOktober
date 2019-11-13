<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\Http\Requests\UserRequest;
use DB;
use App\Jobs\JobKedua;

class UsersController extends Controller
{
    public function signup(){
        return view('users.signup');
    }

    public function signup_store(UserRequest $request){
        DB::beginTransaction();
        try {
            $role = Sentinel::findRoleBySlug('writer'); //cari role writer
            $role_id = $role->id;
            $credentials = [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ];
            $user = Sentinel::registerAndActivate($credentials);
            $user->roles()->attach($role_id);
            Session::flash('notice','Success create new user');
            DB::commit(); //simpan DB
            JobKedua::dispatch($user);
        } catch (\Throwable $errors) {
            DB::rollBack(); //rollback jika ada error pas insert ke db
            Session::flash('error', $errors);
        }
        return redirect()->back();
        // Sentinel::registerAndActivate($request->all());
        // Session::flash('notice','Berhasil yey');
        // return back();
    }
}
