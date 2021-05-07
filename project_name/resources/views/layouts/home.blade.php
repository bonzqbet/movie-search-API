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
    <form class="form-inline ml-3" action="{{ route('apiInsert.create') }}" method="get" style="display:none">
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
      <div class="row mt-5">
          <div class="col-md-12">
            <h2>Movie Detail in DB</h2>
          </div>
        </div>
    </div>

    @if($message = Session::get('success'))
      <div class="alert alert-success">
        {{ $message }}
      </div>
    @endif

    <table class="table table-bordered">
      <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Released</th>
        <th>imdbRating</th>
        <th>Runtime</th>
        <th>Rated</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($data as $key =>$value)
        <tr>
          <td>{{ ++$i }}</td>
          <td><a href="{{ route('posts.show',$value['id']) }}">{{ $value->Title }}</a></td>
          <td>{{ $value->Released }}</td>
          <td>{{ $value->imdbRating }}</td>
          <td>{{ $value->Runtime }}</td>
          <td>{{ Str::limit($value->Rated,30) }}</td>
          <td>
            <form action="{{ route('posts.destroy',$value->id) }}"  method="post">
              <a href="{{ route('posts.show',$value['id']) }}" class="btn btn-secondary">View</a>
              <a href="{{ route('posts.edit',$value['id']) }}" class="btn btn-primary">Edit</a>
              @csrf
              @method('DELETE')
              <button href="" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
        @if(empty($value->id))
        <tr><td colspan="7" align="center"  valign="middle"  class="divRightContantTbRL" style="padding-top:150px; padding-bottom:150px;" >None</td></tr>
        @endif
    </table>

    {!! $data->links() !!}

@endsection