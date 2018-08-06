<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Nafisa;
use App\Student;
class TestingController extends Controller
{
    public function sayhi(){
        return "hello how are ";
    }

    public function sayhiagain(){
        return view('great');
    }
    
    public function index(){
       
        $student=Student::all();
        dd($student);
        
        return view('homepages.home',['title'=>"Home"]);
    }

    public function about(){
        return view('homepages.about')
        ->with('title','About')
        ->with('name','Sanhory');
    }

    public function contact(){
        $n= Student::orderBy('name')->take(1)->get();
        dd($n);
       

        return view('homepages.contacts')
        ->with('title','Contact')
        ;
    }

    public function showcalc(){
        return view('calc');
    }
    public function subcalc(Request $request){
        $n1= $request->num1;
        $n2= $request->num2;
        $sum= $n1 + $n2;
        \Session::flash('message',$sum);
        return \Redirect::to('calc');
    }

}