<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Requests\Admin\Users\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersStoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $data['role'] = (int)$data['role'];
        User::firstOrCreate(['email' => $data['email']],$data);
        return redirect()->route('users.index');
    }
}
