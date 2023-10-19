<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::all();
        $users = User::all();
        $nav = 'Inicio';
        return view('home',compact('nav','posts','users'));
    }

    public function nosotros(){
        $nav = 'Nosotros';
        return view('about',compact('nav'));
    }

    public function servicios(){
        $nav = 'Servicios';
        return view('service',compact('nav'));
    }

    public function proyectos(){
        $nav = 'Proyectos';
        return view('project',compact('nav'));
    }

    public function posts(){
        $posts = Post::all();
        $nav = 'Posts';
        return view('blog',compact('nav','posts'));
    }
}
