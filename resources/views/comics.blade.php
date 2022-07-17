@extends('templates.base')

@section('title', 'DC Comics - ' . $title)

@section('content')
<section class="container-info">
    <div id="product-list">
      @foreach ($comics_arr as $comic)
        <a href="{{route ('comic_info',['id' => $comic['id']])}}">
        <figure id="product-card" >
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <figcaption>{{$comic['title']}}</figcaption>
        </figure>
        </a>
      @endforeach
    </div>
    <button class="btn">LOAD MORE</button>
  </section>
@endsection

