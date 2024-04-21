<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class PostRepositoryQueryBuilder.
 */
class PostRepositoryQueryBuilder extends BaseRepository
{
    public function getAll()
    {
        return DB::table('posts')->get();
    }

    public function create(array $data)
    {
        return DB::table('posts')->insert($data);
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
