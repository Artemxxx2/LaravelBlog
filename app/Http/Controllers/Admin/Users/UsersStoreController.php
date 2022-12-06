<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Requests\Admin\Users\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersStoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $password = $data['password'];
        $name = $data['name'];
        $data['password'] = Hash::make($data['password']);
        Mail::to($data['email'])->send( new PasswordMail($password, $name));
        $data['role'] = (int)$data['role'];
        User::firstOrCreate(['email' => $data['email']],$data);
        return redirect()->route('users.index');
    }
}
