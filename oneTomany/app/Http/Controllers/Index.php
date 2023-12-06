<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Author;
use App\Models\Post;

class Index extends Controller
{
    public function index_author($id)
    {

        $author = Author::find($id);

        //     echo"<pre>";
        //    print_r($author->name); 
        //    echo "<br>";
        //    print_r($author->password);
        //    echo "<br>";
        //    dd($author->post);

        foreach ($author->post as $post) {
            echo $post->title . '<br>';
            echo $post->cat . '<br>';
        }
    }

    public function index_post($id)
    {
        $post = Post::find($id);

        //     echo"<pre>";
        //    print_r($post->title); 
        //    echo "<br>";
        //    print_r($post->cat);
        //    echo "<br>";
        //    dd($post->author);

      echo  $post->author->name."<br>";
      echo  $post->author->password."<br>";

    }

 
}
