<?php

namespace App\Actions\Post;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class CreatePost
{
    use AsAction;

    public function handle(User $user, array $data)
    {
        return $user->posts()->create($data);
    }
}
