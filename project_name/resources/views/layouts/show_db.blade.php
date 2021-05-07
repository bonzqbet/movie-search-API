@extends('layouts.main_template')
@section('header')
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('posts.index') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://github.com/bonzqbet" target="__blank" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action="{{ route('api.create') }}" method="get" style="display:none">
    @csrf
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="t" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </nav>
  <!-- /.navbar -->

@endsection
@section('content')
<div class="content-header">

    <div class="row md-5">
        <div class="col md-12 ">
            <h2>View movie detail</h2>
            <!-- <a href="{{ route('posts.create') }}" class="btn btn-primary">Back</a> -->
            <!-- <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
            <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-secondary">Edit</a> -->

            <form action="{{ route('posts.destroy',$post->id) }}"  method="post" class="my-3">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">Edit</a>
                 @csrf
                @method('DELETE')
            <button href="" class="btn btn-danger">Delete</button>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="card p-4">
    @isset($post)
            <div class="card-title">
                <strong>Title:</strong>
                {{ $post->Title }}
            </div>
            <div class="card-title">
                <strong>Year:</strong>
                {{ $post->Year }}
            </div>
            <div class="card-title">
                <strong>Released:</strong>
                {{ $post->Released }}
            </div>
            <div class="card-title">
                <strong>Runtime:</strong>
                {{ $post->Runtime }}
            </div>
            <div class="card-title">
                <strong>Genre:</strong>
                {{ $post->Genre }}
            </div>
            <div class="card-title">
                <strong>Director:</strong>
                {{ $post->Director }}
            </div>
            <div class="card-title">
                <strong>Writer:</strong>
                {{ $post->Writer }}
            </div>
            <div class="card-title">
                <strong>Actors:</strong>
                {{ $post->Actors }}
            </div>
            <div class="card-title">
                <strong>Plot:</strong>
                {{ $post->Plot }}
            </div>
            <div class="card-title">
                <strong>Language:</strong>
                {{ $post->Language }}
            </div>
            <div class="card-title">
                <strong>Country:</strong>
                {{ $post->Country }}
            </div>
            <div class="card-title">
                <strong>Awards:</strong>
                {{ $post->Awards }}
            </div>
            <div class="card-title">
                <strong>Poster:</strong>
                <img src="{{ $post->Poster }}" alt="">
            </div>
            <div class="card-title">
                <strong>Ratings:</strong>
                @foreach(unserialize($post->Ratings) as $key_t => $value_t)
                    @foreach($value_t as $keys => $value_v1)
                       {{ $value_v1 }} |
                    @endforeach
                @endforeach

            </div>
            <div class="card-title">
                <strong>Metascore:</strong>
                {{ $post->Metascore }}
            </div>
            <div class="card-title">
                <strong>imdbRating:</strong>
                {{ $post->imdbRating }}
            </div>
            <div class="card-title">
                <strong>imdbVotes:</strong>
                {{ $post->imdbVotes }}
            </div>
            <div class="card-title">
                <strong>imdbID:</strong>
                {{ $post->imdbID }}
            </div>
            <div class="card-title">
                <strong>Type:</strong>
                {{ $post->Type }}
            </div>
            <div class="card-title">
                <strong>DVD:</strong>
                {{ $post->DVD }}
            </div>
            <div class="card-title">
                <strong>BoxOffice:</strong>
                {{ $post->BoxOffice }}
            </div>
            <div class="card-title">
                <strong>Production:</strong>
                {{ $post->Production }}
            </div>
            <div class="card-title">
                <strong>Website:</strong>
                {{ $post->Website }}
            </div>
            <div class="card-title">
                <strong>Response:</strong>
                {{ $post->Response }}
            </div>

    @endisset
        </div>
    </div>
@endsection
