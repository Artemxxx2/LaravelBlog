<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\UpdateRequest as UsersUpdateRequest;
use App\Models\User;

class UsersUpdateController extends Controller
{
    public function __invoke(UsersUpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('users.index')->with('FLASH_UPDATED', 'User data was changed');
    }
}
