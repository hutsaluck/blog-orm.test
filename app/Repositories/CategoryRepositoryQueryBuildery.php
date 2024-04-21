<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CategoryRepositoryQueryBuildery.
 */
class CategoryRepositoryQueryBuildery extends BaseRepository
{

    public function getAll()
    {
        return DB::table('categories')->get();
    }

    public function create(array $data)
    {
        return DB::table('categories')->insert($data);
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
