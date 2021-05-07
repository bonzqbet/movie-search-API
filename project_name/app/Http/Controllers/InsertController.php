<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class InsertController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) // back form search api
    {
        //
        // return print_pre($request->t);
        $apikey = "apikey=32f246bc";
         $defultUrl = "https://www.omdbapi.com/?";
         $data_query = array();
         $var_queryStr = array('s');
         $query_str = "";
         // return view when request title exist
         if(!empty($request->t)){
             $defultUrl = $defultUrl."".$apikey;
             if(!empty($request->t)){
                 $data_query[] = $request->t;
             }
             foreach($data_query as $key => $value){
                 $query_str .= "&".$var_queryStr[$key]."=".$value;
             }
             $defultUrl = $defultUrl."".$query_str;
             $data =  Http::get($defultUrl)->json();
            //  return $data;
             if($data['Response'] == 'True'){
                 return view('layouts.create',['obj'=>$data['Search'],'title'=>$request->t])->with('i',(request()->input('page',1)-1)*5)->with('active','active');
             }else{
                return redirect()->route('posts.create')->with('err','Error Movie not found!');
             }
         }else{
            // return view when request title don't exist
            return view('layouts.create');
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // return $request->t;
        // $data = Post::latest($request->t)->paginate(5);
        // $data = DB::where('Title', $request->t)->get();
        $data = Post::where('Title', '=', $request->t)->first();
        // $data = Post::find('Title');

        // return print_pre($data);

        return view('layouts.home',compact('data'))->with('i',(request()->input('page',1)-1)*5);
        // return view('layouts.home',compact('data'))->with('i',(request()->input('page',1)-1)*5);


        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        //
        return 'asd';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {

        $apikey = "apikey=32f246bc";
        $defultUrl = "https://www.omdbapi.com/?";
        $data_query = array();
        $var_queryStr = array('i');
        $query_str = "";
        // return view when request title exist
        if(!empty($request)){
            $defultUrl = $defultUrl."".$apikey;
            if(!empty($request)){
                $data_query[] = $request;
            }
            foreach($data_query as $key => $value){
                $query_str .= "&".$var_queryStr[$key]."=".$value;
            }
            $defultUrl = $defultUrl."".$query_str;
            $data =  Http::get($defultUrl)->json();
            // return view('layouts.show',['obj'=>$data]);
        }else{
           // return view when request title don't exist
           return view('layouts.create');
        }
        $key_array = array('Title','Year','imdbID','Type','Poster','Rated','Released','Runtime','Genre','Director','Writer',
        'Actors','Plot','Language','Country','Awards','Ratings','Metascore','imdbRating','imdbVotes','DVD','BoxOffice','Production','Website','Response');
        $insert = array();
        foreach($key_array as $keys => $values){

            // if($values)

            if(isset($data[$values])){
                if(gettype($data[$values])=='array'){
                    $insert[$values] = "".serialize($data[$values])."";
                }
                if(gettype($data[$values])!='array'){
                    $insert[$values] = "".$data[$values]."";
                }
            }
        }
        // print_pre($insert);
        // return 'asdaaa';
        DB::table('posts')->insert($insert); // insert to DB
        $data = Post::latest()->paginate(5); // get data form DB
        return redirect()->route('posts.index')->with('success','Post add successfully');

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
