<div class="card" style="width: 18rem;">
  <img src="{{Storage::url($image)}}" class="card-img-top" alt="...">
  
  
  
  
  <div class="card-body">
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $content }}</p>
 
  </div>
  <a href="{{ route('articles.show', $idArticle) }}" class="btn btn-primary m-3">Scopri di piu'</a>
</div>