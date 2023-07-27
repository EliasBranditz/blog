<x-layout>
@foreach ($posts as $post) 
<article class="{{ $loop->even ? 'foobar' : '' }}">
<h1>
<a href="/posts/{{ $post->slug }}">
{{ $post->title }}
</a>
</a>    

</h1>

<div>
{{ $post->exerpt; }}
</div>

</article>
@endforeach
</x-layout>