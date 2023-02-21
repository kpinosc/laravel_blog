<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Aqui se mostrara todos los post
    public function store(){
        return 'Aqui se procesara el post';
    }
    public function edit($post){
        return view("posts.edit",compact('post'));
        // return view("posts.edit",['post'=>$post]);
    }
    public function update($post){
        return "Aqui se actualizara el post $post";
    }
    public function destroy($post){
        return "Aqui se borrara el post $post";
    
    }
    public function index(){
        $posts = [
            [
                'title' => 'Post 1',
                'content'=> 'Content 1'
            ],
            [
                'title' => 'Post 2',
                'content'=> 'Content 2'
            ],
            [
                'title' => 'Post 3',
                'content'=> 'Content 3'     
            ]
            ];
       
        return view("posts.index",compact('posts'));
    }
    public function create(){   
        return view("posts.create");
    }
    public function show($post){
        return view("posts.show",compact('post'));
    }
}
