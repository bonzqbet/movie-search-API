<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
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
    public function index()
    {
        //
        $data = Post::latest()->paginate(5);

        return view('layouts.home',compact('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.create',['active'=>'active']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'year' => 'required',
            'imdbID' => 'required',
            'type' => 'required',
            'poster' => 'required'
        ]);

        Post::create($request->all());

        return redirect()->route('layouts.home')->with('success','Post create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        // $page = Post::find($request);
        // return print_pre($page);
        // return print_pre($post);
        return view('layouts.show_db',compact('post'));
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
        return view('layouts.edit',compact('post'));
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

        // $stuff = array('name' => 'Joe', 'email' => 'joe@example.com');
        // print json_encode($stuff);
        // $datatest = json_encode($request->all());
        // $post->update($request->all());
        // print_pre($datatest);
        
        // return print_pre('sd');
        
        $page = Post::find($request->id);
        if($page) {
            $key_array = array('Title','Year','imdbID','Type','Poster','Rated','Released','Runtime','Genre','Director','Writer',
            // 'Actors','Plot','Language','Country','Awards','Metascore','imdbRating','imdbVotes','DVD','BoxOffice','Production','Website','Response');
            'Actors','Plot','Language','Country','Awards','Metascore','imdbRating','imdbVotes','DVD','BoxOffice','Production','Website','Response','Ratings');
            $insert = array();
            $i = 0;
            // foreach($request->all() as $keys => $values){
            //     if(isset($request->all()[$key_array[$i]])){
                    // print_pre($key_array[$i]);
                    // print_pre($request->all()[$key_array[$i]]);
                    // $test = (array)$request->all()[$key_array[$i]];
                    // $obj_attribute = (array)$key_array[$i];
                    // print_pre($test);
                    // print_pre($obj_attribute);
                    // $page->$test;
                    // $page->$key_array[$i] = $request->all()[$key_array[$i]];
            //     }
            //     $i++;
            // }

            if(isset($request->all()[$key_array[0]])){
                $page->Title = $request->all()[$key_array[0]];
            }
            if(isset($request->all()[$key_array[1]])){
                $page->Year = $request->all()[$key_array[1]];
            }
            if(isset($request->all()[$key_array[2]])){
                $page->imdbID = $request->all()[$key_array[2]];
            }
            if(isset($request->all()[$key_array[3]])){
                $page->Type = $request->all()[$key_array[3]];
            }
            if(isset($request->all()[$key_array[4]])){
                $page->Poster = $request->all()[$key_array[4]];
            }
            if(isset($request->all()[$key_array[5]])){
                $page->Rated = $request->all()[$key_array[5]];
            }
            if(isset($request->all()[$key_array[6]])){
                $page->Released = $request->all()[$key_array[6]];
            }
            if(isset($request->all()[$key_array[7]])){
                $page->Runtime = $request->all()[$key_array[7]];
            }
            if(isset($request->all()[$key_array[8]])){
                $page->Genre = $request->all()[$key_array[8]];
            }
            if(isset($request->all()[$key_array[9]])){
                $page->Director = $request->all()[$key_array[9]];
            }
            if(isset($request->all()[$key_array[10]])){
                $page->Writer = $request->all()[$key_array[10]];
            }
            if(isset($request->all()[$key_array[11]])){
                $page->Actors = $request->all()[$key_array[11]];
            }
            if(isset($request->all()[$key_array[12]])){
                $page->Plot = $request->all()[$key_array[12]];
            }
            if(isset($request->all()[$key_array[13]])){
                $page->Language = $request->all()[$key_array[13]];
            }
            if(isset($request->all()[$key_array[14]])){
                $page->Country = $request->all()[$key_array[14]];
            }
            if(isset($request->all()[$key_array[15]])){
                $page->Awards = $request->all()[$key_array[15]];
            }
            if(isset($request->all()[$key_array[16]])){
                $page->Metascore = $request->all()[$key_array[16]];
            }
            if(isset($request->all()[$key_array[17]])){
                $page->imdbRating = $request->all()[$key_array[17]];
            }
            if(isset($request->all()[$key_array[18]])){
                $page->imdbVotes = $request->all()[$key_array[18]];
            }
            if(isset($request->all()[$key_array[19]])){
                $page->DVD = $request->all()[$key_array[19]];
            }
            if(isset($request->all()[$key_array[20]])){
                $page->BoxOffice = $request->all()[$key_array[20]];
            }
            if(isset($request->all()[$key_array[21]])){
                $page->Production = $request->all()[$key_array[21]];
            }
            if(isset($request->all()[$key_array[22]])){
                $page->Website = $request->all()[$key_array[22]];
            }
            if(isset($request->all()[$key_array[23]])){
                $page->Response = $request->all()[$key_array[23]];
            }
            if(isset($request->all()[$key_array[24]])){
                $Ratings = array();
                foreach($request->Source as $key_source => $value_source){
                    $Ratings[] = [
                        'Source' => $value_source,
                        'Value' => $request->Value[$key_source]
                    ];
                }
                $page->Ratings = serialize($Ratings);
            }
        }
        $page->save();
        // $post->update($request->all());

        return redirect()->route('posts.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        DB::table('posts')->delete($request);

        return redirect()->route('posts.index')->with('success','Post deleted successfully');
    }
   
}
