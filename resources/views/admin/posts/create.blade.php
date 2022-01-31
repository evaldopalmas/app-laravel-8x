<h1>Criar Novo Post</h1>


@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<form action="{{ route('posts.store')}}" method="post">
  @csrf
  <label for="title">Título:</label>
  <input type="text" name="title" id="title" placeholder="Título" value="{{ old('title') }}"><br>
  <label for="content">Conteúdo:</label>
  <textarea type="text" name="content" id="content" placeholder="Conteúdo" >{{ old('content') }}</textarea><br>
  <button type="submit">Enviar..</button>
</form>
