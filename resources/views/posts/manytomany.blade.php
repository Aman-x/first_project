.<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Title</h1>
        <p class="lead">Subtitle</p>
        <hr class="my-4">
        <p>Content</p>
    </div>
</div>
@foreach ($tags as $tag)
<h1 style="color: green">{{ $tag->name }}</h1>
{{-- <h3 style="color: red">{{ $tag->user->name }}</h3> --}}
<ul>

    @foreach ($tag->posts as $post)
        <li style="color: royalblue">{{ $post->title }}</li>
    @endforeach
</ul>

@endforeach