<?php

namespace App\Http\Controllers;

use App\Http\Resources\PermissionResource;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        return [
            'data' => Permission::all(),
        ];

        //return PermissionResource::collection(Permission::all());
    }
}
