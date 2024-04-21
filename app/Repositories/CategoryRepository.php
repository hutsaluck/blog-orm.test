<?php

namespace App\Repositories;

use App\Models\Category;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CategoryRepository.
 */
class CategoryRepository extends BaseRepository
{

    protected $model;

    public function __construct(Category $category)
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

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Category::class;
    }


}
