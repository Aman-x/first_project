{{-- @foreach ($posts as $post)
<h1>{{ $post->title }}</h1>
<p>{{ $post->user->name }}</p>
@endforeach --}}

@foreach ($users as $user)
<h1>{{ $user->name }}</h1>
    @foreach ($user->posts as $post)
    <p>{{ $post->title }}</p>
    @endforeach
@endforeach