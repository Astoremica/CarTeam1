<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user');
    }

    // Guardの認証方法を指定
    protected function guard()
    {
        return Auth::guard('user');
    }

    // 新規登録画面
    public function showRegistrationForm()
    {
        return view('user.auth.register');
    }

    // バリデーション
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name1'       => ['required', 'string', 'max:255'],
            'name2'       => ['required', 'string', 'max:255'],
            'furi1'       => ['required', 'string', 'max:255'],
            'furi2'       => ['required', 'string', 'max:255'],
            'name3'       => ['required', 'string', 'max:255'],
            'email'       => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'    => ['required', 'string', 'min:5', 'confirmed'],
            'tel'         => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:255'],
            'address1'    => ['required', 'string', 'max:255'],
            'address2'    => ['required', 'string', 'max:255'],
            'address3'    => ['required', 'string', 'max:255'],
            'birthday'    => ['required', 'string', 'max:8'],
        ]);
    }

    // 登録処理
    protected function create(array $data)
    {
        return User::create([
            'name1'       => $data['name1'],
            'name2'       => $data['name2'],
            'name3'       => $data['name3'],
            'furi1'       => $data['furi1'],
            'furi2'       => $data['furi2'],
            'email'       => $data['email'],
            'password'    => bcrypt($data['password']),
            'tel'         => $data['tel'],
            'postal_code' => $data['postal_code'],
            'address1'    => $data['address1'],
            'address2'    => $data['address2'],
            'address3'    => $data['address3'],
            'birthday'    => $data['birthday'],
        ]);
    }
}