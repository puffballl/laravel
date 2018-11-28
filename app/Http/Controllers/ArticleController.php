<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticle($nummer){
        return view('article', [
            'article_id' => $nummer
        ]);
    }
}
