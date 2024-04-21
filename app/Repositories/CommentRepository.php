<?php

namespace App\Repositories;

use App\Models\Comment;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CommentRepository.
 */
class CommentRepository extends BaseRepository
{
    protected $model;

    public function __construct(Comment $category)
    {
        $this->model = $category;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function getByPostId($postId)
    {
        return $this->model->where('post_id', $postId)->get();
    }

    public function deleteById($commentId): bool
    {
        $comment = $this->model->findOrFail($commentId);
        return $comment->delete();
    }

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Comment::class;
    }
}
