<footer id="main-footer" class="container">

    <div id="links-container">
        @foreach ($footerLinks_arr as $list)
            <div class="links-list">
            <h4>{{$list['title']}}</h4>
            <ul>
                @foreach ($list['links'] as $links)
                    <li><a href="#">{{$links['text']}}</a></li>
                @endforeach
            </ul>
          </div>
        @endforeach
    </div>

    <img src="{{asset('img/dc-logo-bg.png')}}" alt="">

  </footer>
