@extends ('layout')

@section('content')
    @foreach ($posts as $post)

        <article class="{{$loop->odd ? "hola senor" : "hello there"}}">

            <h1><a href="/posts/{{$post->id}}"> {{$post->title }}</a> </h1>
            <span>{{$post->date}}</span>
            <p><?= $post->excerpt; ?></p>

        </article>
    @endforeach

@endsection
