{{-- Dichiarazione dei parametri che il componente riceve --}}
@props(['article', 'title', 'content', 'image', 'idArticle'])

<div class="card" style="width: 18rem;">
  <img src="{{Storage::url($image)}}" class="card-img-top" alt="...">
  
  
  
  
  <div class="card-body">
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $content }}</p>
 
  </div>
  {{-- Ora possiamo usare $article->tags perché l'oggetto article è disponibile --}}
  <div class="d-flex flex-row">
    @foreach ($article->tags as $tag)
      <span class="badge bg-primary m-1">{{ $tag->name }}</span>
    @endforeach
  </div>
  <a href="{{ route('articles.show', $idArticle) }}" class="btn btn-primary m-3">Scopri di piu'</a>
</div>