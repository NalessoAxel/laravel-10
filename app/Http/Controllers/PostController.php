<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Http\Requests\PostCreateRequest;
use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function create(): View
    {

        return view('blog.create');
    }

    public function store(PostCreateRequest $request)
    {
        $post = Post::Create($request->validated());
        return redirect()->route('blog.show', ['slug' => $post->slug, 'post' => $post->id])->with('success', "Article sauvegardé");
    }

    public function index(BlogFilterRequest $request): View
    {
        return view('blog.index', [
            'posts' => Post::paginate(1),
        ]);
    }

    public function show(string $slug, Post $post): RedirectResponse |  view
    {

        if ($post->slug !== $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'post' => $post->id]);
        }

        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
