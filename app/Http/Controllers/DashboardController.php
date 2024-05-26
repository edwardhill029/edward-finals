<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        $unpublishedPosts = Post::where('status', 0)->count();
        $publishedPosts = Post::where('status', 1)->count();

        return view('Dashboard', compact('totalPosts', 'unpublishedPosts', 'publishedPosts'));
    }

}
