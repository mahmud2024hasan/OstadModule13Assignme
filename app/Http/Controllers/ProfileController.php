<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        // User Details
        $id = $request->id;
        $name = "Donald Trump";
        $age = "75";
        $data = ["id" => $id, "name" => $name, "age" => $age];
        
        // Set Cookie
        $cookie_name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response($data, 200)->cookie($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly);
        
    }
}
