@extends('templates.base')

@section('title', 'DC Comics')

@section('content')
<section class="container">
    <div id="product-list">
      @foreach ($comics_arr as $comics)
        <figure id="product-card" >
            <img src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
            <figcaption>{{$comics['title']}}</figcaption>
        </figure>
      @endforeach
    </div>
    <button class="btn">LOAD MORE</button>
  </section>
@endsection

