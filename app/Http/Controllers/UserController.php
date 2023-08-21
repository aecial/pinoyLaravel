<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'Hemwo!';
    }
    public function show($id) {
        $data = array(
            "id" => $id,
            "name" => "Ted",
            "age" => 22,
            "email" => "kledted23@gmail.com"

        );
        return view('user', $data);
    }
    public function create() {
        return view('users.create');
    }
}
