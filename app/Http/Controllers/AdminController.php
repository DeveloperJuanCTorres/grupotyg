<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contactanos;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::all();
        $users = User::all();
        $projects = Project::all();
        $services = Service::all();
        $nav = 'Inicio';
        return view('home',compact('nav','posts','users','projects','services'));
    }

    public function nosotros(){
        $users = User::all();
        $nav = 'Nosotros';
        return view('about',compact('nav','users'));
    }

    public function servicios(){
        $services = Service::all();
        $nav = 'Servicios';
        return view('service',compact('nav','services'));
    }
    
    public function servicioid(Service $service)
    {
        $nav = 'Servicios';
        return view('serviceid',compact('nav','service'));
    }
    public function proyectos(){
        $nav = 'Proyectos';
        $projects = Project::all();
        return view('project',compact('nav','projects'));
    }    

    public function proyectoid(Project $project)
    {
        $nav = 'Proyectos';
        return view('projectid',compact('nav','project'));
    }

    public function posts(){
        $posts = Post::all();
        $nav = 'Posts';
        return view('blog',compact('nav','posts'));
    }

    public function postid(Post $blog)
    {
        $nav = 'Posts';
        return view('blogid',compact('nav','blog'));
    }

    public function contactanos(){
        $nav = 'Contactanos';
        return view('contact',compact('nav'));
    }

    public function correo(Request $request)
    {
       $correo = new Contactanos($request);
        try {
            Mail::to('informes@grupotyg.pe')->send($correo);
            return response()->json(['status' => true, 'msg' => "El correo fue enviado satisfactoriamente"]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'msg' => $e->getMessage()]);
            // return response()->json(['status' => false, 'msg' => "Hubo un error al enviar, inténtalo de nuevo más tarde."]);
        }
    }
}
