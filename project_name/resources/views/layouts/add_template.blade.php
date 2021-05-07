@extends('layouts.main_template')
@section('content')
    <div class="row mt-5">
      <div class="col-md-12">
        <h2>Laravel CRUD API - Index</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-success my-3">Create new post</a>
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
        <th>Year</th>
        <th>imdbID</th>
        <th>Type</th>
        <th>Poster</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($data as $key =>$value)
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $value->title }}</td>
          <td>{{ $value->year }}</td>
          <td>{{ $value->imdbID }}</td>
          <td>{{ $value->type }}</td>
          <td>{{ Str::limit($value->poster,30) }}</td>
          <td>
            <form action="{{ route('posts.destroy',$value->id) }}">
              <a href="{{ route('posts.show',$value->id) }}" class="btn btn-primary">Show</a>
              <a href="{{ route('posts.show',$value->id) }}" class="btn btn-secondary">Edit</a>
              @csrf
              $method('DELETE')
              <button href="" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

@endsection