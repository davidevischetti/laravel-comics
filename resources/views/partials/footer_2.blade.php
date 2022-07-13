<footer id="second-footer" class="container">
    <button class="btn">SIGN-UP NOW!</button>
    <div id="follow">
        <h5>FOLLOW US</h5>
        @foreach (config('socialLinks') as $social)
            <img src="{{$social['icon']}}" alt="{{$social['text']}}" >
        @endforeach
    </div>
</footer>
