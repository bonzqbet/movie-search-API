@extends('layouts.main_template')

@section('content')
<div class="content-header">
    <div class="row-md-5">
        <div class="col-md-12">
            <h2>Edit Movie</h2>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary my-3">Back</a>
        </div>
    </div>
</div>

    @if($errors->any())
        <div class="alert alert-danger my-3">
            <strong>Whoop!</strong>
            There are some problems with your input. <br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update',$post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row my-3">
            <div class="col-md-4">
                <div class="form-group" style="display:none">
                    <strong>id:</strong>
                    <input type="text" name="id" class="form-control my-3" value="{{ $post->id }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="Title" class="form-control my-3" value="{{ $post->Title }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Year:</strong>
                    <input type="text" name="Year" class="form-control my-3" value="{{ $post->Year }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Rated:</strong>
                    <input type="text" name="Rated" class="form-control my-3" value="{{ $post->Rated }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Released:</strong>
                    <input type="text" name="Released" class="form-control my-3" value="{{ $post->Released }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Runtime:</strong>
                    <input type="text" name="Runtime" class="form-control my-3" value="{{ $post->Runtime }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Genre:</strong>
                    <input type="text" name="Genre" class="form-control my-3" value="{{ $post->Genre }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Director:</strong>
                    <input type="text" name="Director" class="form-control my-3" value="{{ $post->Director }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Writer:</strong>
                    <textarea name="Writer" id="" class="form-control my-3" cols="30" rows="4">{{ $post->Writer }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Actors:</strong>
                    <textarea name="Actors" id="" class="form-control my-3" cols="30" rows="3">{{ $post->Actors }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Plot:</strong>
                    <textarea name="Plot" id="" class="form-control my-3" cols="30" rows="4">{{ $post->Plot }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Language:</strong>
                    <input type="text" name="Language" class="form-control my-3" value="{{ $post->Language }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Country:</strong>
                    <input type="text" name="Country" class="form-control my-3" value="{{ $post->Country }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Awards:</strong>
                    <textarea name="Awards" id="" class="form-control my-3" cols="30" rows="2">{{ $post->Awards }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Poster:</strong>
                    <textarea name="Poster" id="" class="form-control my-3" cols="30" rows="3">{{ $post->Poster }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Ratings:</strong>
                    <div class="col-md-5">
                    <input type="text" value="1" name="Ratings" style="display:none;">
                    @foreach(unserialize($post->Ratings) as $key => $value)
                        {{ $value['Source'] }}: <input type="text" value="{{ $value['Value'] }}" name="Value[]"><br>
                        <input type="text" value="{{ $value['Source'] }}" name="Source[]" style="display:none;">
                    @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <strong>Metascore:</strong>
                    <input type="text" name="Metascore" class="form-control my-3" value="{{ $post->Metascore }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>imdbRating:</strong>
                    <input type="text" name="imdbRating" class="form-control my-3" value="{{ $post->imdbRating }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>imdbVotes:</strong>
                    <input type="text" name="imdbVotes" class="form-control my-3" value="{{ $post->imdbVotes }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>idmdbID:</strong>
                    <input type="text" name="imdbID" class="form-control my-3" value="{{ $post->imdbID }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Type:</strong>
                    <input type="text" name="Type" class="form-control my-3" value="{{ $post->Type }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>DVD:</strong>
                    <input type="text" name="DVD" class="form-control my-3" value="{{ $post->DVD }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>BoxOffice:</strong>
                    <input type="text" name="BoxOffice" class="form-control my-3" value="{{ $post->BoxOffice }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Production:</strong>
                    <input type="text" name="Production" class="form-control my-3" value="{{ $post->Production }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Website:</strong>
                    <input type="text" name="Website" class="form-control my-3" value="{{ $post->Website }}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <strong>Response:</strong>
                    <input type="text" name="Response" class="form-control my-3" value="{{ $post->Response }}" placeholder="Enter Title">
                </div>
                <div class="col-md-1 p-4">
                    <button type="submit" class="btn btn-primary my-3">Update</button>
                </div>
            </div>
            <!-- <div class="col-md-1 p-4">
                <button type="submit" class="btn btn-primary my-3">Update</button>
            </div> -->
        </div>
    </form>

@endsection