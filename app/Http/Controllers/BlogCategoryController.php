<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\PostRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    protected $categoryRepository;
    protected $postRepository;

    public function __construct(CategoryRepository $categoryRepository, PostRepository $postRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
    }

    public function getCategories($categoryId)
    {
        // Отримати інформацію про поточну категорію
        $category = Category::findOrFail($categoryId);

        // Отримати список постів з цієї категорії
        $posts = $this->postRepository->getByCategoryId($categoryId);

        // Повернути інформацію про категорію та список постів
        return [
            'category' => $category,
            'posts' => $posts
        ];
    }

    public function addCategory(Request $request)
    {
        $data = $request->all();
        return $this->categoryRepository->create($data);
    }
}
