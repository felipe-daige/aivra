<?php

namespace App\Http\Controllers;

use App\Services\BlogService;

class BlogController extends Controller
{
    public function __construct(
        private readonly BlogService $blogService
    ) {}

    public function index()
    {
        return view('blog', [
            'featuredPosts' => $this->blogService->getFeaturedPosts(),
            'allPosts'      => $this->blogService->getAllPosts(),
        ]);
    }

    public function show(string $slug)
    {
        $post = $this->blogService->getPostBySlug($slug);

        if (! $post) {
            abort(404);
        }

        return view('blog.show', [
            'post'         => $post,
            'relatedPosts' => $this->blogService->getRelatedPosts($slug, limit: 3),
        ]);
    }
}
