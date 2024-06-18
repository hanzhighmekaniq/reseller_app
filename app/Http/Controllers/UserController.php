<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller {
    // Approve member request
    public function approveMember($id) {
        $user = User::find($id);
        $user->approved = true;
        $user->save();

        return redirect()->back()->with('success', 'Member approved successfully.');
    }
}
