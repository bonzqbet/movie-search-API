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
    <form class="form-inline ml-3" action="{{ route('api.create') }}" method="get">
    @csrf
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" value="@isset($obj['Title']){{$obj['Title']}}@endisset" name="t" placeholder="Search" aria-label="Search">
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
        <div class="col md-12 my-3">
            <h2>View Movie detail</h2>
            <!-- <a href="{{ route('posts.create') }}" class="btn btn-primary">Back</a> -->
            <a href="{{ route('apiInsert.index',['t' => $obj['Title']]) }}" class="btn btn-secondary">Back</a>
            <!-- <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a> -->
            <a href="{{ route('apiInsert.show',$obj['imdbID']) }}" class="btn btn-success">Add</a>
        </div>
    </div>
</div>
    <div class="row">
        <div class="card p-4">
    @isset($obj)
    @foreach($obj as $key => $value)
            <div class="card-title">
                <strong>{{ $key }}:</strong>
                @if(gettype($value)=='array')
                    @foreach($value as $keys => $value_v1)
                        <!-- foreach Rating -->
                        @foreach($value_v1 as $key_v1 => $value_array) 
                            @if($key_v1 == 'Source')
                                {{ $value_array }}
                            @endif
                            @if($key_v1 != 'Source')
                                {{ $value_array }} |
                            @endif
                        @endforeach
                    @endforeach
                @endif
                @if(gettype($value)!='array')
                    <!-- Check Img  -->
                    @if($key == 'Poster')
                        <img src="{{ $value }}" alt="">
                    @endif
                    @if($key != 'Poster')
                        {{ $value }}
                    @endif
                @endif
            </div>

    @endforeach
    @endisset
        </div>
    </div>
@endsection
