@extends(theme_path('layout'))

@section('title')
  Archives
@stop

@section('content')
  <section>
    @if (isset($tag))
      <h2 class="title">{{ ucfirst($tag) }} Archives</h2>
    @else
      <h2 class="title">Archives</h2>
    @endif

    <ul class="archive">
      @foreach ($posts as $post)
        <li>
          <span>{{ date("M/d/Y", strtotime($post->publish_date)) }}</span> <strong><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></strong>
        </li>
      @endforeach
    </ul>
  </section>
@stop
