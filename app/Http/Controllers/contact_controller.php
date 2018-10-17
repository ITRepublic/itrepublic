<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function get_contact() {
        return view('contact')->withTitle('Contact');
    }
}
