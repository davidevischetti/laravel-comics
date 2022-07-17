@extends('templates.base')

@section('title', 'DC Comics - ')

@section('content')
<div id="container-info" class="container">
    <div id="comic-info">
        <h2>{{$comic['title']}}</h2>
        <div class="buy">
            <div class="price">U.S. Price: <span>{{$comic['price']}}</span></div>
            <div class="availability">AVAILABLE <span class="check">Check Availability</span></div>
        </div>
        <p>{{$comic['description']}}</p>
    </div>
    <img src="{{asset('img/adv.jpg')}}" alt="lgo">
</div>

<div class="container" id="specifiche">
    <div id="talent-specs">
        <h3>Talent</h3>
        <div>
            <span>Art by:</span>
            <p>
                @foreach ($comic['artists'] as $artist)
                    <span>{{$artist}},</span>
                @endforeach
            </p>
        </div>
        <div>
            <span>Written by:</span>
            <p>
                @foreach ($comic['writers'] as $writer)
                    <span>{{$writer}},</span>
                @endforeach
            </p>
        </div>
    </div>

    <div id="talent-specs">
        <h3>Specs</h3>
        <div>
            <span>Series:</span>
            <p>{{$comic['series']}}</p>
        </div>
        <div>
            <span>U.S. Price:</span>
            <p>{{$comic['price']}}</p>
        </div>
        <div>
            <span>On Sale Date:</span>
            <p>{{$comic['sale_date']}}</p>
        </div>
    </div>
</div>
@endsection

