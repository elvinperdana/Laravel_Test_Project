<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('posts.user_id', Auth::id())
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.name as user_id_name', 'users.email as user_id_email')
            ->orderBy('posts.created_at', 'desc')
            ->get();

        return view('pages.activity.activity', [
            'posts' => $posts,
        ]);
    }
    public function viewDetailActivity($id)
    {
        $post = Post::findOrFail($id);

        return view('pages.activity.detail', ['post' => $post]);
    }
    public function createNewPostView(Request $request)
    {
        return view('pages.activity.post');
    }
    public function createNewPost(Request $request): RedirectResponse
    {
        $postData = $request->all();

        Post::create([
            'title' => $postData['title'],
            'content' => $postData['content'],
            'user_id' => Auth::id(),
        ]);

        return redirect(route('activity'));
    }
    public function destroyPost($id): RedirectResponse
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('activity')->with('status', 'post-deleted');
    }

    public function editPostView($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.activity.edit', [
            'post' => $post,
        ]);
    }

    public function editPost(Request $request, $id): RedirectResponse
    {
        $data = $request->all();
        $post = Post::findOrFail($id);

        $post->update($data);

        return redirect()->route('activity')->with('status', 'post-updated');
    }
}
