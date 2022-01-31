<h1>Editar Post</h1>


@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<form action="{{ route('posts.update', $post->id) }}" method="post">
  @csrf
  @method('put')
  <label for="title">Título:</label>
  <input type="text" name="title" id="title" placeholder="Título" value="{{ $post->title }}"><br>
  <label for="content">Conteúdo:</label>
  <textarea type="text" name="content" id="content" placeholder="Conteúdo" >{{ $post->content }}</textarea><br>
  <button type="submit">Enviar..</button>
</form>
