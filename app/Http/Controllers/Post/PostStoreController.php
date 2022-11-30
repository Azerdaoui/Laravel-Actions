<?php

namespace App\Http\Controllers\Post;

use App\Actions\Post\CreatePost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostStoreController extends Controller
{
    public function __construct(
        protected CreatePost $createPost
    ) {
    }

    public function __invoke(Request $request)
    {        
        $validatedData = $this->validate($request, [
            'body' => 'required'
        ]);

        $this->createPost->run($request->user(), $validatedData);

        return back();
    }
}
