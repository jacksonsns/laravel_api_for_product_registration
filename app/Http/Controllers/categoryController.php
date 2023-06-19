<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class categoryController extends Controller
{
    public function index(): Response
    {
        $categorie = Category::get();

        return response([
            'success' => true,
            'data' => $categorie,
        ]);
    }

}
