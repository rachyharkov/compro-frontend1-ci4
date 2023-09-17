<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post as ModelsPost;

class Post extends BaseController
{
    protected $post;

    public function __construct()
    {
        $this->post = new ModelsPost();
    }

    public function index()
    {
        $this->data['posts'] = $this->post->findAll();
        return view('post/index', $this->data);
    }

    public function show($slug)
    {
        $this->data['post'] = $this->post->where('slug', $slug)->first();
        $this->data['post']->category = $this->post->getCategory($this->data['post']->id);

        return view('post/show', $this->data);
    }
}
