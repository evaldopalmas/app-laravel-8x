<a href="{{ route('posts.create') }}">Criar Novo Post</a>

@if ( session('error'))
    <div>
      {{ session('error') }}
    </div>
@endif

@if ( session('success'))
    <div>
      {{ session('success') }}
    </div>
@endif

<p>Listad e Posts</p>

@foreach ($posts as $post)
  <p>[
      <a href="{{ route('posts.show', $post->id) }}">Detalhes</a>
      <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
     ]
     {{ $post->title }} - {{ $post->content }} </p>
@endforeach
