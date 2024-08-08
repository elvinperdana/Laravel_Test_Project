<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.name as user_id_name', 'users.email as user_id_email')
            ->orderBy('posts.created_at', 'desc')
            ->get();

        return view('pages.dashboard.dashboard', ['posts' => $posts]);
    }

    public function viewDetailDashboard($id)
    {
        $post = Post::findOrFail($id);

        return view('pages.dashboard.detail', ['post' => $post]);
    }

    public function checkLogin()
    {
        return response()->json(true);
    }
}
