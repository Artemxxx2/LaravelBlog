<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        $data['category_id'] = (int)$data['category_id'];
        $data['file_preview']= Storage::disk('public')->put('/images',$data['file_preview']);
        $data['file_main']=Storage::disk('public')->put('/images', $data['file_main']);
        Post::firstOrCreate($data);
    }
    public function update()
    {

    }
}
