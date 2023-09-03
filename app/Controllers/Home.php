<?php

namespace App\Controllers;

use App\Models\Post;
use App\Enum\PublishStatusEnum;

class Home extends BaseController
{
    protected $post;

    public function __construct() {
        $this->post = new Post();
    }

    public function index(): string
    {
        $this->data['top_3_post'] = $this->post->where('status', PublishStatusEnum::PUBLISH)->orderBy('created_at', 'DESC')->findAll(3);
        return view('home/index', $this->data);
    }
}
