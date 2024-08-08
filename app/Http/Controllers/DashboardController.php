<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
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
        $post = Post::where('posts.id', $id)
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.name as user_id_name', 'users.email as user_id_email')
            ->firstOrFail();

        $comments = Comment::where('comments.post_id', $post->id)
        ->orderBy('comments.created_at', 'desc')
        ->join('users', 'comments.user_id', '=', 'users.id')
        ->select('comments.*', 'users.name as user_id_name', 'users.email as user_id_email')
        ->get();

        return view('pages.dashboard.detail', ['post' => $post], ['comments' => $comments]);
    }

    public function createComment(Request $request, $id): RedirectResponse
    {
        $commentData = $request->all();

        Post::create([
            'post_id' => $id,
            'comment' => $commentData['comment'],
            'user_id' => Auth::id(),
        ]);

        return redirect(route('view-detail-dashboard', $id));
    }

    public function checkLogin()
    {
        return response()->json(true);
    }
}
