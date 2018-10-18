<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about_controller extends Controller
{
    public function get_about() {
        return view('about_us')->withTitle('About Us');
    }
}
