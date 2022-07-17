<header class="container">
    <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
    <ul>
        @foreach (config('headerLinks') as $link)
            <li><a class="link" href="{{$link['route']}}">{{$link['text']}}</a></li>
        @endforeach
    </ul>
  </header>
