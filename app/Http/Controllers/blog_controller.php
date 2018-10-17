<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog_controller extends Controller
{
    public function get_blog() {
        return view('blog')->withTitle('Blog');
    }

    public function get_blog_detail() {
        return view('blog_detail')->withTitle('Blog Detail');
    }
}
