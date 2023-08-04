<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AstroSign ;
use App\Models\Continent;

class WelcomeController extends Controller{
    public function index(){
        $signs=AstroSign::all();
        $europe=Continent::where([['code','=','EU']])->first();      
        return view('welcome',compact('signs','europe'));
    }
}