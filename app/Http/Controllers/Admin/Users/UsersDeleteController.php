<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersDeleteController extends Controller
{
    public function __invoke(User $user)
    {
       $user->delete();
       return redirect()->route('users.index')->with('FLASH_DELETED', 'User was deleted');
    }
}
