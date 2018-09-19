<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlog() {
        return view('blog')->withTitle('Blog');
    }

    public function getBlogDetail() {
        return view('blog-detail')->withTitle('Blog Detail');
    }
}
