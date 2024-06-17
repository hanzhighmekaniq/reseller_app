<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    // Approve member request
    public function approveMember($id) {
        $user = User::find($id);
        $user->approved = true;
        $user->save();

        return redirect()->back()->with('success', 'Member approved successfully.');
    }
}
