<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests;
use app\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
    	//$name = 'Jelle Schouwstra';
    	//return view('pages.about')->with('name',$name);
    	$first = 	'Fox';
    	//$last = 	'Mulder'; 
    	return view('pages.about')->with('first', $first);

    }

    public function contact(){
    	return view('pages.contact');
    }

}
