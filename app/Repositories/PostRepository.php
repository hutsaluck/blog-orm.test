<?php

namespace App\Repositories;

use App\Models\Post;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class PostRepository.
 */
class PostRepository extends BaseRepository
{
    protected $model;

    public function __construct(Post $category)
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

    public function getByCategoryId($categoryId)
    {
        return $this->model->where('category_id', $categoryId)->get();
    }

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Post::class;
    }
}
