<?php

namespace App\Repositories;

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CommentRepositoryQueryBuilder.
 */
class CommentRepositoryQueryBuilder extends BaseRepository
{

    public function getAll()
    {
        return DB::table('comments')->get();
    }

    public function create(array $data)
    {
        return DB::table('comments')->insert($data);
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
