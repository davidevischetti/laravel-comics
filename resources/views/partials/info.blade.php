<section class="container info">
    @foreach ($info_arr as $info)
        <figure>
            <img src="{{$info['img']}}" alt="{{$info['text']}}">
            <figcaption>{{$info['text']}}</figcaption>
        </figure>
    @endforeach
</section>
