<?php

namespace App\Service;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function index()
    {
       return Post::all();
    }
    public function store($data)
    {
        $data['category_id'] = (int)$data['category_id'];
        $data['file_preview']= Storage::disk('public')->put('/images',$data['file_preview']);
        $data['file_main']=Storage::disk('public')->put('/images', $data['file_main']);
        Post::firstOrCreate($data);
    }
    public function update($post,$data)
    {
        $post->update($data);
    }
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return [$tags,$categories];
    }
    public function delete($post)
    {
        $post->delete();
    }
}
