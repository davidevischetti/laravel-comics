<section class="container info">
    @foreach (config('info') as $info)
        <figure>
            <img src="{{asset($info['img'])}}" alt="{{$info['text']}}">
            <figcaption>{{$info['text']}}</figcaption>
        </figure>
    @endforeach
</section>
