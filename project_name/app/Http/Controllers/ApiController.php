<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        return Http::get('https://www.omdbapi.com/?s=Batman&page=1&apikey=32f246bc')->json();
        $data =  Http::get('https://www.omdbapi.com/?s=Batman&page=1&apikey=32f246bc')->json();

        // return view('layouts.create',['data'=>$data]);
        // return view('posts.create',['data'=>$data]);
    }
    public function create(Request $request)
    {
        
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
            // return $defultUrl;
            $data =  Http::get($defultUrl)->json();
            return view('layouts.show',['obj'=>$data])->with('active','Post add successfully');
        }else{
           // return view when request title don't exist
           return view('layouts.create');
        }

        // return view('layouts.show',compact('post'));
    }

    public function store($request)
    {
        return 'asd';
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
            // return $defultUrl;
            $data =  Http::get($defultUrl)->json();
            return view('layouts.show',['obj'=>$data]);
        }else{
           // return view when request title don't exist
           return view('layouts.create');
        }

        // return view('layouts.show',compact('post'));
    }
    
}
