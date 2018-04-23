<?php

namespace App\Faagram;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Post extends Eloquent
{
    protected $collection = 'faagram_post';
    protected $connection = 'mongodb';
    static $colors = array();
    static $types = array();

    public static function boot()
    {
        $types = DB::connection('mysql_clothes')->table('type')->get()->toArray();
        $colors = DB::connection('mysql_clothes')->table('color')->get()->toArray();
        Post::$colors = $colors;
        Post::$types = $types;
    }

    public static function add($id){
        $post = new self();
        $post->id = $id;
        $post->label = array_random(Post::$types,1)[0]->name;
        $post->color = array_random(Post::$colors,1)[0]->name;
        $post->save();
    }
}