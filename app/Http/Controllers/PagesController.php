<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = "Hugo Sajama";
      return view('pages.index')->with('title', $title);
    }

    public function faq(){
      $title = "FAQ";
      return view('pages.faq')->with('title', $title);
    }
    public function login(){
      $title = "Login";
      return view('pages.login')->with('title', $title);
    }
    public function registro(){
      $title = "Registro";
      return view('pages.registro')->with('title', $title);
    }
    public function productos(){
      $title = "Productos";
      return view('pages.productos')->with('title', $title);
    }
    public function user(){
      $title = "User";
      return view('pages.user')->with('title', $title);
    }
    public function admin(){
      $title = "Admin";
      return view('pages.admin')->with('title', $title);
    }

}
