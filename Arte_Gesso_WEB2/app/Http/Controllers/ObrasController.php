<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObrasController extends Controller
{
    public function index() {
        if(!PermissionController::isAuthorized('obras.index')) {
            abort(403);
        }



        $permissions = session('user_permissions');
        return view('obras', compact('permissions'));
    }

}
