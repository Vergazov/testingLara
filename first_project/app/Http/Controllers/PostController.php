<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('isPublished', 1)->get();
        dump($posts);
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post',
                'content' => 'interesting content',
                'image' => 'some.img',
                'likes' => 1294,
                'isPublished' => '1',
            ],
            [
                'title' => 'another title of post',
                'content' => 'another interesting content',
                'image' => 'some.img',
                'likes' => 750,
                'isPublished' => '1',
            ]
        ];

        foreach ($postsArr as $post) {
            Post::create($post);
        }
    }

    public function update()
    {
        $post = Post::find(17);
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 1,
            'isPublished' => 1
        ]);
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
    }

    public function restore(){
        $post = Post::withTrashed()->find(2);
        $post->restore();
    }

}
