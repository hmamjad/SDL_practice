<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    public function add_author(){

        $author = new Author();
        $author->name = 'amjad';
        $author->password = 'amjad123';
        $author->save();
    }

    public function show_author($id){
        $author = Post::find($id)->author;
        return $author;
    }
}
