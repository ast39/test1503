<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller {


    public function index(): JsonResponse
    {
       return response()->json(['data' => true]);
    }

}
