<?php

namespace app\Http\Controllers;

//import class
use app\article;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Carbon\Carbon;

//use Illuminate\Http\Request;

use Request;
class ArticlesController extends Controller
{
    public function index(){
        //Only get articles of current date or older
        //                   get the latest on top       where  value  is less then current date 'Carbon::now()'.
        // A) $articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
        // B) This way is better, now the scope 'published()'  is called from the 'article' model
        $articles = Article::latest('published_at')->published()->get();



    	//Get all articles (array)
        //$articles = Article::all();
        
        // Get all article objects  and order_by 'published_at' values
        //$articles = Article::latest('published_at')->get();

        //A) In the view 'articles.index', send the articles] objects
    	return view('articles.index', compact('articles'));

    	//B) or with this:
    	//  return view('articles.index')->with('articles', $articles);
    }

    public function show($id){
    	//return $id;
    	$article = Article::findOrFail($id);
    	return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }


    //Add a request class with rules for validation
    public function store(Requests\CreateArticleRequest $request){
        // $input = Request::all();
        // $input['published_at'] = Carbon::now();
        // Article::create($input);

        Article::create(Request::all());//This equals Request::all() but more compact because Article::create now contains Request::all()
        
        //The browser is now being redirected to the articles (in this case articles.index) view
        return redirect('articles');
    }
}
