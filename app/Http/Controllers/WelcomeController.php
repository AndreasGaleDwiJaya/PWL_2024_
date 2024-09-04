<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class WelcomeController extends Controller
// {
//     public function hello() {
//         return 'Hello World';
//     }
// }


// {
//     public function index() {
//         return 'selamat```````````````` datang';
//     }
// }


// {
//    public function about()
//    {
//        return 'Nama: [Andreas], NIM: [2241760033]';
//    }
// }


// {
//     public function articles($id)
//     {
//         return "Halaman Artikel dengan ID: {$id}";
//     }
// }

class WelcomeController extends Controller {     
    // public function hello(){         
    //     return('Hello World');
    // }  
    // public function greeting(){ 
    //     return view('blog.hello', ['name' => 'Andreas Gale']); 
    // }

    // public function hello(){
    //     return('Hello World'); 
    //} 
        public function hello(){
            return('Hello World');
        }
        public function greeting(){
            return view('blog.hello')
            ->with('name','Andreas Gale')
            ->with('occupation','Astronaut');
        }
}