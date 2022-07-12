<header class="container">
    <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
    <ul>
        @foreach ($headerLinks_arr as $link)
            <li><a class="link" href="#">{{$link}}</a></li>
        @endforeach

    </ul>
  </header>
