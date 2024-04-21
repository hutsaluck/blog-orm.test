<?php

namespace App\Http\Controllers;

use App\Repositories\CommentRepository;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function deleteComment(Request $request)
    {
        $commentId = $request->input('comment_id');

        $this->commentRepository->deleteById($commentId);

        return response()->json(['message' => 'Comment deleted successfully']);
    }
}
