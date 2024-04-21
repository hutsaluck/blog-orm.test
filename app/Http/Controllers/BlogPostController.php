<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\CommentRepository;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getPosts($categoryId, $postId)
    {
        // Отримати інформацію про поточний пост
        $post = Post::findOrFail($postId);

        // Отримати коментарі до цього посту
        $comments = $this->commentRepository->getByPostId($postId);

        // Повернути інформацію про пост та коментарі
        return [
            'post' => $post,
            'comments' => $comments
        ];
    }

    public function updatePost(Request $request)
    {
        $postData = $request->all();

        $post = Post::findOrFail($postData['post_id']);
        $post->update($postData);

        return $post;
    }
}
